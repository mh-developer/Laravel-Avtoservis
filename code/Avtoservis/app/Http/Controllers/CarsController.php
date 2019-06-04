<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Car;
use Illuminate\Database\Eloquent\Builder;

class CarsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::where('id_uporabnika', auth()->id())->get();

        return response()->json($cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = $request->validate([
            'id_uporabnika' => 'required|integer',
            'znamka' => 'required',
            'model' => 'required',
            'leto_prve_registracije' => 'required|integer|regex:/^(\d{4})$/',
            'opis' => 'required',
            'is_active' => 'required|integer|between:0,1'
        ]);

        $car = Car::create($data);

        // [
        //     'id_uporabnika' => auth()->id(),
        //     'znamka' => $request->znamka,
        //     'model' => $request->model,
        //     'leto_prve_registracije' => $request->letnik,
        //     'opis' => $request->opis,
        //     'is_active' => 1
        // ]

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::where("id_avtomobila", $id)->first();
        return response()->json($car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::where("id_avtomobila", $id)->first();
        return view('car.update', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_uporabnika' => 'required|integer',
            'znamka' => 'required',
            'model' => 'required',
            'leto_prve_registracije' => 'required|integer|regex:/(\d{4})/',
            'opis' => 'required',
            'is_active' => 'required|integer|between:0,1'
        ]);

        $car = Car::where("id_avtomobila", $id)->first();
        $car->id_uporabnika = $request->get('id_uporabnika');
        $car->znamka = $request->get('znamka');
        $car->model = $request->get('model');
        $car->leto_prve_registracije = $request->get('leto_prve_registracije');
        $car->opis = $request->get('opis');
        $car->is_active = $request->get('is_active');
        $car->save();

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schema::disableForeignKeyConstraints();
        $car = Car::where("id_avtomobila", $id)->delete();

        // if ($car){
        //     $data = [
        //         'message' => 'Uspešno ste izbrisali avtomobil'
        //     ];
        // } else {
        //     $data = [
        //         'message' => 'Brisanje ni bilo uspešno'
        //     ];
        // }
        return response()->json([
            'message' => 'Uspešno ste izbrisali avtomobil'
        ]);
    }
}
