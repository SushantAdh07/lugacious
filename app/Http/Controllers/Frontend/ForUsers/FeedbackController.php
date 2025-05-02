<?php

namespace App\Http\Controllers\Frontend\ForUsers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function create(){
        $feedbacks = [];
        if(Auth::check()){
            $feedbacks = Auth::user()->feedbacks()->latest()->get();
        }
        return view('frontend.forUsers.feedback', compact('feedbacks'));
    }

    public function store(Request $request){

        $request->validate([
            'feedback' => ['required', 'min:10'],
        ]);

        Auth::user()->feedbacks()->create([
            'feedback' =>$request->feedback,
        ]);

        return redirect()->back()->with('success', 'Your feedback has been submitted successfully!');
    }
}
