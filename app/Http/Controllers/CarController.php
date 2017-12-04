<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Car;
use App\Repositories\CarRepository;

class CarController extends Controller {

    protected $car;

    public function __construct(CarRepository $car) {

        $this->middleware('auth');

        $this->car = $car;
    }

    public function index() {

        $cars = Car::OrderBy('created_at', 'desc')->get();

        return view('cars.index', compact('cars'));
    }

    public function create() {

        return view('cars.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:225',
            'price' => 'required|numeric|between:0.00,99999999.99',
            'status' => 'required|in:available,sold'
        ]);

        $car = new Car;

        $car->name = $request->name;
        $car->price = $request->price;
        $car->status = $request->status;
        $car->save();

        return redirect('cars');
    }

    public function edit($id) {

        $cars = Car::find($id);

        return view('cars.edit', compact('cars'));
    }

    public function update($id, Request $request) {

        $this->validate($request, [
            'name' => 'required|max:225',
            'price' => 'required|numeric|between:0.00,99999999.99',
            'status' => 'required|in:available,sold'
        ]);

        $car = [
            'name' => $request->name,
            'price' => $request->price,
            'status' => $request->status
        ];

        Car::where('id', $id)->update($car);

        return redirect('cars');
    }

    public function destroy($id) {

        Car::where('id', $id)->delete();

        return redirect('cars');
    }

}
