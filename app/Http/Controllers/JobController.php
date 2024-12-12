<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\StoreJobRequest;
use App\Http\Requests\Job\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Auth;
use Illuminate\Support\Arr;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        return view('jobs.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $attributes = $request->validated();

        $attributes['featured'] = $request->has('featured');

        $employer = Auth::user()->employer;

        $job = $employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            $tags = explode(',', $attributes['tags']);
            foreach ($tags as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

}
