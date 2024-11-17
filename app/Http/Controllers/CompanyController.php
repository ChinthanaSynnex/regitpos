<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Companies::get();

        return view('Company.companies', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Company.add-company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('company_logo'))
        {
            $fileName = time() . '.' . $request->file('company_logo')->extension();
            $request->file('company_logo')->move(public_path('Images/CompanyLogo'), $fileName);
            // $validatedData['ComLogo'] = $fileName;
        }//has file
        else
        {
            // $validatedData['ComLogo'] = null;
            $fileName = "";
        }

        $company = new Companies();
        $company->ComLogo = $fileName;
        $company->ComName = $request->input('company_name');
        $company->Address = $request->input('address');
        $company->Email = $request->input('email');
        $company->ContactLand = $request->input('contact_land');
        $company->ContactMobile = $request->input('contact_mobile');
        $company->ComStat = $request->has('chk_company_stat') ? 1 : 0;

        // print_r($company->ComName);

        $company->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
