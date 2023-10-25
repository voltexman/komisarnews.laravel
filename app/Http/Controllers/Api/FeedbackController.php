<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\FeedbackResource;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return FeedbackResource::collection(Feedback::all());
    }

    /**
     * Change status for a Feedback.
     */
    public function status(string $id)
    {
        $feedback = Feedback::findOrFail($id);

        $feedback->update(['status' => Feedback::STATUS_VIEWED]);

        return $feedback;
    }
}
