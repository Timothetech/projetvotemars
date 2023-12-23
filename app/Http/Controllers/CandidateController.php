<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use App\Models\ImagesCandidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(){
        $candidates = candidate::orderBy('dossard','asc')->get();
        // $candidates = candidate::orderBy('created_at','desc')->get();
        return view('back_office.candidates' , compact('candidates'));
    }

    public function store(Request $request )
    {
        $candidate = new candidate();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('candidate_images', 'public');
            $candidate->image = $image;
        }
        $candidate->nom = $request->nom;
        $candidate->dossard = $request->dossard;
        $candidate->age = $request->age;
        $candidate->profession = $request->profession;
        $candidate->save();
        return redirect()->back()->with('message','Modifié avec succès');
    }

    public function storeImage(Request $request )
    {
        $candidate = new ImagesCandidate();
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images_candidates_2', 'public');
            $candidate->image = $image;
        }
        $candidate->candidate_id = $request->candidate_id;
        $candidate->save();
        return redirect()->back()->with('message','Modifié avec succès');
    }

    public function update(Request $request )
    {
        $candidate = candidate::FindOrFail($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('candidate_images', 'public');
            $candidate->image = $image;
        }
        $candidate->nom = $request->nom;
        $candidate->dossard = $request->dossard;
        $candidate->age = $request->age;
        $candidate->profession = $request->profession;
        $candidate->update();
        return redirect()->back()->with('message','Modifié avec succès');
    }

    public function destroy($id)
    {
        $candidate = candidate::FindOrFail($id);
        $candidate->delete();
        return redirect()->back();
    }
}
