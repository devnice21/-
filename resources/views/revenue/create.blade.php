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
                    <li class="breadcrumb-item active" aria-current="page">{{ __('เพิ่มรายรับ ') }}</li>
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
                            {{ __('เพิ่มรายรับ') }}
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/revenue') }}" method="post" enctype="multipart/form-data">
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
                                        <label for="image">{{ __('อัฟโหลดรูป') }}</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file form-control-sm" name="image" id="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-xl-2 text-right">
                                        <label for="category_id">{{ __('ประเภท') }}</label>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="form-group">
                                            <select name="category_id" id="category_id" class="form-control form-control-sm">
                                                <option value="0">{{ __('กรุณาเลือก') }}</option>
                                            </select>
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
                                        <div class="float-right">
                                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
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