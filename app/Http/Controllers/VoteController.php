<?php

namespace App\Http\Controllers;

use App\Models\candidate;
use App\Models\vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{

    public function edit($id)
    {
        $candidate = candidate::FindOrFail($id);
        return view('front_office.voter', compact('candidate'));
    }

    public function store(Request $request)
    {
        $phone = $request->input('phone');
        $response = 'success';
        if ($response == 'success') {
            $vote = new vote();
            $vote->candidate_id = $request->input('candidate_id');
            $vote->user_phone = $phone;
            $vote->save();

            // $candidates = candidate::all();
            return view('front_office.payement');
        }
    }

    public function update(Request $request, $id)
    {
        $vote = vote::FindOrFail($id);
        $vote->status ="compté";
        $vote->update();
        $candidate = candidate::FindOrFail($vote->candidate_id);
        $nombre=(int)$request->montant/100;
        $candidate->nombre += $nombre;
        $candidate->update();
        return redirect()->back()->with('message','Modifié avec succès');
    }

    public function destroy($id)
    {
        $vote = vote::FindOrFail($id);
        $vote->delete();
        return redirect()->back();
    }
}
