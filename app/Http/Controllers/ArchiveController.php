<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Inventory;
use Illuminate\Http\Request;

class ArchiveController extends Controller
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
        $title = "Archive Page";
        $data = Archive::all();
        return view('Archive/home', [
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
        $inventory = Inventory::all();
        $title = "Archive Page";
        return view('Archive/create', [
            "judul" => $title,
            'inventory' => $inventory,

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
        Archive::create([
            'inventory_id' =>$request->inventory_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/archive');
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
        $title = "Ini Halaman Archive";

        $data = Archive::where('id', '=', $id)->first();
        $inventory = Inventory::all();

        return view('archive/edit', [
            "judul" => $title,
            "data" => $data,
            'inventory' => $inventory,
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
        Archive::where('id', '=', $request->id)
            ->update([
                'inventory_id' => $request->inventory_id,
                'name' => $request->name,
                'description' => $request->description,
            ]);

        return redirect('/archive');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Archive::find($id);
        $data->Delete();
        return redirect('/archive');
    }
}
