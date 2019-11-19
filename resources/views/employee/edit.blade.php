@extends('layouts.master')

@section('content-header')
    <h1>
        {{$judul}}
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
        <li><a href="#">Create</a></li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$judul}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/employee" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="{{$data->id}}">
                        </div>

                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Department Id</label>--}}
                        {{--                            <input type="text" class="form-control" name="department_id" placeholder="Masukkan Department_ID">--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label>Position</label>
                            <select class="form-control" name="position_id">
                                <option value="{{$data->position_id}}">
                                    {{$data->position->name}}
                                </option>
                                @foreach($position as $post)
                                    @if($data->position_id != $post->id)
                                        <option value="{{$post->id}}">
                                            {{$post->name}}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{$data->nip}}"
                                   placeholder="Masukkan NIP">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{$data->name}}" name="name"
                                   placeholder="Masukkan Name">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{$data->address}}" name="address"
                                   placeholder="Masukkan Address">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="{{$data->email}}" name="email"
                                   placeholder="Masukkan Email">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            <div class="col-md-4">
            </div>
        </div>
@endsection

