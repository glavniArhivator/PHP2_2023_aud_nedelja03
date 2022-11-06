<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        $user = new \stdClass();

        $user->firstName = "Petar";
        $user->lastName = "Peric";
        $user->username = "pera";
        $user->email = "pera@mail.com";

        return $user;
    }


}
