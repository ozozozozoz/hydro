<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutViewController extends Controller
{
    //
    public function index(){
        $abouts = DB::select('select * from AboutUstbl');
        return view('about',['abouts'=>$abouts]);
        }
    
        public function conf(){
            $confs = DB::select('select * from basicconf');
            //return 'https://api.whatsapp.com/send?phone=' + confs -> waNumber;
            return view('contact',['confs'=>$confs]);
            }
}
