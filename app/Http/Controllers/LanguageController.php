<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.language.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(! $request->ajax()){
            return view('admin.language.create');
        }else{
            return view('admin.language.modal.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        @ini_set('max_execution_time', 0);
        @set_time_limit(0);
        
        $validator = Validator::make($request->all(), [
            'language_name' => 'required|alpha|string|max:30',
        ]);
        if ($validator->fails()) {
            if($request->ajax()){ 
                return response()->json(['result'=>'error','message'=>$validator->errors()->all()]);
            }else{
                return back()->withErrors($validator)->withInput();
            }           
        }
        
        $name = $request->language_name;
        
        if(file_exists(resource_path() . "/_lang/$name.php")){
            return redirect()->back()->with('error',_lang('Language already exists !'));
        }
        
        $language = file_get_contents(resource_path() . "/_lang/language.php");
        $new_file = fopen(resource_path() . "/_lang/$name.php",'w+');
        fwrite($new_file,$language);
        fclose($new_file);
        
        
        if(! $request->ajax()){
            return redirect('admin/languages')->with('success',_lang('Language Created Sucessfully'));
        }else{
            return response()->json(['result' => 'success', 'redirect' => url('admin/languages'), 'message' => _lang('Language Created Sucessfully')]);
        }
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(file_exists(resource_path() . "/_lang/$id.php")){
            require (resource_path() . "/_lang/$id.php");
            return view('admin.language.edit',compact('language','id'));
        }
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
        @ini_set('max_execution_time', 0);
        @set_time_limit(0);
        
        $contents="<?php \n\n";
        $contents.='$language = array();'."\n\n";     
        foreach($_POST['language'] as $key => $value){
          $contents.='$language["'.str_replace("_"," ",$key).'"] = "'.$value.'";'."\n";
        }

        $file = fopen(resource_path() . "/_lang/$id.php","w");
        
        if(fwrite($file, $contents)){
            return redirect('admin/languages')->with('success',_lang('Updated Sucessfully'));
        }else{
            return redirect('admin/languages')->with('success',_lang('Update failed !'));
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function set($id)
    {
        if (Setting::where('name', 'language')->exists()) {
            $setting = Setting::where('name', 'language')->first();
            $setting->value = $id;
            $setting->save();
        }else{
            $setting = new Setting();
            $setting->name = 'language';
            $setting->value = $id;
            $setting->save();
        }
        return back()->with('success', _lang('new language has been set'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if(ucwords($id) == ucwords(get_option('language'))){
            return back()->with('success', _lang('you cant not remove active language.'));
        }
        if(file_exists(resource_path() . "/_lang/$id.php")){
            unlink(resource_path() . "/_lang/$id.php");
            if(! $request->ajax()){
                return back()->with('success', _lang('Removed Sucessfully'));
            }else{
                return response()->json(['result'=>'success','message'=>_lang('Removed Sucessfully')]);
            }
        }
    }
}
