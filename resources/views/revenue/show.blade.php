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
                    <li class="breadcrumb-item"><a href="{{ url('/revenue') }}">{{ __('รายรับ') }}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('รายจ่ายทั้งหมด ') }}</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            @if (count($revenue_show) > 0)
                                @foreach ($revenue_show as $show)
                                    {{ $show }} <br>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('inputjavascript')
    
@endsection