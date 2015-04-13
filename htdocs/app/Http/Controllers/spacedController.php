<?php
/**
 * Created by PhpStorm.
 * User: Kathleen
 * Date: 11/04/2015
 * Time: 21:47
 */

namespace App\Http\Controllers;


class spacedController extends Controller{

    public function getQuery(){
        return view('query');
    }

    public function postQuery(queryRequest $request){
        return view('home');
//        return "https://api.data.gov/nasa/planetary/apod?concept_tags=True&api_key=T69imYqI1fI0QwLPiuns0N4GBJxddisXBQjRVwsM";
    }

} 