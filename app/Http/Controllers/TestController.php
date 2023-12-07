<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;

class TestController extends Controller
{
    /*public function index(){
        $user = User::with('contact')->first();
        dd($user->toArray());
    }*/

    public function index(){
        // $contact = Contact::with('user')->first();
        // dd($contact->toArray());

        $user = User::with(['contact','posts'])->find(1);
        dd($user->toArray());

        //$post = Post::with('user')->first();
        //dd($post->toArray());
    }
}
