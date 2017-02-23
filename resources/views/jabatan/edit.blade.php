@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Ubah Jabatan</center></div>

               
                <div class="panel-body">
                    <form action="{{route('jabatan.update',$jabatan->id)}}" method="POST">
                        <input name="_method" type="hidden" value="PATCH">
                        {{csrf_field()}}

                         <div class="form-group">
                            <label for="kode_jabatan" class="col-md-4 control-label">Kode Jabatan</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('kode_jabatan') ? 'has-errors':'message'}}" >
                                <input id="kode_jabatan" type="text" class="form-control" name="kode_jabatan" value="{{ $jabatan->kode_jabatan }}"  autofocus>
                            @if($errors->has('kode_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('kode_jabatan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="nama_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('nama_jabatan') ? 'has-errors':'message'}}" >
                                <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" value="{{ $jabatan->nama_jabatan }}"  autofocus>
                             @if($errors->has('nama_jabatan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('nama_jabatan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>
                            <div class="col-md-6">
                            <div class="form-group {{$errors->has('besaran_uang') ? 'has-errors':'message'}}" >
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="{{ $jabatan->besaran_uang }}"  autofocus>
                            @if($errors->has('besaran_uang'))
                                <span class="help-block">
                                    <strong>{{$errors->first('besaran_uang')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            </div>
                        



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





                
