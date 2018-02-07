<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    /**
     * Page to submit form
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required',
            ]

        );

        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();

        return redirect('/')->with(['success' => 'Message Sent']);
    }

    /**
     * Page with all messages
     * @return \Illuminate\View\View
     */
    public function getMessages()
    {
        $messages = Message::all();

        return view('messages')->with('messages', $messages);

    }
}
