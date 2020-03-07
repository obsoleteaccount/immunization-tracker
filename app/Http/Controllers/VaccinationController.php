<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Immunization;
use App\parents;
use App\child;

class VaccinationController extends Controller
{
    public function index()
    {
        $doctor_id = Auth::id();
        $vaccinations = Immunization::paginate(10);
        return view('vaccinations.index', [
            'vaccinations' => $vaccinations,
            'doctor_id' => $doctor_id
        ]);

    }

    public function store (Request $request)
    {
        $vaccination = new Immunization;

        $vaccination->child_id = $request->input('child_id');
        $vaccination->bcg_at_birth = $request->input('bcg_at_birth');
        $vaccination->opv_at_birth = $request->input('opv_at_birth');
        $vaccination->opv_at_6_weeks = $request->input('opv_at_6_weeks');
        $vaccination->opv_at_10_weeks = $request->input('opv_at_10_weeks');
        $vaccination->opv_at_14_weeks = $request->input('opv_at_14_weeks');
        $vaccination->dpt_at_6_weeks = $request->input('dpt_at_6_weeks');
        $vaccination->dpt_at_10_weeks = $request->input('dpt_at_10_weeks');
        $vaccination->dpt_at_14_weeks = $request->input('pt_at_14_weeks');
        $vaccination->pcv_at_6_weeks = $request->input('pcv_at_6_weeks');
        $vaccination->pcv_at_10_weeks = $request->input('pcv_at_10_weeksd');
        $vaccination->pcv_at_14_weeks = $request->input('pcv_at_14_weeks');
        $vaccination->rota1 = $request->input('rota1');

        $vaccination->yellow_fever_at_9_months = $request->input('yellow_fever_at_9_months');
        $vaccination->measles_at_9_months = $request->input('measles_fever_at_9_months');

        
        $vaccination->save();
        session()->flash('record-created');

        return redirect('vaccinations');
    }

    public function edit($id,$child_id, $parent_id)
    {
        $vaccination = Immunization::find($id);
        $parent = parents::find($parent_id);
        $child = child::find($child_id);

        return view('vaccinations.edit', [
            'vaccination' => $vaccination,
            'parent' => $parent,
            'child' => $child
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
  
        $vaccination = Immunization::find($id);
        
        $vaccination->bcg_at_birth = $request->bcg_at_birth;
        $vaccination->opv_at_birth = $request->opv_at_birth;
        $vaccination->opv_at_6_weeks = $request->opv_at_6_weeks;
        $vaccination->opv_at_10_weeks = $request->opv_at_10_weeks;
        $vaccination->opv_at_14_weeks = $request->opv_at_14_weeks;
        $vaccination->dpt_at_6_weeks = $request->dpt_at_6_weeks;
        $vaccination->dpt_at_10_weeks = $request->dpt_at_10_weeks;
        $vaccination->dpt_at_14_weeks = $request->dpt_at_14_weeks;
        $vaccination->pcv_at_6_weeks = $request->pcv_at_6_weeks;
        $vaccination->pcv_at_10_weeks = $request->pcv_at_10_weeks;
        $vaccination->pcv_at_14_weeks = $request->pcv_at_14_weeks;
        $vaccination->yellow_fever_at_9_months = $request->yellow_fever_at_9_months;
        $vaccination->measles_at_9_months = $request->measles_at_9_months;
        $vaccination->save();

        $child_id = $vaccination->child_id;

        $baby = child::find($child_id);

        $baby->firstname = $request->input('firstname1');
        $baby->lastname = $request->input('lastname1');
        $baby->surname = $request->input('surname1');
        $baby->gender = $request->input('gender1');
        $baby->dob = $request->input('dob');
        $baby->save();

        $parent_id = $baby->parent_id;

        $parent = parents::find($parent_id);

        $parent->doctor_id = Auth::id();
        $parent->firstname = $request->input('firstname');
        $parent->lastname = $request->input('lastname');
        $parent->surname = $request->input('surname');
        $parent->phone = $request->input('phone');
        $parent->email = $request->input('email');
        $parent->gender = $request->input('gender');
        $parent->save();

        session()->flash('record-updated');

        return redirect('vaccinations');
        
    }

    public function view(Request $request, $id,$child_id, $parent_id)
    {
        $vaccination = Immunization::find($id);
        $parent = parents::find($parent_id);
        $child = child::find($child_id);

        session(['child_id' => $child_id]);
 
        return view('vaccinations.view', [
            'vaccination' => $vaccination,
            'parent' => $parent,
            'child' => $child
        ]);
    }

    public function delete(Request $request, $id)
    {
        $vaccination = Immunization::findOrFail($id); 
        $vaccination->delete();
        session()->flash('record-deleted');
        return redirect('vaccinations');
    }
}
