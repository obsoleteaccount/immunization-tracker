<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\parents;


class ParentController extends Controller
{
    public function create()
    {
        return view('vaccinations.createparent');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'regex:/(07)[0-9]{8}/', 'max:255', 'unique:users'],
        ]);

        $parent = new parents();
        
        $parent->doctor_id = Auth::id();
        $parent->record_date = $request->input('record_date');
        $parent->firstname = $request->input('firstname');
        $parent->lastname = $request->input('lastname');
        $parent->mother_firstname = $request->input('mother_firstname');
        $parent->mother_surname = $request->input('mother_surname');
        $parent->surname = $request->input('surname');
        $parent->phone = $request->input('phone');
        $parent->email = $request->input('email');
        $parent->gender = $request->input('gender');

        $parent->save();

        $parent_id = $parent->id;

        return view('vaccinations.createchild')->with('parent_id', $parent_id);

    }
        public function delete(Request $request, $id)
    {
        $parent = parents::findOrFail($id); 
        $parent->delete();
        session()->flash('record-deleted');
        return redirect('vaccinations');
    }

}
