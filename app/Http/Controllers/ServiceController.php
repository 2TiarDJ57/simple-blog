<?php
namespace App\Http\Controllers;
use App\Models\Service;

class ServiceController extends Controller {
    public function index(){
        return view('service', [
            "tittle" => "Service",
            "service" => Service::all()

        ]);
    }

    public function show(Service $service){
        return view('single-service', [
            "tittle" => "Single-Service",
            "service" => $service

        ]);
    }




}

?>