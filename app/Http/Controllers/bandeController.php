<?php

namespace App\Http\Controllers;

use App\Models\Bande;
use App\Models\MembreBande;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bandeController extends Controller
{
    public function index()
    {
        return view('admin.bandes.show', [
            'bandes' => Bande::all(),
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
        ]);
    }
    public function create()
    {
        return view('admin.bandes.create', [
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
        ]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'pays' => 'required',
            'creation_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('bandes', 'public');
        }
        // dd($request->members);
        bande::create($formFields);
        $id = bande::latest()->first()->id;
        foreach ($request->members as $member) {
            MembreBande::create([
                'name' => $member,
                'bande_id' => $id,
            ]);
        }

        return back()->with('message', 'bandes created successfully');
    }
    public function edit(Bande $bande)
    {
        return view('admin.bandes.edit', [
            'User' => Users::where(('id'), auth()->id())->firstOrFail(),
            'bande' => $bande,
        ]);
    }
    public function update(Request $request, Bande $bande)
    {
        //   dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            // 'image' => 'required',
            'pays' => 'required',
            'creation_date' => 'required',
        ]);
        // dd(request());
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('bandes', 'public');
        } else {
            $formFields['image'] = $bande->image;
        }
        $bande->update($formFields);
        
        // dd($request);
        foreach ($request->member_id as $key=>$member_id) {
            $data = ['name' => $request->member_name[$key]];
            MembreBande::where('id',$member_id)->update($data);
            // $member->update($data);
        }

        return back()->with('message','success');
    }
    public function delete()
    {
    }
}
