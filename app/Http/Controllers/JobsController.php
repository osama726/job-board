<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index(){
        $jobs = Job::all();
        return  view('job.index', ['jobs' => $jobs ], ["pagetitle" => 'Job page' ]);
    }
}
