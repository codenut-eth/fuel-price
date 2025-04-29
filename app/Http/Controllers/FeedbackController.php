<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
	
	 public function index()
    {
        $feedback = Feedback::where('user_id', Auth::user()->user_id)->get();
		return view('feedback.index', compact('feedback'));
    }

    public function create()
    {
        $user = Auth::user();
        $vehicle = Vehicle::where('user_id',$user->user_id)->count();  
        return view('feedback.create',compact('vehicle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'station_id' => 'required|string|max:255',
            'comment' => 'required|string',
            'rating' => 'required|numeric|min:1|max:5',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Max 2MB
        ]);

        $attachmentPath = '';
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('uploads/feedback', 'public');
        }

        Feedback::create([
            'station_id' => $request->station_id,
            'user_id' => Auth::user()->user_id ?? 'Anonymous',
            'title' => $request->title,
            'comment' => $request->comment,
            'user_rating' => $request->rating,
            'attachments' => $attachmentPath,
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
        ]);

        return response()->json(['message' => 'Feedback successfully submitted.']);
    }
	
	
	
}
