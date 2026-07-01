<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'codigo' => 'required|string',
			'descrip' => 'required|string',
			'precio' => 'required',
			'fadquisicion' => 'required',
			'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
			'estado_id' => 'required',
			'grupo_id' => 'required',
			'oficina_id' => 'required',
			'responsable_id' => 'required',
        ];
    }
}
