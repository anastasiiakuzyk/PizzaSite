<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {
    public function add(Request $request) {
        $validated = $request->validate([
            'userName' => 'required|min:3',
            'email' => 'required|email|min:3',
            'message' => 'required|min:3'
        ]);
        $userName = $request->input('userName');
        $email = $request->input('email');
        $message = $request->input('message');

        Comment::store($message, $email, $userName);

        return view('thankYouPage', ['object'=>'відгук', 'page' => 'review']);
    }

    public function getHolder() {
        return view('thankYouPage', ['object'=>'відгук', 'page' => 'review']);
    }
}
