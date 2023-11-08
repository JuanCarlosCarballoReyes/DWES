<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $checked = session('afterInsert', 'show movies');
        $checkedList='checked';
        $checkedCreate='';
        
        if($checked != 'show movies'){
            $checkedCreate='checked';
            $checkedList='';
        }
        
        return view('setting.index',['checkedList' => $checkedList, 'checkedCreate' => $checkedCreate]);
    }
    
    public function update(Request $request){
        session(['afterInsert'=> $request->afterInsert]);
        return  back();
    }
    
    public function saveSelection(Request $request) {
        $selectPaises = $request-> input('selectPaises');
        session(['selectPaises' => $selectPaises]);
        $selectProvincias = $request-> input('selectProvincias');
        session(['selectProvincias' => $selectProvincias]);

        return  back();
    }
}