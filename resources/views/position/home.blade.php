@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <a href="position/create">
            <button class="btn-primary">
                Create position
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
                        <th>DEPARTMENT ID</th>
                        <th>NAME</th>
                        <th>CODE</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->department->name}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->code}}</td>
                            <td><a href="/position/edit/{{$d->id}}">EDIT</a>|<a href="/position/delete/{{$d->id}}">DELETE</a></td>
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
