<?php

namespace Homelen\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

final class UpdateProviderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'link' => 'url',
            'deleted_at' => Rule::date()->nowOrFuture(),
        ];
    }
}
