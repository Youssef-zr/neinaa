<?php

namespace App\Http\Controllers\frontend;

use App\Events\SendMessageEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function home()
    {
        $hasNavbar = '';
        return view("frontend.pages.home", compact('hasNavbar'));
    }

    public function contact(ContactRequest $request)
    {
        $data = $request->all();
        // $contact = new Contact();
        // $contact->fill($data)->save();

        // // fire a event and send mail
        // event(new SendMessageEvent($contact));

        Mail::to(['yn-neinaa@hotmail.com'])->send(new ContactMessage($data));

        $request->session()->flash('success', "We are recieved your message successfully <i class='fa fa-smile-o'></i>");
        return back();
    }
}
