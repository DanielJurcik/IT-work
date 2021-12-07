<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Task;
use App\Models\JobOffer;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function getJobAndCompanyCount(){
        $offers_count = JobOffer::count();
        $job_offers = JobOffer::skip(0)->take(5)->orderBy('id','DESC')->get();
        $companies = Company::skip(0)->take(5)->orderBy('id','DESC')->get();
        $companies_count = Company::count();

        $arr_view_data['offers_count'] = $offers_count;
        $arr_view_data['companies_count'] = $companies_count;
        $arr_view_data['job_offers'] = $job_offers;
        $arr_view_data['companies'] = $companies;
        
        return view('dashboard',$arr_view_data);
    }
}