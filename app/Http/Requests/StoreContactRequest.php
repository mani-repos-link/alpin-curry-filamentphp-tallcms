<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreContactRequest extends FormRequest
{
    protected $errorBag = 'contact';

    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'contact_name' => ['required', 'string', 'max:120'],
            'contact_email' => ['required', 'email', 'max:255'],
            'contact_phone' => ['nullable', 'string', 'max:40'],
            'contact_message' => ['required', 'string', 'max:2000'],
            'contact_website' => ['nullable', 'max:0'],
            'contact_started_at' => ['required', 'integer'],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            $startedAt = (int) $this->input('contact_started_at', 0);
            $elapsed = now()->timestamp - $startedAt;

            if ($startedAt <= 0 || $elapsed < 2 || $elapsed > 43200) {
                $validator->errors()->add('form', __('site.forms.invalid_submission'));
            }
        });
    }
}
