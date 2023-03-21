<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Artistes;
use App\Models\MembreBande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

class artisteController extends Controller
{

    public function indexArtiste()
    {
        return view('admin.artistes.show', [
            'artistes' => Artistes::latest()->filter(request(['search', 'artistes']))->get(),
            'User'=>Users::where(('id'),auth()->id())->firstOrFail(),
    ]);
    }
    public function show()
    {
        return view('admin.artistes.create',['User'=>Users::where(('id'),auth()->id())->firstOrFail()]);
    }

    public function store(Request $request)
    {


        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'image' => 'required',
            'city' => 'required',
            'country' => 'required',
            'dateOfBirth' => 'required',
        ]);
        
        // dd(DB::table('artistes')->insertGetId($formFields));
       
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('aristes_images', 'public');
        }
        // dd(Artistes::insertGetId($formFields));
        Artistes::create($formFields);

        return redirect('admin/artistes')->with('message', 'listing created successfully');
    }

    public function edit(Artistes $artiste)
    {
        dd($artiste);
        return view('admin.artistes.edit', ['artiste' => $artiste,'User'=>Users::where(('id'),auth()->id())->firstOrFail()]);
    }
    public function update(Request $request, Artistes $artiste)
    {
        $formFields = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'city' => 'required',
            'country' => 'required',
            'dateOfBirth' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        } else {
            $formFields['image'] = $artiste->image;
        }

        $artiste->update($formFields);

        return back()->with('message', 'artiste updated successfully');
    }

    public function delete(Artistes $artiste){
        $artiste->delete();
        return redirect('/admin/artistes')->with('message','artiste deleted');
    }
}
