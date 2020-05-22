<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use App\Record;
use Illuminate\Http\Request;

class RequestsController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $requests = \App\Request::all();

        return view('requests.index', compact('requests'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function schedule()
    {
        $role = user_role();

        switch ($role){
            case 'patient':
                $patient = Patient::where('user_id', current_user()->id)->first();
                $records = Record::where('patient_id', $patient->id)->get();
                break;
            default:
                $records = Record::all();
                break;
        }

        return view('requests.schedule', compact('records'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $request = \App\Request::find($id);
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('requests.show', compact('request', 'doctors', 'patients'));
    }

    /**
     * @param Request $request
     * @param integer $request_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function record(Request $request, $request_id)
    {
        $data = $request->validate([
            'patient_id'  => 'integer',
            'doctor_id' => 'integer',
            'date' => 'string'
        ]);

        Record::create($data);
        /** @var \App\Request $req */
        $req = \App\Request::find($request_id);
        $req->status = true;
        $req->save();

        return redirect()->route('requests.index');
    }
}
