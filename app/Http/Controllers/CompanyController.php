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

class CompanyController extends Controller
{
    public function getInsertForm()
    {
        return view('company-insert');
    }

    public function insertCompany(Request $request)
    {
        //Getting data from form
        $company_name = $request->input('companyName');
        $sector = $request->input('sector');
        $company_description = $request->input('companyDescription');
        $number_of_employees = $request->input('numberOfEmployees');
        $contact_mail = $request->input('contactMail');
        $contact_phone = $request->input('contactPhone');
        $ico = $request->input('ico');
        $dic = $request->input('dic');

        //Check for name of company
        $company = Company::where('name', '=', $company_name)->first();

        //Insert into DB
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

            return redirect()->route('select-all-companies');
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

    public function updateCompany(Request $request)
    {
        //Getting data from form
        $id = $request->input('id', false);
        $company_name = $request->input('companyName', false);
        $sector = $request->input('sector', false);
        $company_description = $request->input('companyDescription', false);
        $number_of_employees = $request->input('numberOfEmployees', false);
        $contact_mail = $request->input('contactMail', false);
        $contact_phone = $request->input('contactPhone', false);
        $ico = $request->input('ico', false);
        $dic = $request->input('dic', false);

        //Update info in DB
        if($id) {
            $company = Company::find($id);
            $company->name = $company_name;
            $company->sector = $sector;
            $company->description = $company_description;
            $company->number_of_staff = $number_of_employees;
            $company->contact_mail = $contact_mail;
            $company->contact_phone = $contact_phone;
            $company->ICO = $ico;
            $company->DIC = $dic;
            $company->update();
            }

        return redirect()->route('select-all-companies');
    }


    public function getUpdateCompanyForm($id)
    {
        $company= Company::find($id);
        return view('job-offer-update-form', ['company' => $company]);
    }


    public function deleteCompany($id)
    {
        $company = Company::findOrFail($id);
        $jobOffers = JobOffer::where('company_id', '=', $id)->delete();
        $company->delete();
        return redirect()->route('select-all-companies');
    }
}
