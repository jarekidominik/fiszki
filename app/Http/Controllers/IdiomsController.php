<?php

namespace Fiszki\Http\Controllers;

use Fiszki\Http\Requests;
use Illuminate\Http\Request;
use Response;
use View;
use Validator;
use Illuminate\Support\Facades\Input;
use Fiszki\Idioms;
use DB;

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
       
       $idioms = Idioms::all();
        
        return view('/idioms/list', ['idioms' => $idioms]);
    }
    
    public function showIdiom() {
       
      $results = DB::select('select * from idioms order by rand() limit 1');
        
      return view('/idioms/learn', ['idioms' => $results]);
    }

    public function newIdiom() {
        return view('idioms/add');
    }

    public function newIdiomSave(Request $request) {

      
        
       /*   $this->validate($request, [
            'idiom_en' => 'required|unique:posts|max:255',
            'use_example_en' => 'required',
            'idiom_pl' => 'required|unique:posts|max:255',
            'use_example_pl' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('idioms/add')
                        ->withErrors($validator)
                        ->withInput();
        } */
         /*    Validator::make($request->all(), [
            'idiom_en' => 'required|unique:posts|max:255',
            'use_example_en' => 'required',
            'idiom_pl' => 'required|unique:posts|max:255',
            'use_example_pl' => 'required',
        ]);

       /* if ($validator->fails()) {
            return redirect('idioms/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        */
        $idioms = new Idioms;           
        $idioms->create($request->all());
                 
        return Response::make('Idioim dodany!');
    }
 
            
}
