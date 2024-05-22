<?php

namespace App\Http\Controllers\DashController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Validator;


class CarController extends Controller
{
    public function show(){
        return view('show_cars')->with('cars',Car::get());
    }
    public function create(){
        return view('create_cars');
    }
    public function store(Request $request){
        $request->validate([
            'type'=>'required',
            'model'=>'required',
         ]);

        Car::create([
            'type'=> $request-> input('type'),
            'model'=> $request-> input('model'),
         ]);
         return redirect('/show_cars');
    }
    public function destroy($id)
    {
        Car::where(['id'=>$id])->delete();
        return redirect('/show_cars');
    }
}
