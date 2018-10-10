@extends('layouts.frontend.app')
@section('title', 'Details')
@push('css')
@endpush

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-9" style="margin: auto">
                <div class="card">
                    <div class="card-header">
                        <h4>{{ $homepost->title }}</h4>
                    </div>

                    <div class="card-body pb-5 bg-light">
                        <p>{!! $homepost->body !!}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('home') }}">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush