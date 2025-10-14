<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function notifications(Request $request)
    {

        // $notifications = $request->user()->notifications()->latest()->get();
        $notifications = $request->user()->notifications;

        return response()->json(compact('notifications'));
    }
}
