@extends('layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>เพิ่มผู้ใช้</h4>
                        {{-- <span>Basic initialisation of DataTables</span> --}}
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ route('users.index') }}">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                                <li class="breadcrumb-item"><a href="#!">เพิ่มผู้ใช้</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">บัญชีผู้ใช้งาน</label>
                                            <div class="col-sm-10">
                                                {!! Form::text('email',null,['id' => 'email', 'class'=>'form-control','placeholder'=>'กรุณากรอกบัญชีชื่อผู้ใช้ Ex. example@mail.com','onKeyUp' => 'callnameuserintra();']); !!}
                                                @if ($errors->has('email'))
                                                    <span class="messages"><font color="red" >{{ $errors->first('email') }}</font></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">รหัสผ่าน</label>
                                            <div class="col-sm-10">
                                                {!! Form::password('password',['id' => 'password', 'class'=>'form-control','placeholder'=>'กรุณากรอกรหัสผ่าน']); !!}
                                                @if ($errors->has('password'))
                                                    <span class="messages"><font color="red" >{{ $errors->first('password') }}</font></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ยืนยันรหัสผ่าน</label>
                                            <div class="col-sm-10">
                                                {!! Form::password('password_confirmation',['id' => 'password_ck', 'class'=>'form-control','placeholder'=>'กรุณากรอกยืนยันรหัสผ่าน']); !!}
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="messages"><font color="red" >{{ $errors->first('password_confirmation') }}</font></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">ชื่อ - นามสกุล</label>
                                            <div class="col-sm-10">
                                                {!! Form::text('name',null,['id' => 'name', 'class'=>'form-control','placeholder'=>'กรุณากรอกชื่อ - นามสกุล','onKeyUp' => 'callnameuserintra();']); !!}
                                                @if ($errors->has('name'))
                                                    <span class="messages"><font color="red" >{{ $errors->first('name') }}</font></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">ตำแหน่ง</label>
                                            <div class="col-sm-10 col-xl-10 m-b-15">
                                                {!! Form::select('role_id', $selectrole
                                                    , null,['class' => 'form-control form-control-defualt','placeholder' => '-- เลือกตำแหน่ง --'] ) !!}
                                                @if ($errors->has('role_id'))
                                                    <span class="messages"><font color="red">{{ $errors->first('role_id') }}</font></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary m-b-0"><i class="icon-check"></i>บันทึก</button>
                                                <a href="{{ route('users.index') }}" class="btn btn-default">
                                                    <i class="ion-reply"></i>ย้อนกลับ
                                                </a>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.container-fluid-->
            </div>
            <!--.page-content-->
@endsection

@section('css') 

@endsection

@section('footerScript')
    <script>
        $(function(){
            document.getElementById('menuuser').classList.add('active');
            document.getElementById('menuuser').classList.add('pcoded-hasmenu');    
            document.getElementById('menuuser').classList.add('pcoded-trigger');                         
        });
    </script>
@endsection
