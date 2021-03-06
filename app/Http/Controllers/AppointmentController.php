<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $specialist_id = $request->specialist;
        $doctor = [];
        if ($specialist_id) {
            $doctor = Doctor::where('specialist_id', $specialist_id)->get(); 
        }
        $appointment = Appointment::all();
        $specialist = Specialist::all();
        // $doctor = Doctor::all();
        return view('appointment.index', compact('appointment', 'specialist', 'doctor', 'specialist_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialist = Specialist::all();
        $doctor = Doctor::all();
        return view('appointment.index', compact('specialist', 'doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // return 'disini';
        //return $request;
        // dd($request->all());
        $request->validate([
            // 'specialist' => 'required',
            'spesialist_input' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'keluhan' => 'required',
            'name' => 'required',
            'birth' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ]);

        Appointment::create([

            'specialist_id' => $request->spesialist_input,
            'doctor_id' => $request->doctor,
            'request' => $request->keluhan,
            'date' => $request->date,
            'time' => $request->time,
            'patient_name' => $request->name,
            'gender' => $request->gender,
            'birth' => $request->birth,
            'email' => $request->email,
            'contact' => $request->contact
        ]);

        // $appointment=new Appointment;
        // $appointment->specialist_id = $request->subject;
        // $appointment->doctor_id = $request->doctor;
        // $appointment->request = $request->keluhan;
        // // // $appointment->date = $request->date;
        // // $appointment->time = $request->time;
        // // $appointment->patient_name = $request->name;
        // // $appointment->gender = $request->gender;
        // // // $appointment->birth = $request->birth;
        // // $appointment->email = $request->email;
        // // $appointment->contact = $request->contact;
        // $appointment->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        {}
    }

    // public function getdoctor($id)
    // {
    //     echo json_encode(DB::table('doctors')->where('specialist_id',$id)->get());
    // }

    // public function coba(Request $request)
    // {
    //     $search = $request->cari;

    //     $data_pasien = DB::table('specialists')
    //                         ->join('doctors', 'doctors.specialist_id', '=', 'specialist_id')
    //                         ->select('doctor.id','doctor.name')
    //                         ->limit(5);

    //     $search = !empty($request->cari) ? ($request->cari) : ('');
        
    //     if($search){
    //         $data_pasien->where('specialists.id', 'like', '%' .$search . '%');
    //      }

    //      $data = $data_pasien->limit(5)->get();

    //      $response = array();
    //     foreach($data as $pasien){
    //        $response[] = array(
    //            "value" => $pasien->id,
    //            "label" => $pasien->nama_pasien,
    //            "faskes" => $pasien->nama_faskes,
    //            "kecamatan" => $pasien->nama_kecamatan
    //         );
    //     }
    //     return response()->json($response);

    // }

    // public function data_pasien(Request $request)
    // {
    //     $search = $request->cari;

    //     $specialist = DB::table('specialists')
    //                         ->join('doctors', 'doctors.specialist_id', '=', 'specialist_id')
                            
    //                         ->select('doctor.id','doctor.name')
    //                         ->limit(5);

    //     $search = !empty($request->cari) ? ($request->cari) : ('');

    //     if($search){
    //        $data_pasien->where('data_pasien.nama_pasien', 'like', '%' .$search . '%');
    //     }

    //     $data = $data_pasien->limit(5)->get();
  
    //     $response = array();
    //     foreach($data as $pasien){
    //        $response[] = array(
    //            "value" => $pasien->id,
    //            "label" => $pasien->nama_pasien,
    //            "faskes" => $pasien->nama_faskes,
    //            "kecamatan" => $pasien->nama_kecamatan
    //         );
    //     }
    //     return response()->json($response);
    // }
}


