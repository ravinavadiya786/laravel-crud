<?php

namespace App\Http\Controllers;

use App\Empolyee;
use App\Company;
use Illuminate\Http\Request;

class EmpolyeeController extends Controller
{
    
    public function index()
    {
        $empolyees = Empolyee::paginate(5);
        // dd($empolyees);
        return view('empolyee.empolyees',compact('empolyees'));
    }

    
    public function create()
    {
        $empolyee = new Empolyee();
        $company = Company::all();

        return view('empolyee.create',['empolyee'=>$empolyee,'company'=>$company]);
    }

   
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:empolyee',
            'salary' => 'required',
            'address' => 'required'
            
        ]);
        // dd($data); 
        $company = Company::find($request->company_id);
        dd($company->empolyee());
        $company->empolyee()->create($data);
        //Empolyee::create($data);
       
        return redirect()->route('empolyee.index');
    }

  
    public function show(Empolyee $empolyee)
    {
       
    }

    
    public function edit(Empolyee $empolyee)
    {
        $empolyee = Empolyee::find($empolyee->id);
        return view('empolyee.edit',['empolyee'=>$empolyee]);
    }

    
    public function update(Request $request, Empolyee $empolyee)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'salary' => 'required',
            'address' => 'required',
            'company_id' => 'required'
        ]);
        $empolyee->update($data);
        $empolyees = Empolyee::all();
        $company = Company::all();
        return view('empolyee.empolyees',compact('empolyees','empolyees'));
    }

    
    public function destroy(Empolyee $empolyee)
    {
        $empolyee->delete($empolyee->id);
        $empolyees = Empolyee::all();
        return view('empolyee.empolyees',compact('empolyees','empolyees'));
    }
}
