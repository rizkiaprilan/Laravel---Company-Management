@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <a href="department/create">
            <button class="btn-primary">
                Create Departments
            </button>
        </a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table {{$judul}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NAMA</th>
                        <th>CODE</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td><a href="/department/show/{{$d->id}}" >{{$d->name}}</a> </td>
                            <td>{{$d->code}}</td>

                            <th>
                                <a href="/department/edit/{{$d->id}}">EDIT</a>
{{--                                /karyawan/edit/{{$d->id}}--}}
                                |
                                <a href="/department/delete">DELETE</a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-4">

    </div>
    @endsection
