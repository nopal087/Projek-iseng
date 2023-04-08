<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(Request $request)
    {
        $data = Data::all();
        return view('/home', compact('data'));
    }
    public function home(Request $request)
    {
        // $data = Data::all();
        return view('/userhome');
    }

    public function create()
    {
        return view('tambahdata');
    }
    public function store(Request $request)
    {
        Data::create($request->all());
        return redirect('/');
    }
    public function edit($id)
    {
        $data = Data::find($id);
        return view('editdata', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Data::find($id);
        $data->update($request->all());
        return redirect('/');
    }
    public function delete($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/');
    }
}
