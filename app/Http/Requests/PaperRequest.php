<?php

namespace App\Http\Requests;

class PaperRequest extends Request
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:150',
            'time_limit' => 'required|numeric|min:1',
            'need_password' => 'boolean',
            'password' => 'required_if:need_password,true|string|min:1',
            'open_later' => 'boolean',
            'open_time' => 'required_if:open_later,true|date',
            'close_on_time' => 'boolean',
            'close_time' => 'required_if:close_on_time,true|date',
            'questions' => 'required|array|min:1',
            'answers' => 'required|array',
            'repeat_limit' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'same_length' => '问题与答案的数量不匹配',
            'type_match' => '问题与答案的类型不匹配',
        ];
    }
}
