<?php

namespace App\Http\Controllers;

use App\department;
use App\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class positionController extends Controller
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
        $title = "Position Page";
//        $data = DB::table('positions')->get();
        $data = Position::all();
        return view('position/home',[
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
        $department = department::all();
        $title = "Position Page";
        return view('position/create',[
            "judul" => $title,
            'department' => $department,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Position::create([
            'department_id' => $request->department_id,
            'name' => $request->name,
            'code' => $request->code
        ]);

        return  redirect('/position');
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
        $title = "Ini Halaman Edit position";

        $data = Position::where('id','=',$id)->first();
//        dd($data);
        $department = department::all();

        return view('position/edit',[
            "judul" => $title,
            "data" => $data,
            'department' =>$department,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Position::where('id','=',$request->id)
            ->update([
                'department_id' => $request->department_id,
                'name' => $request->name,
                'code' => $request->code
            ]);

        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('position')->where('id','=',$id)->delete();
        $data = Position::find($id);

        // soft delete
        // $data->delete();

        // permanent delete
        $data->Delete();

        return redirect('/position');
    }
}
