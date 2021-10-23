<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;
use PhpParser\Comment\Doc;
use Symfony\Component\VarDumper\Caster\DoctrineCaster;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialist = Specialist::all();
        return view('doctor.add', compact('specialist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'subject' => 'required',
            'name' => 'required'
        ],
        [
            'subject' => 'harus diisi',
            'name' => 'harus diisi'
        ]
        );

        Doctor::create([
            'specialist_id'=>$request->subject,
            'name'=>$request->name
        ]);
            
        // $data= Doctor::where('name', $request->name)->get();
        return redirect('/doctor')->with('status', 'berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $doctor = Doctor::all();
        return view('doctor.edit', compact('specialist', 'doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'subject' => 'required',
            'name' => 'required'
        ],
        [
            'subject' => 'harus diisi',
            'name' => 'harus diisi'
        ]
        );

            Doctor::where('id', $doctor->id)->update([
                'specialist_id'=>$request->subject,
                'name'=>$request->name
            ]);

            return redirect('/doctor')->with('status', 'berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy('id', $doctor->id);
        return redirect('/doctor')->with('status', 'berhasil dihapus');

    }
}
