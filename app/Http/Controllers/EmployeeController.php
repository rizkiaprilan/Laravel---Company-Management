<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $title = "Employee Page";
//        $data = DB::table('positions')->get();
        $data = Employee::all();
        return view('employee/home', [
            "judul" => $title,
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();
        $title = "Employee Page";
        return view('employee/create', [
            "judul" => $title,
            'position' => $position,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'position_id' => $request->position_id,
            'nip' => $request->nip,
            'address' => $request->address,
            'email' => $request->email,
        ]);

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail Pengguna Employee";

        $data = Employee::where('id', '=', $id)->first();
//        dd($data);
//        $position = Position::all();

        return view('employee/show', [
            "judul" => $title,
            "data" => $data,
//            'position' => $position,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Ini Halaman Employee";

        $data = Employee::where('id', '=', $id)->first();
//        dd($data);
        $position = Position::all();

        return view('employee/edit', [
            "judul" => $title,
            "data" => $data,
            'position' => $position,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Employee::where('id', '=', $request->id)
            ->update([
                'position_id' => $request->position_id,
                'name' => $request->name,
                'nip' => $request->nip,
                'address' => $request->address,
                'email' => $request->email,
            ]);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('position')->where('id','=',$id)->delete();
        $data = Employee::find($id);

        // soft delete
        // $data->delete();

        // permanent delete
        $data->Delete();

        return redirect('/employee');
    }
}
