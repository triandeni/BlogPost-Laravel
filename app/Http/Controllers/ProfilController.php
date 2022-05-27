<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profil.index', [
            'users' => User::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request , User $user)
    {
        return view('dashboard.profil.edit', [
            'user' => $user,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:30',
            'username' => ['required','min:5','max:30'],
            'phone' => 'min:10|max:20',
            'address' => 'min:5|max:30',
            'birth' => 'date',
            'about' => 'required',
            'email' => 'required|email:dns'
             ]);
     
             if($request->slug != $user->slug) {
                 $validatedData['slug'] = 'required|';
             } 
             
     
             $user->update($request->all());
      
             return redirect('/dashboard/profil')->with('success', 'Profil has been Updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.profil.edit', [
            'user' => $user,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:30',
            'username' => ['required','min:5','max:30'],
            'phone' => 'min:10|max:20',
            'address' => 'min:5|max:30',
            'birth' => 'date',
            'about' => 'required',
            'email' => 'required|email:dns'
             ]);
     
             if($request->slug != $user->slug) {
                 $validatedData['slug'] = 'required|';
             } 
             
     
             $user->update($request->all());
      
             return redirect('/dashboard/profil')->with('success', 'Profil has been Updated!');
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function checkSlug (Request $request)
    {
        $slug = SlugService::createSlug(User::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
