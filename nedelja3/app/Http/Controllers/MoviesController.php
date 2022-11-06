<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    //Inicijalni prikaz, filtriranje, paginacija
    function index(Request $request) {
        //var_dump();
        $actorId = $request->get("actorId");
        $perPage = $request->get("perPage");

        dd($perPage);
        //dd();

        //obracanje modelu i izvrsavanje upita

        //vracanje view-a
    }

    function store(Request $request) {
        //validacija
        //insert

        return "Upisano";
    }

    function create() {

        return view("movies-create");
    }

    function details($id) {
        dd($id);
    }

    function edit($id) {
        dd($id);
    }

    function update($id) {

    }

    function delete($id) {

    }
}
