<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarsUpdateRequest;
use App\Models\Cars;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars=Cars::all();
        return view('admin.cars.index',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $car = new Cars();
        $car->name = $request->name;
        $car->merk = $request->merk;
        $car->save();

        return to_route('cars.index');
    }

    /**
     * Display the specified resource.
     * @param Cars $cars
     * @return View
     */
    public function show(Cars $car)
    {
        return view('admin.cars.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param Cars $car
     * @return View
     */
    public function edit(Cars $car): View
    {
        return view('admin.cars.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     * @param CarsUpdateRequest $request
     * @param Cars $car
     * @return RedirectResponse
     */
    public function update(CarsUpdateRequest $request, Cars $car): RedirectResponse
    {
        $car->name = $request->name;
        $car->merk = $request->merk;
        $car->save();

        return to_route('cars.index')->with('status', "Car $car->name updated successfully");
    }

    /**
     * Show the form for deleting the specified resource.
     * @param Cars $car
     * @return View
     */
    public function delete(Cars $car): View
    {
        return view('admin.cars.delete', ['car' => $car]);
    }

    /**
     * Remove the specified resource from storage.
     * @param Cars $car
     * @return RedirectResponse
     */
    public function destroy(Cars $car): RedirectResponse
    {
        $car->delete();

        return to_route('cars.index')->with('status', "Car $car->name deleted successfully");
    }
}
