<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = Admin::get();
        return view("dashbord.admin.view",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashbord.admin.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        // Admin::create([
        //     "name"=>$request->name,
        //     "email"=>$request->email,
        //     "password"=>$request->password,
        //     "name"=>$request->name,
        //     "name"=>$request->name,
        // ]);

        Admin::create($request->toArray());
        return to_route("admin.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $admin=Admin::find($id);
        return view("dashbord.admin.edit",compact("admin"));
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
        $data = $request->except("_token" , "_method");
        $data["permission"]=implode("+",$request->permission);
        Admin::where("id",$id)->update($data);
        return to_route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::where("id",$id)->delete();
        return to_route("admin.index");
    }
}