<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservasRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('put') || $this->isMethod('patch');

        return [
            'nombre_cliente' => $isUpdate 
                ? 'sometimes|string|max:255' 
                : 'required|string|max:255',

            'telefono' => $isUpdate 
                ? 'sometimes|string|max:20' 
                : 'required|string|max:20',

            'mesa' => $isUpdate 
                ? 'sometimes|integer|min:1' 
                : 'required|integer|min:1',

            'fecha_reserva' => $isUpdate 
                ? 'sometimes|date' 
                : 'required|date',

            'hora_reserva' => $isUpdate 
                ? 'sometimes' 
                : 'required',

            'cantidad_personas' => $isUpdate 
                ? 'sometimes|integer|min:1' 
                : 'required|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre_cliente.required' => 'El nombre del cliente es obligatorio.',
            'nombre_cliente.string' => 'El nombre debe ser texto.',
            'nombre_cliente.max' => 'El nombre no puede exceder 255 caracteres.',

            'telefono.required' => 'El teléfono es obligatorio.',
            'telefono.string' => 'El teléfono debe ser texto.',

            'mesa.required' => 'La mesa es obligatoria.',
            'mesa.integer' => 'La mesa debe ser un número.',
            'mesa.min' => 'La mesa debe ser mayor a 0.',

            'fecha_reserva.required' => 'La fecha es obligatoria.',
            'fecha_reserva.date' => 'La fecha debe ser válida.',

            'hora_reserva.required' => 'La hora es obligatoria.',

            'cantidad_personas.required' => 'La cantidad de personas es obligatoria.',
            'cantidad_personas.integer' => 'Debe ser un número.',
            'cantidad_personas.min' => 'Debe ser mayor a 0.',
        ];
    }
}
