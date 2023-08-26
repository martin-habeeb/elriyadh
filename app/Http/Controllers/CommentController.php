<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'comment' => 'required',
            'name' => 'required',
            'email' => 'required',
            'comment_parent' => 'required',
            'post_ID' => 'required',
            'user_id' => 'required'

        ]);
        Contact::create($request->all());

        return back()->with('Your Comment is added successfully!');
    }

    public function show(Request $request){
        return view('reviews');
    }

}

