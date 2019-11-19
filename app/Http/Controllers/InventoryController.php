<?php

namespace App\Http\Controllers;

use App\Archive;
use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
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
        $title = "Inventory Page";
        $data = Inventory::all();
        return view('inventory/home', [
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
        $title = "Inventory Page";
        return view('inventory/create', [
            "judul" => $title,
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
        Inventory::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $last_inventory = Inventory::where('name', '=', $request->name)->get()->last();

        Archive::create([
            'name' => $request->archive_name,
            'description' => $request->archive_description,
            'inventory_id' => $last_inventory->id,
        ]);
        return redirect('/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail Pengguna Inventory";

        $data = Inventory::where('id', '=', $id)->first();
        return view('inventory/show', [
            "judul" => $title,
            "data" => $data,
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
        $title = "Ini Halaman Inventory";

        $data = Inventory::where('id', '=', $id)->first();
//        dd($data);
//        $data_archive = Archive::where('id', '=', $id)->first();
        return view('inventory/edit', [
            "judul" => $title,
            "data" => $data,
//            "data_archive" => $data_archive,
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
        Inventory::where('id', '=', $request->id)
            ->update([
                'name' => $request->name,
                'description' => $request->description,

            ]);

        Archive::where('id', '=', $request->id)
            ->update([
                'name' => $request->archive_name,
                'description' => $request->archive_description,

            ]);


        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Inventory::find($id);
        $data1 = Archive::find($id);
        $data->Delete();
        $data1->Delete();
        return redirect('/inventory');
    }
}
