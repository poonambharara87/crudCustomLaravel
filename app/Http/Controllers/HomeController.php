<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $companies = DB::table('companies')->get();
        return view('index', ['companies' => $companies]);
    }
    

    public function create(){
        return view('create');
    }
    public function add(Request $request){
        $company= new Company;    
        $company->name = $request['name'];       
        $company->email = $request['email'];
        $company->address = $request['address'];
        $company->save();   
         $companies = DB::table('companies')->get();
        return view('index', ['companies' => $companies]);    
    }

    public function edit($id){
            $companies = Company::find($id);
            return view('edit', ['companies' => $companies]);
    }
    public function update(Request $request, $id){
        $companies = Company::find($id);
        $companies->name = $request['name'];
        $companies->email = $request['email'];
        $companies->address = $request['address'];
        $companies->save();
        $companies = DB::table('companies')->get();
        return view('index', ['companies' => $companies]);
    }

    public function delete($id){

        Company::find($id)->delete();
        $companies = DB::table('companies')->get();
        return view('index', ['companies' => $companies]);
        
    }
}
