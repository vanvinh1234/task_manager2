<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('modules.customer.index');
    }

    public function create()
    {
        return view('modules.customer.create');
    }

    public function store()
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        return view('modules.customer.edit');

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {
        return view('modules.customer.delete');
    }
}
