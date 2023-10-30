<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LechugaRequest extends FormRequest
{
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $input = $this->all();

        $input['TIPOL']                = trim($input['TIPOL']);
        $input['CANTL']                = trim($input['CANTL']);
        $input['NOMBREC']                = trim($input['NOMBREC']);

        $this->replace($input);

        return [
            'TIPOL'               => 'required|max:20',
            'CANTL'               => 'required|max:10',
            'NOMBREC'               => 'required|max:30',
            
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
