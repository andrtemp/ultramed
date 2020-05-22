<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\Registrar;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param string $type
     * @return \Illuminate\Http\Response
     */
    public function index(string $type)
    {
        $users = [];

        switch ($type) {
            case 'registrar':
                $users = Registrar::all();
                break;
            case 'doctor':
                $users = Doctor::all();
                break;
            case 'patient':
                $users = Patient::all();
                break;
        }

        return view('users.list', [
            'type' => $type,
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param string $type
     * @return \Illuminate\Http\Response
     */
    public function create(string $type)
    {
        return view('users.form', [
            'type' => $type
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param string                    $type
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, string $type)
    {
        $data = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'phone' => 'string',
            'specialization' => 'string',
            'position' => 'string',
            'text' => 'string|nullable',
            'birth_date' => 'string',
            'card' => 'string|nullable',
            'photo' => 'nullable',
        ]);

        $data['password'] = Hash::make($data['password']);

        /** @var User $user */
        $user = User::create([
            'name' => $data['name'],
            'password' => $data['password'],
            'email' => $data['email'],
            'role' => $type,
        ]);

        $user_id = $user->id;

        switch ($type) {
            case 'doctor':
                Doctor::create([
                    'user_id' => $user_id,
                    'phone' => $data['phone'],
                    'specialization' => $data['specialization'],
                    'position' => $data['position'],
                    'text' => $data['text'],
                ]);
                break;
            case 'patient':
                Patient::create([
                    'user_id' => $user_id,
                    'phone' => $data['phone'],
                    'card' => is_null($data['card']) ? '' : $data['card'],
                    'birth_date' => $data['birth_date']
                ]);
                break;
            case 'registrar':
                Registrar::create([
                    'user_id' => $user_id,
                    'phone' => $data['phone']
                ]);
                break;
        }

        return redirect()->route('users.index', $type);
    }

    /**
     * Display the specified resource.
     * @param  int $id
     * @param  string $type
     * @return \Illuminate\Http\Response
     */
    public function show($type, $id)
    {
        $user = User::find($id);

        switch ($type) {
            case 'doctor':
                $user = Doctor::where('user_id', $id)->first();
                break;
            case 'patient':
                $user = Patient::where('user_id', $id)->first();
                break;
            case 'registrar':
                $user = Registrar::where('user_id', $id)->first();
                break;
        }

        return view('users.view', compact('user', 'type'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @param  string                   $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $type, $id)
    {
        $data = $request->validate([
            'card' => 'string'
        ]);

        /** @var Patient $patient */
        $patient = Patient::where('user_id', $id)->first();

        $patient->card = $data['card'];
        $patient->save();

        return redirect()->route('users.index', 'patient');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function card(){
        $user = current_user();
        $patient = Patient::where('user_id', $user->id)->first();

        return view('users.card', compact('patient'));
    }
}
