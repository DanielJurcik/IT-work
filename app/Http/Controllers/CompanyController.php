<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Task;
use App\Models\JobOffer;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{

    public function insertCompany(Request $request)
    {
        echo('funguje');
        $company_name = $request->input('companyName');
        $sector = $request->input('sector');
        $company_description = $request->input('companyDescription');
        $number_of_employees = $request->input('numberOfEmployees');
        $contact_mail = $request->input('contactMail');
        $contact_phone = $request->input('contactPhone');
        $ico = $request->input('ico');
        $dic = $request->input('dic');

        $company = Company::where('name', '=', $company_name)->first();

        if(!$company){
            $company = new Company();
            $company->name = $company_name;
            $company->sector = $sector;
            $company->description = $company_description;
            $company->number_of_staff = $number_of_employees;
            $company->contact_mail = $contact_mail;
            $company->contact_phone = $contact_phone;
            $company->ICO = $ico;
            $company->DIC = $dic;

            $company->save();

            return redirect()->route('select-all-offers');
        }
    }

    
    public function selectAllCompanies()
    {
        $companies = Company::all();
        return view('companies', ['companies' => $companies]);
    }

    public function selectCompany($id)
    {
        $company = Company::find($id);
        $jobOffers = JobOffer::where('company_id', '=', $id)->get();
        return view('company-detail', ['company' => $company], ['jobOffers' => $jobOffers]);
    }

    public function updateTask(Request $request)
    {
        $id = $request->input('id', false);
        $taskName = $request->input('name', false);
        $owner = $request->input('owner', false);

        if($id) {
            $existingOwner = Owner::where('owner_name', '=', $owner)->first();
            if($existingOwner) {
                $task = Task::find($id);
                $task->name = $taskName;
                $task->owner_id = $existingOwner->id;
                $task->update();
            } else {
                return redirect()->route('insert-form');
            }
        }

        return redirect()->route('select-all-tasks');
    }
}
