<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquiry_table=Enquiry::all();
        return view("adminenquiries",compact("enquiry_table"));
    }

    public function search(Request $request)
    {
        $formsearch=$request->searchkiyakya;
        $enquiry_table=Enquiry::where("name","LIKE","%$formsearch%")->get();
        return view("adminenquiries",compact("enquiry_table"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("contact");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enquiryfrom= $request->validate([
            "name" => "required | alpha",
            "email" => "required | email",
            "phone" => "required | numeric",
            "message" => "required | alpha"
        ]);
    Enquiry::create( $enquiryfrom );
    return redirect("/contact")->with("success","we will reach out in 24 hours" );
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
         $currentdata=Enquiry::find($request->id);
        return view("shoWpage", compact("currentdata"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $currentdata=Enquiry::find($request->id);
        return view("admin_editenquiries", compact("currentdata"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $tabledata=Enquiry::find($request->id);
        $tabledata->name=$request->name;
        $tabledata->email=$request->email;
        $tabledata->phone=$request->phone;
        $tabledata->message=$request->message;

        $tabledata->save();
        return redirect("/admin/enquiries");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Enquiry::destroy($request->id);
        return redirect("/adminenquiries");
    }
}
