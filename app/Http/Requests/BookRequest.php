<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:3|max:100',
            'author' => 'required|min:2|max:100',
            'year' => 'required|integer'
        ];
    }

    public function messages() {
        return [
            'required' => 'Поле «:attribute» обязательно для заполнения',
            'integer' => 'Поле «:attribute» должно быть заполнено числами',
            'min' => 'Поле «:attribute» должно быть не меньше :min символов',
            'max' => 'Поле «:attribute» должно быть не больше :max символов',
        ];
    }

    public function attributes() {
        return [
            'title' => 'Название книги',
            'author' => 'Автор книги',
            'year' => 'Год выпуска',
            'cover' => 'Обложка книги',
        ];
    }
}
