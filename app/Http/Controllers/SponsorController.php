<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SponsorController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required|string',
            'age' => 'required|string',
            'childName' => 'nullable|string|max:255',
            'amount' => 'required|string',
            'message' => 'nullable|string|max:500',
        ]);

        // Process the sponsorship request

        return redirect()->back()->with('success', 'Sponsorship request submitted successfully!');
    }
}
