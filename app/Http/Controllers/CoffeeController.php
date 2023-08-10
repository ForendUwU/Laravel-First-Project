<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    public function index() {
        $coffeeArr = [
            ['type' => 'americano', 'amount' => '200ml','price' => 10],
            ['type' => 'espresso', 'amount' => '300ml','price' => 15],
            ['type' => 'cupuchino', 'amount' => '400ml','price' => 18]
        ];
    
        #Requesting of Query Parametrs
        #return view('coffeeList', [
        #    'coffeeArr' => $coffeeArr,
        #    'name' => request('name'),
        #    'age' => request('age')
        #]);
    
        return view('coffeeList', [
            'coffeeArr' => $coffeeArr
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
