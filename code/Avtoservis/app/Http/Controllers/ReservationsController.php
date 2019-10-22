<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Reservation;
use App\Car;
use App\Avtoservi;
use App\Service;

class ReservationsController extends Controller
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
        $reservations = Reservation::where('id_uporabnika', auth()->id())->orderBy('termin', 'desc')->paginate(4);

        return response()->json($reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::where('id_uporabnika', auth()->id())->get();
        $avtoservis = Avtoservi::get();
        $services = Service::get();
        return view('reservation.create', compact('cars', 'avtoservis', 'services'));
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
            'id_storitve' => 'required|integer',
            'id_avtoservis' => 'required|integer',
            'id_avtomobila' => 'required|integer',
            'termin' => 'required', // |regex:/(\d{4})\-(\d{2})\-(\d{2}) (\d{2})\:(\d{2})\:(\d{2})/
            'dodatni_opis' => 'required',
            'is_confirm' => 'required'
        ]);

        $car = Reservation::create($data);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function messages()
    {
        return [
            'termin.required' => 'Termin je obvezen',
            'dodatni_opis.required'  => 'Dodatni opis je obvezen',
        ];
    }
}
