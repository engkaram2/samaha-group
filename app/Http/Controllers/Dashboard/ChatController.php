<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    function index()
    {
        return view('Dashboard.Chats.index');
    }

    function user_chat(Request $request, $id,$ticket)
    {
        $data['id']=$id;
        $data['ticket']=$ticket;
        return view('Dashboard.Chats.user_chat_page',$data);
    }

}
