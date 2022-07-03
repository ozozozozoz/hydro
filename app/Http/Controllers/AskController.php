<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Ask;

class AskController extends Controller
{
    //
    public function AddAsk(Request $request){
        $Name = $request->input('Name');
        $Email = $request->input('Email');
        $Subject = $request->input('Subject');
        $Message = $request->input('Message');
        $data=array('Name'=>$Name,"Email"=>$Email,"Subject"=>$Subject,"Message"=>$Message);
        DB::table('ask')->insert($data);
        // echo "Record inserted successfully.<br/>";
        return redirect('kontak');
        }
}
