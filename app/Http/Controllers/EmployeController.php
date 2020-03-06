<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employe;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employe = Employe::paginate(5);

        // $data = [
        //     'nama' => $employe->nama,
        //     'email' => $employe->email,
        //     'company' => $employe->company->nama
        // ];

        // dd($employe);

        return view('admin.employe.index',['employe' => $employe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::all();

        return view('admin.employe.create',['company' => $company]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'id_company' => 'required'
        // ]);

        Employe::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'id_company' => $request->company,
        ]);

        return redirect('employe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employe = Employe::find($id);
        
        $company = Company::all();

        // dd($employe);
        
        // return view('admin.employe.edit', ['employe' => $employe]);

        return view('admin.employe.edit', compact('employe'),['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $data = Employe::where('id_employe', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email
            // 'id_company' => $request->id_company
        ]);

        // dd($request->id);

        return redirect('employe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Employe::find($id);

        $id->delete();

        return redirect('employe');
    }
}
