<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }
    public function new()
    {
        return "Happy New Year!";
    }

    public function pract()
    {

        $num = 10;
        $num1 = 20;
        $sum = $num + $num1;
        return $sum;
    }
    public function practnisya($age)
    {

        $age = 10;
        return $sum;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Student::create([

        //    'name' => $request->input('name'),

        'name' => $request->name,
        'payment' => $request->payment,
        'address' => $request->address
        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // CALL MODEL
        //find Student that has id of $id
        // return Student::find($id);
        return Student::where('id', $id)->first();
        // return Student::findOrFail($id);

        // possible daghan array ang mugawas 

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
        //find the Student youre going to update 
        Student::find($id)->update([
            'name' => $request->name,
            'payment' => $request->payment,
            'address' => $request->address
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Student::find($id)->delete();
    }
}
