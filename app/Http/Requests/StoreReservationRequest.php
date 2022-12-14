<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'schedule'=>'required',
            'chair'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'schedule.required'=>'Harap Pilih Jadwal',
            'chair.required'=>'Jumlah Kursi Harus Diisi',
        ];
    }
}
