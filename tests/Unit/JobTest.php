<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer()->is($employer))->toBeTrue();
});

it('can have tag', function () {
    $job = Job::factory()->create();

    $job->tag('Frontent');

    expect($job->tags)->toHaveCount(1);
});
