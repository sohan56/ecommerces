<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Carbon\Carbon;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function general(Request $request)
    {
        if($request->isMethod('post')){
            foreach($request->except('_token') as $key => $value){
                if($key != '' && $value != ''){
                    $data = array();
                    $data['value'] = is_array($value) ? serialize($value) : $value; 
                    $data['updated_at'] = Carbon::now();
                    if(Setting::where('name', $key)->exists()){                
                        Setting::where('name','=',$key)->update($data);         
                    }else{
                        $data['name'] = $key; 
                        $data['created_at'] = Carbon::now();
                        Setting::insert($data); 
                    }
                }
            }
            if(! $request->ajax()){
                return back()->with('success', _lang('Saved sucessfully'));
            }
        }
        return view('admin.settings.general');
    }
}
