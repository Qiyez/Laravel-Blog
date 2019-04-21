<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentCreateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ];
    }

    /**
     *Return the fields and values to create a new comment from
     */
    public function commentFillData()
    {
        return [
            'post_id' => $this->post_id,
            'name' => $this->name,
            'email' => $this->email,
            'content_raw' => $this->get('content'),
        ];
    }
}
