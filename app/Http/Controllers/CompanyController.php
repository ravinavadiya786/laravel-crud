<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

/**
 * Class CompanyController
 * @package App\Http\Controllers
 */
class CompanyController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $companies = Company::all();
        return view('company.companies',compact('companies','companies'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(){
        $company = new Company();
        // dd($company);
        return view('company.addCompany',compact('company','company'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:company',
            'website' => 'required',
            'image_url' => 'required|image',
            'address' => 'required'
        ]);

        $imagepath = request('image_url')->store('uploads','public');
        Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'website' => $data['website'],
            'address' => $data['address'],
            'image_url' => $imagepath,
        ]);
        return redirect('/company');
    }

    /**
     * @param $cid
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($cid){
        $company=Company::find($cid);
        return view('company.editCompany',compact('company','company'));
    }

    /**
     * @param $cid
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($cid)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'required',
            'image' => 'required',
            'address' => 'required'
        ]);
        $company=Company::find($cid);
        $company->update($data);
        return redirect('/company');
    }

    /**
     * @param $cid
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy($cid)
    {
        $company=Company::find($cid);
        $filename = "storage/".$company->image_url;
        @unlink($filename);
        $company->delete();
        return redirect('/company');
    }
}
