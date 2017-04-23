<?php

namespace Fiszki\Http\Controllers;

use Illuminate\Http\Request;
use Fiszki\Http\Requests;
use Illuminate\Support\Facades\Auth;
use View;
use Fiszki\Exams;
use DB;

class ExamsController extends Controller {

    protected $exams;

    public function getExam() {
        return $exams;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \test
     */
    public function newExam() {
        // $results = DB::select('select * from idioms order by rand() limit 1');

        $exams = new Exams;


        $attributes = [
            "id_user" => Auth::user()->id
        ];

        $exams1 = $exams->create($attributes);

        return view('/exams', ['exam' => $exams1]);
    }

    public function endExam(Request $request) {

      //  $exams = new Exams;           
      //  $idioms->create($request->all());
        $id = $request->input('id',null);
        $exams = Exams::where('id', $id)->first();
        //$exams = DB::table('exams')->where('id', '1')->first();
        
        $exams->setAttribute('end_time', date_create('now')->format('Y-m-d H:i:s'));
        $exams->touch();
        return view('/exams');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view() {
        return view('/exams');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
