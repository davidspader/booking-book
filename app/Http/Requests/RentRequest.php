<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Date;

class RentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'initial_date' => 'date|required',
            'final_date' => 'date|required',
            'daily_price' => 'numeric|required',
            'cleaning_price' => 'numeric|required',
            'discount' => 'numeric|required'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'initial_date' => $this->prepareData($this['initial_date'], 'initial'),
            'final_date' => $this->prepareData($this['final_date'], 'final'),
            'daily_price' => $this->prepareToValueZero($this['daily_price']),
            'cleaning_price' => $this->prepareToValueZero($this['cleaning_price']),
            'discount' => $this->prepareToValueZero($this['discount']),
        ]);
    }

    public function prepareData($data, $dataType)
    {
        $data = explode("/", $data);
        $data = $data[2]."-".$data[1]."-".$data[0];

        if($dataType == 'initial'){
            $data .= " 14:00:00";
        }elseif($dataType == 'final') {
            $data .= " 10:00:00";
        }else {
            return null;
        }

        return $data;
    }

    public function prepareToValueZero($value)
    {
        if($value == null){
            $value = 0;
        }

        return $value;
    }
}
//2019-04-02 15:25:37
