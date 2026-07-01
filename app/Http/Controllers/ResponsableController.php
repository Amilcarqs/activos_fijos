<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ResponsableRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $responsables = Responsable::paginate();

        return view('responsable.index', compact('responsables'))
            ->with('i', ($request->input('page', 1) - 1) * $responsables->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $responsable = new Responsable();

        return view('responsable.create', compact('responsable'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponsableRequest $request): RedirectResponse
    {
        //Responsable::create($request->validated());
        
        //guarfar la imagne en carpeta
        $rutaImagen = $request->file('foto')->store('responsables', 'public');
        //Guardar en BD
        Responsable::create(
            [
                'ci' => $request->ci,
                'nombre' => $request->nombre,
                'foto' => $rutaImagen,
            ]
        );
        return Redirect::route('responsables.index')
            ->with('success', 'Responsable creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $responsable = Responsable::find($id);

        return view('responsable.show', compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $responsable = Responsable::find($id);

        return view('responsable.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponsableRequest $request, $id): RedirectResponse
    {
        //$responsable->update($request->validated());

        //Obtener el responsable
        $activo = Responsable::findOrFail($id);

        //Actualizar campos que NO son imagen
        $activo->ci = $request->ci;
        $activo->nombre = $request->nombre;

        //Si se sube una nueva imagen
        if ($request->hasFile('foto')) {
            //Borrar la imagen anterior si existiera
            if ($activo->foto && Storage::disk('public')->exists($activo->foto)) {
                Storage::disk('public')->delete($activo->foto);
            }
            //Guardar la nueva imagen
            $rutaImagen = $request->file('foto')->store('responsables', 'public');
            //Guardar el nuevo nombre en la BD
            $activo->foto = $rutaImagen;
        }
        //Guardar cambios
        $activo->save();

        return Redirect::route('responsables.index')
            ->with('success', 'Responsable actualizado correctamente');
    }

    public function destroy($id): RedirectResponse
    {
        Responsable::find($id)->delete();

        return Redirect::route('responsables.index')
            ->with('success', 'Responsable eliminado correctamente');
    }
}
