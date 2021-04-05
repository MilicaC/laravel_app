<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\State;

class CityController extends Controller
{
    public function all(){
        $cities = City::all();
        return view('cities',['cities'=>$cities]);
    }
    public function search(){
        $cities = City::all();
        return view('search',['cities'=>$cities]);
    }

    public function create(Request $request){
        $input=$request->all();
        $city= City::create($input);
        return redirect('/cities');
    }
    public function edit($id){
        $city = City::find($id);
        $states = State::all();
        return view('city',['city'=>$city,'states'=>$states]);
    }
    public function update(Request $request,$id){
        $city=City::find($id);
            $input=$request->all();
            $city->update($input);
        
        return redirect('/cities');
    }
    public function delete(Request $request,$id){
        $city=City::find($id);
        $city->delete();
        return redirect('/cities');
    }
}
