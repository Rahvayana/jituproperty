<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'film'=>'required',
            'cinema'=>'required',
            'datetime'=>'required',
            'chair'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'film_id.required'=>'Harap Pilih Judul Film',
            'cinema_id.required'=>'Harap Pilih Bioskop',
            'date_time.required'=>'Harap Memilih Tanggal',
            'chair.required'=>'Jumlah Kursi Harus Diisi',
        ];
    }
}
