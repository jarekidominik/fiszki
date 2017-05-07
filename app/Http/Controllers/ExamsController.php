<?php

namespace Fiszki\Http\Controllers;

use Illuminate\Http\Request;
use Fiszki\Http\Requests;
use Illuminate\Support\Facades\Auth;
use View;
use Fiszki\Exams;
use Fiszki\Idioms;
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
        $idiom = $this->getRandIdiom();

        return view('/exams', ['exam' => $exams1, 'idiom' => $idiom]);
    }

    public function endExam(Request $request) {

        //  $exams = new Exams;           
        //  $idioms->create($request->all());
        $id = $request->input('id', null);
        $exams = Exams::where('id', $id)->first();
        //$exams = DB::table('exams')->where('id', '1')->first();

        $exams->setAttribute('end_time', date_create('now')->format('Y-m-d H:i:s'));
        $exams->touch();
        return view('/exams');
    }

    public function checkExam(Request $request) {
        $id = $request->input('id', null);
        $idiom_answer = preg_replace("/[^a-zA-Z]+/", "", $request->input('idiom_answer', null));
        $idiom_pl = preg_replace("/[^a-zA-Z]+/", "", $request->input('idiom_pl', null));     
        
        $exams = Exams::where('id', $id)->first();
        
        if (strcasecmp($idiom_pl, $idiom_answer) == 0) {
          $correct = $exams->getAttribute('correct_words') + 1;
          $exams->setAttribute('correct_words', $correct);
        } else {
          $wrong = $exams->getAttribute('incorrect_words') + 1;
          $exams->setAttribute('incorrect_words', $wrong);  
        }

        $exams->touch();
        $idiom = $this->getRandIdiom();
        return view('/exams', ['exam' => $exams, 'idiom' => $idiom]);
    }

    private function getRandIdiom() {
        $idiom = Idioms::all()->random(1);
        return $idiom;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view() {
        return view('/exams');
    }
   
    public function viewRanking() {
        return view('/rank');
    }

    public function getRanking() {
        $exams = DB::select('SELECT u.name, SEC_TO_TIME(TIMESTAMPDIFF(SECOND, e.start_time, end_time)) as duration, correct_words, incorrect_words from users u, exams e where u.id = e.id_user and e.end_time > 0 order by correct_words desc, duration');
        
         //      $exams = Exams::all();
        
        return view('/rank', ['exams' => $exams]);
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
