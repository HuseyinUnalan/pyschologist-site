<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function AllMessage()
    {
        $messages = Message::latest()->get();
        return view('admin.message.all_message', compact('messages'));
    }

    public function DetailMessage(Request $request, $id)
    {

        Message::findOrFail($id)->update(['read_status' => 1]);

        $messages = Message::findOrFail($id);
        return view('admin.message.detail_message', compact('messages'));

    }

    public function DeleteMessage($id)
    {

        Message::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
