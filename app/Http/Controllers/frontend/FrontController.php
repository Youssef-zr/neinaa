<?php

namespace App\Http\Controllers\frontend;

use App\Events\SendMessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class FrontController extends Controller
{
    public function home()
    {
        $hasNavbar = '';
        return view("frontend.pages.home", compact('hasNavbar'));
    }

    public function contact(ContactRequest $request)
    {
        $contact = new Contact();
        $data = $request->all();
        $contact->fill($data)->save();

        // fire a event and send mail
        event(new SendMessageEvent($contact));

        $request->session()->flash('success', "We are recieved your message successfully <i class='fa fa-smile-o'></i>");
        return back();
    }
}
