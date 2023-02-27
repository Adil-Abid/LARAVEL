<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\vehicles;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    //
    public function index(){
        // echo 'hello hy welcome';
        return view('vehicle.list');
    }
    public function create() {
        return view('vehicle.create');
    }
    public function store(Request $req){

        $No = $req->get('no');
        $Name = $req->get('name');
        $Model = $req->get('model');

        $vehicle = new vehicles();
        // $vehicle->vehicle_id = $id;
        $vehicle->vehicle_no = $No;
        $vehicle->vehicle_name = $Name;
        $vehicle->vehicle_model = $Model;
        $vehicle->save();

        return redirect("/vehicles");
    }
   public function readData(){
        $pdata = vehicles::all();
        return view('vehicle.list',['data'=>$pdata]);
       }

       public function user(){
        $user = Users::all();
        // print_r($user); exit;
        return view('users.user',['data'=>$user]);
       }
       public function assignVehicle(){
        return view('users.assignVehicle');
       }
       public function edit($id){

        $data = vehicles::where('vehicle_id','=',$id)->get();
        return view('vehicle.edit',['data'=>$data]);
       }
       public function update(Request $req){

        $No = $req->get('no');
        $Name = $req->get('name');
        $Model = $req->get('model');
        $data =$req->id;
        vehicles::where('vehicle_id', $data)->update([
            'vehicle_no' => $No,
            'vehicle_name' => $Name,
            'vehicle_model' => $Model
            ]);
            return redirect("/vehicles");
       }
       public function delete($id){
        $id  = $id;
        $data = vehicles::where('vehicle_id', $id);
        $data->delete();

        return redirect("/vehicles");
       }

       public function dropdown(){
        $data = vehicles::all();
        return view('users.assignVehicle',['data'=>$data]);
       }

}
