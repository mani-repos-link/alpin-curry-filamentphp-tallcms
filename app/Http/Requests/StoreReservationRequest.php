<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreReservationRequest extends FormRequest
{
    protected $errorBag = 'reservation';

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
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:40'],
            'guests' => ['required', 'integer', 'min:1', 'max:20'],
            'reservation_date' => ['required', 'date', 'after_or_equal:today'],
            'reservation_time' => ['required', 'date_format:H:i'],
            'message' => ['nullable', 'string', 'max:1000'],
            'reservation_website' => ['nullable', 'max:0'],
            'reservation_started_at' => ['required', 'integer'],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator): void {
            $startedAt = (int) $this->input('reservation_started_at', 0);
            $elapsed = now()->timestamp - $startedAt;

            if ($startedAt <= 0 || $elapsed < 2 || $elapsed > 43200) {
                $validator->errors()->add('form', __('site.forms.invalid_submission'));
            }
        });
    }
}
