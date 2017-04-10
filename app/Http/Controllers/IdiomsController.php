<?php

namespace Fiszki\Http\Controllers;

use Fiszki\Http\Requests;
use Illuminate\Http\Request;
use Response;
use View;

class IdiomsController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList() {
        return view('idioms/list');
    }

    public function newIdiom() {
        return view('idioms/add');
    }

    public function newIdiomSave(Request $request) {

        $this->validate($request, [
            'idiom_en' => 'required|unique:posts|max:255',
            'use_example_en' => 'required',
            'idiom_pl' => 'required|unique:posts|max:255',
            'use_example_pl' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('idioms/add')
                        ->withErrors($validator)
                        ->withInput();
        }


      //  return Response::make('Idioim dodany!');
    }

}
