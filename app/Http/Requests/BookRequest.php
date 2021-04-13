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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'author' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],
            'year' => [
                'required',
                'integer',
                'min:1'
            ],

            'cover' => 'nullable|image|mimes:jpeg,bmp,png',
        ];
    }

    public function messages() {
        return [
            'required' => 'Поле «:attribute» обязательно для заполнения',
            'min' => [
                'string' => 'Поле «:attribute» должно быть не меньше :min символов',
                'numeric' => 'Нужно выбрать категорию нового поста блога',
                'file' => 'Файл «:attribute» должен быть не меньше :min Кбайт'
            ],
            'max' => [
                'string' => 'Поле «:attribute» должно быть не больше :max символов',
                'file' => 'Файл «:attribute» должен быть не больше :max Кбайт'
            ],
        ];
    }

    public function attributes() {
        return [
            'title' => 'Наименование',
            'author' => 'Автор',
            'year' => 'Год',
            'cover' => 'Обложка книги',
        ];
    }
}
