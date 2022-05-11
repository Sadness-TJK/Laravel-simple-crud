<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\car;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $database = DB::table('cars')->get();
        return view('home', ['database'=>$database]);
    }

    public function home_edit()
    {
        return view('home_edit');
    }

    public function store(Request $request)
    {
        $car = new car();

        $car->model = $request->model;
        $car->year = $request->year;

        $car->save();

        return redirect('/home');
    }

    public function delete($id)
    {
        car::destroy($id);

        return redirect('home')->with('message', 'Succesfully deleted!');

    }
    public function get_to_change($id)
    {
        return view('home_change', ['id'=>$id]);
    }

    public function change($id, Request $request)
    {
        $car = car::find($id);
        $car->model = $request->model;
        $car->year = $request->year;

        $car->save();

        return redirect('/home');
    }

    
}
