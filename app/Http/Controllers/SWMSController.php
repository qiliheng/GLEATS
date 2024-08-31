<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SWMS;

class SWMSController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required|string',
            'job_description' => 'required|string',
            'steps_required' => 'required|string',
            'project_id' => 'required|exists:projects,id',
        ]);

        $swms = SWMS::create($validatedData);

        return response()->json(['message' => 'SWMS created successfully', 'data' => $swms], 201);
    }
}
