<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitigation;

class MitigationController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mitigation_description' => 'required|string',
            'reassessment_date' => 'required|date',
            'new_risk_score' => 'required|integer',
            'risk_id' => 'required|exists:risks,id',
        ]);

        $mitigation = Mitigation::create($validatedData);

        return response()->json(['message' => 'Mitigation created successfully', 'data' => $mitigation], 201);
    }
}
