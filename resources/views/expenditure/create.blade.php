@extends('layouts.layout')
@section('title', 'Index')

@section('inputcss')
    
@endsection

@section('main')
    <section class="pt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('หน้าแรก') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('เพิ่มรายจ่าย ') }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card shadow">
                        <div class="card-header">
                            {{ __('เพิ่มรายจ่าย') }}
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/expenditure') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-2 text-right">
                                        <label for="name">{{ __('ชื่อรายการ') }}</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="ชือ">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-2 text-right">
                                        <label for="photo">{{ __('อัฟโหลดรูป') }}</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file form-control-sm" name="photo" id="photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-2 text-right">
                                        <label for="content">{{ __('รายละเอียด') }}</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-group">
                                            <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-2 offset-xl-6 text-right">
                                        <label for="price">{{ __('จำนวนเงิน') }}</label>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-sm" name="price" id="price" placeholder="00000.00" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-12">
                                        <div class=" float-right">
                                            <input type="submit" value="เพิ่มรายการ" class="btn btn-sm btn-info shadow-sm">
                                            <input type="reset" value="ล้างค่าทั้งหมด" class="btn btn-sm btn-danger shadow-sm">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inputjavascript')
    
@endsection