<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CarController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    public function get()
    {
        $cars = Car::query()
            ->get();
            
        return response()->json($cars);
    }

    public function createCar(Request $request)
    {   
        $car = Car::create($request->all());
        
            return Response()->json($car, 201);
    }

    public function updateCar(Car $car, Request $request)
    {
        $car->update($request->all());

        return response()->json($car);
    }

    public function deleteCar(Car $car) 
    {
        $car->delete();

    return response()->json("", 204);
    }
}