@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>

@endsection

@section('content')


    <div class="col-md-8">
        <a href="karyawan/create">
            <button class="btn-primary">
                Create Karyawan
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
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>JABATAN</th>
                        <th>ACTION</th>
                    </tr>
                    @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->nip}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->jabatan}}</td>
                            <th>
                                <a href="/karyawan/edit/{{$d->id}}">EDIT</a>
                                   |
                                <a href="/karyawan/delete/{{$d->id}}">DELETE</a>
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
