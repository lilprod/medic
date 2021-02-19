<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\MedicalStaff;
use App\Models\Document;
use App\Models\Speciality;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class StaffController extends Controller
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
        $staffs = MedicalStaff::all();

        $roles = Role::whereNotIn('id', array(1,3))->get();

        return view('admin.staffs.index', ['roles' => $roles, 'staffs' => $staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('id', array(1,3))->get();

        $specialities = Speciality::all();

        return view('admin.staffs.create', ['roles' => $roles, 'specialities' => $specialities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'speciality_id' => 'required',
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|min:8',
            'birth_date' => 'required',
            'gender' => 'required',
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
            'role_id' => 2,
            'profile_picture' => $fileNameToStore,
        ]);

        $user->assignRole('Staff');

        $staff = new MedicalStaff();

        $staff->speciality_id = $request['speciality_id'];

        $staff->name = $request['name'];

        $staff->firstname = $request['firstname'];

        //$staff->username = $request['username'];

        $staff->gender = $request['gender'];

        $staff->birth_date = $request['birth_date'];

        $staff->email = $request['email'];

        $staff->phone_number = $request['phone_number'];

        $staff->address = $request['address'];

        $staff->city = $request['city'];

        if(isset($request['registered_with_council'])){

            $staff->registered_with_council = $request['registered_with_council'];
        }

        if(isset($request['qualified_by_council'])){
            
            $staff->qualified_by_council = $request['qualified_by_council'];
        }

        $staff->user_id = $user->id;

        $staff->postal_code = $request['postal_code'];
 
        $staff->profile_picture = $fileNameToStore;

        $staff->save();

        return redirect()->route('admin.staffs.index')
        ->with('success',
         'Personnel Médical ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = MedicalStaff::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = MedicalStaff::findOrFail($id);

        $roles = Role::whereNotIn('id', array(1,3))->get();

        $specialities = Speciality::all();

        return view('admin.staffs.edit', ['roles' => $roles, 'specialities' => $specialities, 'staff' => $staff]);
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
        $staff = MedicalStaff::findOrFail($id);

        $this->validate($request, [
            'speciality_id' => 'required',
            'name' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$institution->user_id,
            'phone_number' => 'required|string|min:8',
            'birth_date' => 'required',
            'gender' => 'required',
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

        
        $staff->speciality_id = $request['speciality_id'];

        $staff->name = $request['name'];

        $staff->firstname = $request['firstname'];

        //$staff->username = $request['username'];

        $staff->gender = $request['gender'];

        $staff->birth_date = $request['birth_date'];

        $staff->email = $request['email'];

        $staff->phone_number = $request['phone_number'];

        $staff->address = $request['address'];

        $staff->city = $request['city'];

        $staff->postal_code = $request['postal_code'];

        if(isset($request['registered_with_council'])){

            $staff->registered_with_council = $request['registered_with_council'];
        }

        if(isset($request['qualified_by_council'])){
            
            $staff->qualified_by_council = $request['qualified_by_council'];
        }

        if ($request->hasfile('profile_picture')) {
            $staff->profile_picture = $fileNameToStore;
        }

        $staff->save();

        $user = User::where('id', $staff->user_id)->first();

        $user->name = $request['name'];

        $user->firstname = $request['firstname'];

        $user->firstname = $request['firstname'];

        $user->email = $request['email'];

        $user->phone_number = $request['phone_number'];
        
        if ($request->hasfile('profile_picture')) {
            $user->profile_picture = $fileNameToStore;
        }

        $user->save();

        return redirect()->route('admin.staffs.index')
            ->with('success',
             'Personnel Médical édité avec succès.');
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
        $staff = MedicalStaff::findOrFail($id);

        $user = User::where('id', $staff->user_id)->first();

        if ($user->profile_picture != 'avatar.jpg') {
            Storage::delete('public/profile_images/'.$user->profile_picture);
        }
        $user->delete();

        $staff->delete();

        return redirect()->route('admin.staffs.index')
            ->with('success',
             'Personnel Médical supprimé avec succès.');
    }
}
