<?php

namespace App\Http\Controllers;

//Models
use App\Models\Owner;
use App\Models\Task;
use App\Models\JobOffer;
use App\Models\Company;
//Other imports
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JobOfferController extends Controller
{
    public function createNewJobOffer($company_id)
    {
        $company = Company::where('id', '=', $company_id)->first();
        return view('job-offer-form', ['company_id' => $company_id],['company_name' => $company->name]);
    }

    public function selectAllOffers()
    {
        $offers = JobOffer::all();
        return view('select-all-offers', ['offers' => $offers]);
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


    public function jobOfferDetail($id){
        $job_offer = JobOffer::find($id);
        $company = Company::find($job_offer->company_id);
        return view('job-offer-detail', ['job_offer' => $job_offer],['company' => $company]);
    }


    public function updateJobOffer(Request $request)
    {
        $id = $request->input('jobOfferId', false);
        $title = $request->input('headlineText');
        $start_date = $request->input('startDate');
        $salary_min = $request->input('salaryMin');
        $salary_max = $request->input('salaryMax');
        $work_place = $request->input('workPlace');
        $description = $request->input('job-desc');
        $experience = $request->input('experience');
        $benefits = $request->input('benefits');
        $company_id = $request->input('company-id');

        if($id) {
            $job_offer = JobOffer::find($id);
            $job_offer->title = $title;
            $job_offer->start_date = $start_date;
            $job_offer->salary_min = $salary_min;
            $job_offer->salary_max = $salary_max;
            $job_offer->work_place = $work_place;
            $job_offer->description = $description;
            $job_offer->experience = $experience;
            $job_offer->benefits = $benefits;
            $job_offer->company_id = $company_id;
            $job_offer->update();
        }

        return redirect()->route('select-all-offers');
    }

    public function showJobOfferForm($id)
    {
        $job_offer= JobOffer::find($id);
        $company = Company::find($job_offer->company_id);
        return view('job-offer-update-form', ['job_offer' => $job_offer],['company' => $company]);
    }

    public function deleteJobOffer($id)
    {
        $job_offer= JobOffer::findOrFail($id);
        $job_offer->delete();
        return redirect()->route('select-all-offers');
    }
}