<?php

namespace App\Http\Requests\OperationalProject;

use Illuminate\Foundation\Http\FormRequest;

class OperationalProjectUpdateRequest extends FormRequest
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
            'deal_project_id' => 'nullable|exists:deal_projects,id',
            'lokasi' => 'nullable',
            'keterangan' => 'nullable'
        ];
    }
}
