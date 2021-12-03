<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Task;
use App\Models\JobOffer;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobOfferController extends Controller
{
    public function createNewJobOffer($company_id)
    {
        $company = Company::where('id', '=', $company_id)->first();
        return view('job-offer-form', ['company_id' => $company_id],['company_name' => $company->name]);
    }

    public function insertNewJobOffer(Request $request)
    {
        $title = $request->input('headlineText');
        $start_date = $request->input('startDate');
        $salary_min = $request->input('salaryMin');
        $salary_max = $request->input('salaryMax');
        $work_place = $request->input('workPlace');
        $description = $request->input('job-desc');
        $experience = $request->input('experience');
        $benefits = $request->input('benefits');
        $company_id = $request->input('company-id');

        $job_offer = new JobOffer();
        $job_offer->title = $title;
        $job_offer->start_date = $start_date;
        $job_offer->salary_min = $salary_min;
        $job_offer->salary_max = $salary_max;
        $job_offer->work_place = $work_place;
        $job_offer->description = $description;
        $job_offer->experience = $experience;
        $job_offer->benefits = $benefits;
        $job_offer->company_id = $company_id;

        $job_offer->save();

        return redirect()->route('select-all-offers');
    }
}