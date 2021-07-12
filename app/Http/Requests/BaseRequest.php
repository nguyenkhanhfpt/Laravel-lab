<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class BaseRequest extends FormRequest
{
    /**
     * @param Validator $validator
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = array_map(function ($e) {
            return $e[0];
        }, $validator->errors()->toArray());

        $response = new JsonResponse([
            'status' => 422,
            'data' => $errors,
            'message' => 'Failed',
        ]);

        throw new ValidationException($validator, $response);
    }
}
