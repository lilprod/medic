<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Document;
use App\Models\Speciality;
use App\Models\Structure;
use App\Models\MedicalStaff;
use App\Models\HealthInstitution;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm()
    {
        $specialities = Speciality::all();

        return view('auth.register', compact('specialities'));
    }

    public function showInstitutionRegistrationForm()
    {
        $structures = Structure::all();

        return view('auth.register_institution', compact('structures'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'speciality_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'min:8'],
            'birth_date' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        /*if ($request->hasfile('examination_picture')) {

            foreach ($request->file('examination_picture') as $file) {
                // Get filename with the extension
                $fileNameWithExt = $file->getClientOriginalName();

                // Get just filename
                $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                // Get just ext
                $extension = $file->getClientOriginalExtension();

                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;

                // Upload Image
                $path = $file->storeAs('public/examination_files', $fileNameToStore);

                $examimage = new ExamImage();

                $examimage->examination_picture = $fileNameToStore;
                $examimage->examination_id = $examination->id;
                $examimage->patient_id = $request->input('patient_id');
                $examimage->doctor_id = $request->input('doctor_id');
                $examimage->prescription_id = $request->input('prescription_id');

                $examimage->save();
            }
            
        }*/

        $fileNameToStore = 'avatar.jpg';

        $user = User::create([
            'name' => $data['name'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => 'password',
            'phone_number' => $data['phone_number'],
            'role_id' => 2,
            'profile_picture' => $fileNameToStore,
        ]);

        $user->assignRole('Staff');

        $staff = new MedicalStaff();

        $staff->speciality_id = $data['speciality_id'];

        $staff->name = $data['name'];

        $staff->firstname = $data['firstname'];

        $staff->gender = $data['gender'];

        //$staff->username = $data['username'];

        $staff->email = $data['email'];

        $staff->phone_number = $data['phone_number'];

        $staff->address = $data['address'];

        $staff->city = $data['city'];

        $staff->postal_code = $data['postal_code'];

        $staff->birth_date = $data['birth_date'];

        $staff->how_find_us = $data['how_find_us'];

        $staff->registered_with_council = $data['registered_with_council'];

        $staff->qualified_by_council = $data['qualified_by_council'];

        $staff->message = $data['message'];

        $staff->profile_picture = 'avatar.jpg';

        $staff->user_id = $user->id;

        $staff->status = 0;

        $staff->save();

        return $user;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorInstitution(array $data)
    {
        return Validator::make($data, [
            'structure_id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string', 'min:8'],
            'address' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\Models\User
     */
    protected function registerInstitution(Request $request)
    {
        $this->validatorInstitution($request->all())->validate();

        $fileNameToStore = 'avatar.jpg';

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

        $institution->how_find_us = $request['how_find_us'];

        $institution->message = $request['message'];

        $institution->profile_picture = 'avatar.jpg';

        $institution->user_id = $user->id;

        $institution->status = 0;

        $institution->save();

        return redirect()->intended('login')->with('success', 'Votre inscription est enregistée avec succès');
    }
    
}
