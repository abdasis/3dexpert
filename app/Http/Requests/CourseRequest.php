<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_kelas' => 'required|min:5',
            'nama_pengajar' => 'required|string',
            'harga_kelas' => 'required|numeric',
            'rating_kelas' => 'required',
            'trailer' => 'mimes:mp4|max:50000',
        ];
    }
}
