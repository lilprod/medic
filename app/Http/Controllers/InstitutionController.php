<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Structure;
use App\Models\HealthInstitution;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']); //supAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view
        $institutions = HealthInstitution::all();

        $roles = Role::whereNotIn('id', array(1,2))->get();


        return view('admin.institutions.index', ['roles' => $roles, 'institutions' => $institutions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('id', array(1,2))->get();
        
        $structures = Structure::all();

        return view('admin.institutions.create', ['roles' => $roles, 'structures' => $structures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate these fields
        $this->validate($request, [
            'structure_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|min:8',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ]);

        if ($request->hasfile('profile_picture')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('profile_picture')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('profile_picture')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'avatar.jpg';
        }

        $user = User::create([
            'name' => $request['name'],
            'firstname' => $request['firstname'],
            'email' => $request['email'],
            'password' => 'password',
            'phone_number' => $request['phone_number'],
            'role_id' => 3,
            'profile_picture' => $fileNameToStore,
        ]);

        $user->assignRole('Institution');

        $institution = new HealthInstitution();

        $institution->structure_id = $request['structure_id'];

        $institution->name = $request['name'];

        //$institution->username = $request['username'];

        $institution->email = $request['email'];

        $institution->phone_number = $request['phone_number'];

        $institution->address = $request['address'];

        $institution->city = $request['city'];

        $institution->postal_code = $request['postal_code'];

        $institution->profile_picture = $fileNameToStore;

        $institution->user_id = $user->id;

        $institution->save();

        return redirect()->route('admin.institutions.index')
            ->with('success',
             'Etablissement de santé ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Find a user with a given id to show
        $institution = HealthInstitution::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find a user with a given id to edit
        $institution = HealthInstitution::findOrFail($id);

        $structures = Structure::all();

        $roles = Role::whereNotIn('id', array(1,2))->get();

        return view('admin.institutions.edit', ['roles' => $roles, 'structures' => $structures, 'institution' => $institution]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Find a user with a given id and update
        $institution = HealthInstitution::findOrFail($id);

        //Validate these fields
        $this->validate($request, [
            'structure_id' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$institution->user_id,
            'phone_number' => 'required|string|min:8',
            'address' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
        ]);

        if ($request->hasfile('profile_picture')) {
            // Get filename with the extension
            $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();

            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('profile_picture')->getClientOriginalExtension();

            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            // Upload Image
            $path = $request->file('profile_picture')->storeAs('public/profile_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'avatar.jpg';
        }

        
        $institution->structure_id = $request['structure_id'];

        $institution->name = $request['name'];

        //$institution->username = $request['username'];

        $institution->email = $request['email'];

        $institution->phone_number = $request['phone_number'];

        $institution->address = $request['address'];

        $institution->city = $request['city'];

        $institution->postal_code = $request['postal_code'];

        if ($request->hasfile('profile_picture')) {
            $institution->profile_picture = $fileNameToStore;
        }

        $institution->save();

        $user = User::where('id', $institution->user_id)->first();

        $user->name = $request['name'];

        $user->firstname = $request['firstname'];

        $user->email = $request['email'];

        $user->phone_number = $request['phone_number'];

        if ($request->hasfile('profile_picture')) {
            $user->profile_picture = $fileNameToStore;
        }

        $user->save();

        return redirect()->route('admin.institutions.index')
            ->with('success',
             'Etablissement de santé édité avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find a user with a given id and delete
        $institution = HealthInstitution::findOrFail($id);

        $user = User::where('id', $institution->user_id)->first();

        if ($user->profile_picture != 'avatar.jpg') {
            Storage::delete('public/profile_images/'.$user->profile_picture);
        }
        $user->delete();

        $institution->delete();

        return redirect()->route('admin.institutions.index')
            ->with('success',
             'Etablissement de santé supprimé avec succès.');
    }
}
