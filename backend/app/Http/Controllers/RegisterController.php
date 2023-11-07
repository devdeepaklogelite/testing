<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Register;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->mobile=$request->mobile;
        $post->password=$request->password;
        
        if($post->save()){
            return response()->json(['status'=>200,'msg'=>'Record Saved Successfully..']);
        }else{
            return response()->json(['status'=>404,'msg'=>'Record Failed!..']);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Register $register)
    {
        $data = $register->all();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Register::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Register::find($id);
        $post->name=$request->name;
        $post->email=$request->email;
        $post->mobile=$request->mobile;
        $post->password=$request->password;
        $post->update();
        return response()->json(['status'=>200,'msg'=>'Record Updated Successfully..']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Register $register)
    {
        //
    }
}
