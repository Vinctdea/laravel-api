<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;


class Pagecontroller extends Controller
{
    public function index()
    {

        $jobs = Job::orderBy('id', 'desc')->paginate(5);

        $success = true;

        $response = [
            'success' => $success,
            'results' => $jobs
        ];

        return response()->json($response);
    }
}
