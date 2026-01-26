<?php

namespace Homelen\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class CreateProviderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'string|max:255',
            'link' => 'url'
        ];
    }
}
