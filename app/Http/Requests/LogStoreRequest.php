<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class LogStoreRequest extends FormRequest
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
            'client' => ['required', 'array'],
            'client.id' => ['required', 'string'],
            'client.name' => ['required', 'string'],
            'client.support_branch' => ['nullable', 'string'],
            'client.country' => ['required', 'string'],

            'app_user' => ['required', 'array'],
            'app_user.id' => ['required', 'string'],
            'app_user.name' => ['required', 'string'],
            'app_user.client_id' => ['required', 'string'],

            'message' => ['required', 'string'],
            'source_type' => ['nullable', 'string'],
            'back_office_version' => ['nullable', 'string'],
            'app_name' => ['nullable', 'string'],
            'app_id' => ['nullable', 'string'],
            'app_version' => ['required', 'string'],
            'web_service_version' => ['required', 'string'],
            'database_version' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'model' => ['required', 'string'],
            'ram' => ['required', 'string'],
            'disk' => ['required', 'string'],
            'os' => ['required', 'string'],
            'os_version' => ['required', 'string'],
            'date_time' => ['required', 'date_format:Y-m-d H:i:s'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'message' => 'Unprocessable Content',
        ], 422));
    }
}
