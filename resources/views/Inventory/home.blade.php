@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')
    <div class="col-md-8">
        <a href="/inventory/create">
            <button class="btn-primary">
                Create Inventory
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
                        <th>NAME</th>
                        <th>DESCRIPTION</th>
                        <th>DETAIL ARCHIVE</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td><a href="/inventory/show/{{$d->id}}" >{{$d->name}}</a></td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->archive->name}}</td>
                            <td><a href="/inventory/edit/{{$d->id}}">EDIT</a>|<a href="/inventory/delete/{{$d->id}}">DELETE</a></td>
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
