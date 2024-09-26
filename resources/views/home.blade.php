@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                @if ($blog['status'] == 1)
                    <div class="col-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" style="height: 240px" src="{{ asset($blog['image']) }}" alt="images">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog['title'] }}</h5>
                                <p class="card-text">{{ $blog['details'] }}</p>
                            </div>
                            <span class="text-center">{{ $blog['price'] }}</span>
                            <div class="card-body mx-auto d-inline">
                                <a href="#" class="card-link btn btn-primary mx-0">{{ $blog['addtocard'] }}</a>
                                <a href="#" class="card-link btn btn-primary mx-0">{{ $blog['order'] }}</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-3 mt-3">
                        <div class="card">
                            <img class="card-img-top" style="height: 240px" src="{{ asset($blog['image']) }}"
                                alt="images">
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog['title'] }}</h5>
                                <p class="card-text">{{ $blog['details'] }}</p>
                            </div>
                            <span class="text-center">{{ $blog['price'] }}</span>
                            <div class="card-body mx-auto d-inline">
                                <a href="#" class="card-link btn btn-primary mx-0">{{ $blog['addtocard'] }}</a>
                                <a href="#" class="card-link btn btn-primary mx-0">{{ $blog['order'] }}</a>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-warning">pending</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    @php
    $data = 333;
    @endphp
    
    @isset($data)
        <div class="alart alart-success">Success</div>
    @endisset
@endsection
