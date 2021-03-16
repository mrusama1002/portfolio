<?php

namespace App\Http\Controllers;

use App\Notifications\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function messageSent(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $data = $request->except('_token');

        Notification::route('mail', 'example@test.com')
            ->notify(new Message($data));
        return redirect('/');
    }
}
