<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class SubmissionController extends Controller
{
    public function submit(SubmissionRequest $request)
    {
        try {
            ProcessSubmission::dispatch($request->only(['name', 'email', 'message']));
        } catch (\Exception $e) {
            Log::error('Job dispatch failed: ' . $e->getMessage());

            return response()->json([
                'error' => 'Failed to process submission, please try again later.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'message' => 'Submission received and is being processed.'
        ], Response::HTTP_OK);
    }
}
