<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpeakersRequest extends FormRequest
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
            'nama_speaker' => ['required','string','max:255'],
            'asal_instansi' => ['required','string','max:255'],
            'topic' => ['required','string','max:255'],
            'summary' => ['required','string'],
            'foto' => ['nullable','image','max:2048'],
        ];
    }
}
