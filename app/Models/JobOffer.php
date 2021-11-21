<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_offer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'job-type','start_date','salary_min','salary_max','work_place','description','experience','benefits'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class);
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
