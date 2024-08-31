<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audit;

class AuditController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'author_name' => 'required|string',
            'findings' => 'required|string',
            'scores' => 'required|integer',
            'risk_assessment_id' => 'required|exists:risk_assessments,id',
        ]);

        $audit = Audit::create($validatedData);

        return response()->json(['message' => 'Audit created successfully', 'data' => $audit], 201);
    }
}
