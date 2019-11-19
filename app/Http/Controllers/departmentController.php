<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\department;

class departmentController extends Controller
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
        $title = "Department Page";
        $data = DB::table('departments')->get();
        return view('department/home',[
            "judul" => $title,
            "data" => $data
        ]);

        //sow with soft deleting
        //$data = department::withTrashed()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Department Page";
        return view('/department/create',[
            "judul" => $title
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
//        cara 1
        $validateData = $request->validate([
            'name' =>'required|min:5|max:20',
            'code' =>'required|unique:departments,code',
        ]);

        $data = new department;  //nama modelnya
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect('/department');
        //        dd($request);
//        cara 2
//        department::create([
//           'name' => $request->name,
//            'code' => $request->code
//        ]);



//        cara 3
//        DB::Table('departments')->insert(
//            [
//                'name' => $request->name,
//                'code' => $request->code,
//
//            ]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $judul = "Show Department";
        $data = department::where('id','=',$id)->first();
//        $data = Position::where('department_id','=','$id')->get();
        return view('department/show',['data'=>$data,'judul'=>$judul]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judul = "Edit Department";
        $data = department::where('id','=',$id)->first();
        return view('department/edit',['data'=>$data,'judul'=>$judul]);

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
        department::where('id','=',$request->id)->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect('/department');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = department::find($id);
        $data->forceDelete();

        return redirect('/department');
    }
}
