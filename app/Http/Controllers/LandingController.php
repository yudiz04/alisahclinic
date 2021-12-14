<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Specialist;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
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
        $specialist = Specialist::all();
        return view('landingpage.index', compact('specialist', 'doctor', 'specialist_id'));
    }

    public function dokter(Doctor $doctor){

        return view('landingpage.doctor', compact('doctor'));

    }

    public function artikel(Article $article){

        return view('landingpage.article', compact('article'));

    }
 
    // public function getdoctor($id)
    // {
    //     echo json_encode(DB::table('doctors')->where('specialist_id', $id)->get());
    // }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialist = Specialist::all();
        $doctor = Doctor::all();
        return view('landingpage.index', compact('specialist', 'doctor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        dd($request->all());
        // $request->validate([
        //     'specialist' => 'required',
        //     'doctor' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'keluhan' => 'required',
        //     'name' => 'required',
        //     'birth' => 'required',
        //     'gender' => 'required',
        //     'email' => 'required|email',
        //     'contact' => 'required'
        // ]);

        // Appointment::create([

        //     'specialist_id' => $request->specialist,
        //     'doctor_id' => $request->doctor,
        //     'request' => $request->keluhan,
        //     'date' => $request->date,
        //     'time' => $request->time,
        //     'patient_name' => $request->name,
        //     'gender' => $request->gender,
        //     'birth' => $request->birth,
        //     'email' => $request->email,
        //     'contact' => $request->contact
        // ]);
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
    public function edit($id)
    {
        //
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
        //
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
}
