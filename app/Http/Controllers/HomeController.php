<?php

namespace App\Http\Controllers;

use App\Notifications\Portfolio;
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

        Notification::route('mail', 'user@portfolio.com')
            ->notify(new Portfolio($data));
        return redirect('/');
    }
}
