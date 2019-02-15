@extends('layouts.layout')
@section('title', 'Category')

@section('inputcss')
    
@endsection

@section('main')
    <section class="pt-3">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('หน้าแรก') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('หมวดหมู่ ') }}{{ $status }}</li>
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
                            {{ __('Category : ').$status }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-8 border-right">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th class="text-center">ชื่อ</th>
                                                <th class="text-center">วันที่</th>
                                                <th class="text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if (count($category_show) > 0)
                                            @foreach ($category_show as $category)
                                            <tr>
                                                <td class="text-center">{{ $count++ }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td class="text-center">{{ $category->created_at }}</td>
                                                <td class="text-center">
                                                    <a href=""><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>  
                                            @endforeach
                                        @else  
                                            <tr>
                                                <td colspan="4" class="text-center bg-dark text-light"><h3>ยังไม่มีหมวดหมู่</h3></td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xl-4">
                                    <form action="{{ url('/category') }}" method="post">
                                        @csrf
                                        <div class="form-row pb-3">
                                            <div class="col-xl-12">
                                                <label for="">{{ __('ชื่อหมวดหมู่') }}</label>
                                                <input type="text" name="name" id="" class="form-control form-control-sm" placeholder="หมวดหมู่" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-12 text-center">
                                                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                                <input type="hidden" name="status" value="{{ $status }}">
                                                <input type="submit" value="เพิ่มหมวดหมู่" class="btn btn-sm btn-info shadow-sm">
                                                <input type="reset" value="ล้างค่าทั้งหมด" class="btn btn-sm btn-danger shadow-sm">
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inputjavascript')
    <script>
        $(document).ready( function () {
            $('#expenditureTable').DataTable();
        } );
    </script>   
@endsection