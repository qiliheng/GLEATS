<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiskAssessment;

class RiskAssessmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'assessment_date' => 'required|date',
            'risk_score' => 'required|integer',
            'mitigation_status' => 'required|string',
            'project_id' => 'required|exists:projects,id',
            'form_data' => 'required|json', 
        ]);

        $riskAssessment = RiskAssessment::create([
            'assessment_date' => $validatedData['assessment_date'],
            'risk_score' => $validatedData['risk_score'],
            'mitigation_status' => $validatedData['mitigation_status'],
            'project_id' => $validatedData['project_id'],
            'form_data' => $validatedData['form_data'], 
        ]);

        return response()->json(['message' => 'Risk Assessment created successfully', 'data' => $riskAssessment], 201);
    }
}
