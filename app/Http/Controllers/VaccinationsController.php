<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Immunization;
use App\parents;
use App\child;
use App\Http\Resources\vaccination;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VaccinationsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new vaccination(Immunization::find($id));
    }

    public function view(Request $request)
    {
        $id = $request->input('id');
        try {
            $vaccination = Immunization::findOrFail($id);
        } catch (ModelNotFoundException $exception){
            return back()->withError('Record Not Found for ID ' .$id);
        }
        return view('vaccinations.viewschedule', [
            'vaccination' => $vaccination
        ]);
    }
}
