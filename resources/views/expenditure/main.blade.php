@extends('layouts.layout')
@section('title', 'Expenditure')

@section('inputcss')
    
@endsection

@section('main')
    <section class="pt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('หน้าแรก') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('รายจ่ายทั้งหมด ') }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="pt-3">
        <div class="container">
            <div class="row pb-2">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            {{ __('เพิ่มรายจ่ายอย่างไว') }}
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/expenditure') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-xl-3">
                                        <label for="">{{ __('ชื่อรายการ') }}</label>
                                        <input type="text" class="form-control form-control-sm" name="name_expenditure_add" id=""placeholder="ชื่อรายการ" required>
                                    </div>
                                    <div class="col-xl-3">
                                        <label for="">{{ __('รายละเอียด') }}</label>
                                        <input type="text" class="form-control form-control-sm" name="content_expenditure_add" id=""placeholder="รายละเอียด" required>
                                    </div>
                                    <div class="col-xl-2">
                                        <label for="">{{ __('จำนวนเงิน') }}</label>
                                        <input type="number" min="0" maxlength="10" class="form-control form-control-sm" name="price_expenditure_add" id=""placeholder="99999" required>
                                    </div>
                                    <div class="col-xl-2">
                                        <label for="">{{ __('หมวดหมู่') }}</label>
                                        <select name="category_expenditure_add" id="" class="form-control form-control-sm" required>
                                            <option value="">{{ __('กรุณาเลือกหมวดหมู่') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-2">
                                        <input type="submit" class="btn btn-sm btn-info btn-block shadow-sm" value="เพิ่มรายการ">
                                        <button type="reset" class="btn btn-sm btn-danger btn-block shadow-sm">ล้างค่าทั้งหมด</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            {{ __('Expenditure') }}
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($expenditure_select) > 0)
                                        @foreach ($expenditure_select as $item)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center bg-dark text-light"><h3>ยังไม่มีรายจ่าย</h3></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inputjavascript')
    
@endsection