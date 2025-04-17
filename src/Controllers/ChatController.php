<?php

namespace Zeeshan\ChatApp\Controllers;

use Illuminate\Routing\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat-app::index');
    }
}