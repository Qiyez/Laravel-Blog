<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\ContactMeInfo;

class ContactController extends Controller
{
    protected $fields = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'message' => '',
    ];

    public function showForm()
    {
        return view('blog.contact');
    }

    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::to($data['email'])->send(new ContactMail($data));

        $info = new ContactMeInfo();
        foreach (array_keys($this->fields) as $field) {
            $info->$field = $request->get($field);
        }
        $info->save();

        return back()
            ->with("success", "消息已发送，感谢您的反馈");
    }
}
