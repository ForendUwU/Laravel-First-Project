<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

class CoffeeController extends Controller
{
    public function index() {
        #$coffeeArr = [
        #    ['type' => 'americano', 'amount' => '200ml','price' => 10],
        #    ['type' => 'espresso', 'amount' => '300ml','price' => 15],
        #    ['type' => 'cupuchino', 'amount' => '400ml','price' => 18]
        #];
    
        #Requesting of Query Parametrs
        #return view('coffeeList', [
        #    'coffeeArr' => $coffeeArr,
        #    'name' => request('name'),
        #    'age' => request('age')
        #]);

        #Interacting with models
        $coffeeArr = Coffee::all();
        #$coffeeArr = Coffee::OrderBy('name') -> get();
        #$coffeeArr = Coffee::where('amount', '200 ml.') -> get();
        #$coffeeArr = Coffee::latest() -> get();

        return view('coffees.index', [
            'coffeeArr' => $coffeeArr
        ]);
    }

    public function show($id) {

        $coffee = Coffee::findOrFail($id);
        return view('coffees.show', ['coffee' => $coffee]);
    }

    public function create() {
        return view('coffees.create');
    }

    public function store() {
        $coffee = new Coffee();
        $coffee->name = request('name');
        $coffee->type = request('type');
        $coffee->amount = request('amount');
        $coffee->syrops = request('syrop');

        $coffee->save();

        return redirect('/')->with('msg', 'Thanks for your order');
    }

    public function delete($id) {
        $coffee = Coffee::findOrFail($id);
        $coffee->delete();

        return redirect('/coffeeList');
    }
}
