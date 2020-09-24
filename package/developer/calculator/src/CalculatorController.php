<?php

namespace Developer\Calculator;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //

    public function index(){
	    print_r("welcome to my calculator");
	}

    public function add($a, $b){
	    $result = $a + $b;
	    echo "Your result is ".$result ;
	}

	public function subtract($a, $b){
	    $result = $a - $b;
	    echo "Your result is ".$result ;
	}

	public function multiply($a, $b){
	    $result = $a * $b;
	    echo "Your result is ".$result ;
	}

	public function divide($a, $b){
	    $result = $a / $b;
	    echo "Your result is ".$result ;
	}
}
