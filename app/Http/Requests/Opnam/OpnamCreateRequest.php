<?php

namespace App\Http\Requests\Opnam;

use Illuminate\Foundation\Http\FormRequest;

class OpnamCreateRequest extends FormRequest
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
            'report_project_id' => 'required|exists:report_projects,id',
            // 'entries.*.lokasi' => 'required',
            'entries.*.pekerjaan' => 'required',
            'entries.*.date' => 'required',
        ];
    }
}
