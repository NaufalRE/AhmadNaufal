<?php

namespace App\Http\Controllers;
use App\Skill;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Facades\DB;
use App\Http\Controllers\Controller;

class UserSkillController extends Controller
{
    public function index(){
        $data['datahandle'] = Skill::with('user')->get();
        return view('userskill.index')->with($data);
        
    }

    public function DataStore(Request $request){
        User::create([
            'nama'=>$request->nama,
        ]);

        $data = User::where('nama', '=', $request->nama)->first();      
        Skill::create([
            'user_id'=>$data["id"],
        ]);

        return back();
    }

    public function UpdateSkill(Request $request, $id){
        $data = Skill::findOrFail($id);
        if(!$data["name"]){
            $hien = strval($data["name"]).$request->name;
        }else{
            $hien = strval($data["name"]).', '.$request->name;
        }
        $data->name = $hien;
        $data->save();
        return redirect('/');
    }
}
