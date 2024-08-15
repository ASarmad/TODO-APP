<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskCreateUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors()->first(), 400));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function onCreate()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'deadline_time' => 'nullable|date_format:H:i',
        ];
        return $rules;
    }

    public function onUpdate()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'deadline_date' => 'required|date',
            'deadline_time' => 'nullable|date_format:H:i',
        ];
        return $rules;
    }

    public function rules()
    {
        return $this->isMethod('put') ? $this->onUpdate() : $this->onCreate();
    }

    public function attributes()
    {
        $attributes = [
            'title' => 'Title',
            'message' => 'Message',
            'deadline_date' => 'Deadline Date',
            'deadline_time' => 'Deadline Time',
        ];
        return $attributes;
    }
}
