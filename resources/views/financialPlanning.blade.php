@extends('layouts.frontend.app')
@section('title', 'Financial-planning')
@push('css')
@endpush

@section('content')
    <!--Starts Financial Planning Section-->

  <section id="blog-page" class="">
    <div class="container-fluid">
      <div class="row p-3">
        <!--this is left blog section-->
        <div class="col-md-12 py-3 blog-left">
          <!--1st blog article-->
          @foreach ($financialaplannings as $financialaplanning)
          <div class="row">
                <div class="col-md-4 col-sm-4 col-4">
                    <img src="{{ Storage::disk('public')->url('financialplanning/'.$financialaplanning->image) }}" alt="image" class="img-fluid">
                    <a href="#">
                    <h1 href="#" class="img-btm mt-0 font-weight-bold text-center">Savings<i class="ml-2 fas fa-arrow-circle-right"></i></h1>
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-8 pln mb-5">
                    <a href="#" target="_blank"><h4 class="font-weight-bold">{{ $financialaplanning->title }}</h4></a>
                    <div class="d-none d-md-block">
                        <p>{!! str_limit($financialaplanning->body, 300) !!}</p>
                    </div>
                    <a href="file/Berg-Finances.pdf" class="btn btn-primary" download>Download Financial Tools 1</a>
                    <a href="file/Berg-Finances.pdf" class="btn btn-primary" download>Download Financial Tools 2</a>
                </div>
            </div>
            @endforeach
            <p class="">{{ $financialaplannings->onEachSide(2)->links() }}</p>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('script')
@endpush
