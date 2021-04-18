<?php

namespace App\Http\Controllers;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class MessageController extends Controller
{
//    use Dispatchable, InteractsWithSockets, SerializesModels;

//    public $message;
//
//    public function __construct($message)
//    {
//        $this->message = $message;
//    }

    public function index()
    {
        return view('message');
    }

    public function broadcastOn()
    {
        return ['my-channel'];
    }

    public function broadcastAs()
    {
        return 'my-event';
    }
}
