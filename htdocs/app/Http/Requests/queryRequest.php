<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 11/04/2015
 * Time: 23:06
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Response;


class queryRequest extends FormRequest {

    public function rules()
    {
        return [
            'query' => 'required'
        ];
    }

} 