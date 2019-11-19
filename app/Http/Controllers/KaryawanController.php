<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $title = "Halaman Karyawan";
//        $data = ["Jeffar","Dimas","Rizki"];
        $data = DB::table('karyawan')->get(); //connection ke database
        //dd($data);cek isi data

        return view('karyawan/home',[
            "judul" => $title,
            "data"=> $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Halaman Karyawan";
        return view('karyawan/create',["judul"=> $title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date('Y');
        $nip = $year."08";

        DB::Table('karyawan')->insert(
            [
                'nip' => $nip,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan
            ]);


        return redirect('/karyawan');
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
        $title = "Halaman karyawan";
        $data = DB::table('karyawan')->where('id', '=',$id)->first();
//        dd($data);
        return  view('karyawan/edit',[
            "judul" => $title,
            "data" => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        DB::table('karyawan')->where('id','=',$req->id)->update([
           "nip" => $req->nip,
            "nama"=> $req->nama,
            "alamat"=> $req->alamat,
            "jabatan"=> $req->jabatan
        ]);
        return redirect('/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('karyawan')->where('id', '=',$id)->delete();

        return redirect('karyawan');
    }
}
