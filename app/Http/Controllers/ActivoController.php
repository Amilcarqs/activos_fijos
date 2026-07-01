<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ActivoRequest;
use App\Models\Estado;
use App\Models\Grupo;
use App\Models\Oficina;
use App\Models\Responsable;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $activos = Activo::paginate();

        return view('activo.index', compact('activos'))
            ->with('i', ($request->input('page', 1) - 1) * $activos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $activo = new Activo();
        $estados = Estado::All();
        $grupos = Grupo::All();
        $oficinas = Oficina::All();
        $responsables = Responsable::All();

        return view('activo.create', compact('activo', 'estados', 'grupos', 'oficinas', 'responsables'));
    }

    /**
     * Store a newly creado resource in storage.
     */
    public function store(ActivoRequest $request): RedirectResponse
    {
        //guardar imagen en carpeta
        //dd($request);
        $rutaImagen = $request->file('foto')->store('activos', 'public');
        //Guardar en BD
        Activo::create(
            [
                'codigo' => $request->codigo,
                'descrip' => $request->descrip,
                'precio' => $request->precio,
                'fadquisicion' => $request->fadquisicion,
                'foto' => $rutaImagen,

                'estado_id' => $request->estado_id,
                'grupo_id' => $request->grupo_id,
                'oficina_id' => $request->oficina_id,
                'responsable_id' => $request->responsable_id,
            ]
        );

        return Redirect::route('activos.index')
            ->with('success', 'Activo creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $activo = Activo::find($id);

        return view('activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $activo = Activo::find($id);
        $estados = Estado::All();
        $grupos = Grupo::All();
        $oficinas = Oficina::All();
        $responsables = Responsable::All();

        return view('activo.edit', compact('activo', 'estados', 'grupos', 'oficinas', 'responsables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivoRequest $request, $id): RedirectResponse
    {
        //$activo->update($request->validated());

        //Obtener el activo
        $activo = Activo::findOrFail($id);

        //Actualizar campos que NO son imagen
        $activo->codigo = $request->codigo;
        $activo->descrip = $request->descrip;
        $activo->precio = $request->precio;
        $activo->fadquisicion = $request->fadquisicion;
        $activo->estado_id = $request->estado_id;
        $activo->grupo_id = $request->grupo_id;
        $activo->oficina_id = $request->oficina_id;
        $activo->responsable_id = $request->responsable_id;

        //Si se sube una nueva imagen
        if ($request->hasFile('foto')) {
            //Borrar la imagen anterior si existiera
            if ($activo->foto && Storage::disk('public')->exists($activo->foto)) {
                Storage::disk('public')->delete($activo->foto);
            }
            //Guardar la nueva imagen
            $rutaImagen = $request->file('foto')->store('activos', 'public');
            //Guardar el nuevo nombre en la BD
            $activo->foto = $rutaImagen;
        }
        //Guardar cambios
        $activo->save();
        return Redirect::route('activos.index')
            ->with('success', 'Activo actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Activo::find($id)->delete();

        return Redirect::route('activos.index')
            ->with('success', 'Activo eliminado correctamente');
    }

    //para los pdf
    public function pdf()
    {
        $activos = Activo::with([
            'estado',
            'grupo',
            'oficina',
            'responsable'
        ])->get();

        $pdf = Pdf::loadView('activo.pdf', compact('activos'))
            ->setPaper('a4', 'landscape');

        return $pdf->stream('reporte_activos.pdf');

        // para descargar el archivo
        //return $pdf->download('reporte_activos.pdf');
    }

    //pagina de qr
    public function qr()
    {
        $activos = Activo::with([
            'estado',
            'grupo',
            'oficina',
            'responsable'
        ])->get();

        return view('activo.qr', compact('activos'));
    }


    // pdf de qr
    public function pdfqr()
    {
        $activos = Activo::with([
            'estado',
            'grupo',
            'oficina',
            'responsable'
        ])->get();

        foreach ($activos as $activo) {

            $activo->qr = base64_encode(
                QrCode::format('png')
                    ->size(130)
                    ->generate(
                        "Codigo: {$activo->codigo}\n" .
                            "Descripcion: {$activo->descrip}\n" .
                            "Oficina: {$activo->oficina->nombre}\n" .
                            "Fecha adquisicion: {$activo->fadquisicion}"
                    )
            );
        }

        $pdf = Pdf::loadView('activo.pdfqr', compact('activos'));

        return $pdf->stream('etiquetas_qr.pdf');
    }
}
