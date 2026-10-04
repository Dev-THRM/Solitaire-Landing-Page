<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'job_listing_id',
        'name',
        'email',
        'phone',
        'location',
        'resume_path',
    ];

    public function jobListing()
    {
        return $this->belongsTo(JobListing::class);
    }
}
