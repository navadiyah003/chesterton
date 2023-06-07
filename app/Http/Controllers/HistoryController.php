<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Timeline;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::first();
        $timeline = Timeline::all();
        return view('history', compact('history', 'timeline'));
    }

    public function downloadBrochure()
    {
        $file = public_path().'/admin/uploads/history/brochure/1682407414.pdf';
        $headers = array(
                'Content-Type: application/pdf',
                );
        return response()->download($file, 'brochure.pdf', $headers);
    }
}
