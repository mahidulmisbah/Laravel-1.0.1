<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculatorController extends Controller
{
    public function addition()
    {
      $name = 5+7;
      echo $name;
    }
    public function division()
    {
      $name = 5/7;
      echo $name;
    }
    public function subtraction()
    {
      $name = 5-7;
      echo $name;
    }
    public function multiplication()
    {
      $name = 5*7;
      echo $name;
    }
}
