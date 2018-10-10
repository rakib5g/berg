@extends('layouts.frontend.app')
@section('title', 'About_us')
@push('css')
 <!-- CSS for Testimonial slider -->
  {{-- <link rel="stylesheet" href="{{ asset('asset/frontend/css/flickity.min.css') }}"> --}}
@endpush

@section('content')
    <!--Starts 4 core values Navbar-->
    <section id="values">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center mt-5 pt-5">
                    <h1 class="display-4 mb-2">Invest with Alex</h1>
                    <h1 class="mb-4">Make your financial goals a reality, sooner.</h1>
                    <p class="lead">Manage your own investment decisions with an IG share dealing account, or choose a ready-made, broadly diversified IG Smart Portfolio that we manage on your behalf. Each of these accounts can be opened with a tax-efficient ISA or SIPP to maximise
                        returns.
                    </p>
                    <h1 class="mb-4">Your capital is at risk</h1>
                </div>
                @foreach($abouts as $about)
                <div class="col-sm-6 col-md-3 mt-5 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4 text-light">{{ $about->title }}</h3>
                            <p>{!! str_limit($about->body, 100) !!}</p>
                            <a href="{{ route('aboutDetails', $about->id) }}" class="btn btn-outline-light"> Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End of 4 core values Navbar-->

    <!--Starts values-bottom article section-->
    <section id="values-bottom" class="py-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <p class="lead text-center font-weight-bold">The value of investments can fall as well as rise, and you may get invested. Past performance is no guarantee of future results. </p>
                    <hr>
                    <p>1) If you have an active CFD or spread betting account that is accessible under the same login as your share dealing account, you’ll automatically qualify for our lowest commission rate if you’ve placed at least one spread bet or CFD trade in
                        the previous calendar month. If you do not have a CFD or spread betting account with IG, your commissions will be determined based on your share-dealing activity (UK stocks only). Place 10+ trades in the previous month to qualify for a £5
                        commission rate. See our full list of share dealing charges and fees.</p>
                    <p>2) Tax laws are subject to change and depend on individual circumstances. Tax law may differ in a jurisdiction other than the UK.</p>
                </div>
            </div>
        </div>
    </section>
    <!--End of values-bottom article section-->

  <!--Starts testimonial Section-->
  <div class="main-gallery">
    <div class="gallery-cell">
      <div class="testimonial">
        <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
        <span class="testimonial-author">Joe Smith, CEO of Cubix</span>
      </div>
    </div>
    <div class="gallery-cell">
      <div class="testimonial">
        <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/chexee/128.jpg">
        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
        <span class="testimonial-author">Lisa Jones, Freelance Web Developer</span>
      </div>
    </div>
    <div class="gallery-cell">
      <div class="testimonial">
        <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/andretacuyan/128.jpg">
        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
        <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
      </div>
    </div>
  </div>
  <!--End of testimonial section-->
@endsection

@push('script')
     <!-- JS for Testimonial slider -->
  <script src="{{ asset('asset/frontend/js/flickity.min.js') }}"></script>
@endpush
