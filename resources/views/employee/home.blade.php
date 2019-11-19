@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <a href="employee/create">
            <button class="btn-primary">
                Create Employee
            </button>
        </a>
        <div class="box" >
            <div class="box-header">
                <h3 class="box-title">Table {{$judul}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NIP</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>EMAIL</th>
                        <th>POSITION</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>    {{$d->id}}</td>
                            <td>{{$d->nip}}</td>
                            <td><a href="/employee/show/{{$d->id}}" >{{$d->name}}</a></td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->position_id}}</td>
                            <td><a href="/employee/edit/{{$d->id}}">EDIT</a>|<a href="/employee/delete/{{$d->id}}">DELETE</a></td>
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
