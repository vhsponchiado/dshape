<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Measurements;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller

{
    public function index(){

        $measurement = Measurements::orderBy('date','desc')

        ->where('user_id',Auth::user()->id)
        ->take(5)
        ->get()
        ->reverse();

        $dados = [];

        foreach ($measurement as $measurement) {
            $dados["dates"][] = $measurement["date"];
            $dados["left_arm"][] = $measurement["left_arm"];
            $dados["right_arm"][] = $measurement["right_arm"];
            $dados["abdomen"][] = $measurement["abdomen"];
            $dados["waist"][] = $measurement["waist"];
        }

        return view('measurements/home',['dados' => $dados]);

    }
}
