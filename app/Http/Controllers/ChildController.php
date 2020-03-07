<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\child;


class ChildController extends Controller
{
    public function create()
    {
        return view('vaccinations.createchild');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'dob' => ['required']
        ]);

        $baby = new child();
        $baby->parent_id = $request->input('parent_id');
        $baby->firstname = $request->input('firstname');
        $baby->lastname = $request->input('lastname');
        $baby->surname = $request->input('surname');
        $baby->gender = $request->input('gender');
        $baby->dob = $request->input('dob');

        $baby->save();

        $child_id = $baby->id;

        return view('vaccinations.create')->with('child_id', $child_id);
    }

}
