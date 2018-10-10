@extends('layouts.frontend.app')

@section('title', 'Home')

@push('css')
@endpush

@section('content')

  <!--Starts Home Image Section-->
  <section id="home-image" class="py-5 text-center text-light ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ">
          <div class="home-article">
            <h1 class="display-4 font-weight-bold mt-5 pt-5 ">Institutional services from a global leader in financial trading</h1>
            <p class="lead font-weight-bold mt-5 mb-5 pb-5">Access exceptional liquidity, powerful technology and over 40 years’ trading expertise with IG – an innovative FTSE 250 company with a robust balance sheet</p>
          </div>
        </div>
        <section id="section06" class="demo">
          <a href="#video-section"><span></span></a>
        </section>
      </div>
    </div>
  </section>
  <!--End of Home Image Section-->

    <!--Starts Home Video Section-->
  <section id="video-section" class="py-5 ok">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 ">
          <h4 class="font-weight-bold mb-3">Why should my website be mobile friendly?</h4>
          <h5 class="font-weight-bold mb-3">A little extra work caters your customers wherever they are at</h5>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, odit, vitae assumenda necessitatibus libero, voluptatem quisquam vero sit cum illo quod magni, totam eius suscipit. Magni fugiat, laudantium libero sapiente.20 </p>
          <h5 class="font-weight-bold mb-3">A little extra work caters your customers wherever they are at</h5>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, odit, vitae assumenda necessitatibus libero, voluptatem quisquam vero sit cum illo quod magni, totam eius suscipit. Magni fugiat, laudantium libero sapiente.20 </p>
        </div>
        <div class="col-md-6">
          <div class="video-wrapper mb-5">
             @foreach($videos as $video)
                <iframe class="img-fluid vdo-fluid" width="700" height="400"
                        src="{{ $video->link }}"
                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>

                </iframe>
            @endforeach
          </div>
        </div>
        @foreach($homePosts as $homePost)
        <div class="col-md-4 text-center text-justify">
          <h1>{{ $homePost->title }}</h1>
          <p class="lead">{!! str_limit($homePost->body,150) !!}</p>
          <a href="{{ route('homePostDetails', $homePost->id) }}" class="btn btn-success">Read More</a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--End of Home Video Section-->

  <!--Starts Contact-us Section-->
  <section id="contact" class="py-5 text-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mb-3">
          <div class="home-article">
            <h1 class="font-weight-bold">Contact us</h1>
            <p class="lead font-weight-bold">Let us create a solution tailored for your needs. Get in touch with our London-based team by phone or email to discuss your objectives, or request a brochure.</p>
          </div>
        </div>
       @foreach($contacts as $contact)
            <div class="col-md-4 mt-2">
                <a href="" class="btn btn-outline-success btn-block font-weight-bold">{{ $contact->phone }}</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="" class="btn btn-outline-success btn-block font-weight-bold">{{ $contact->email }}</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="" class="btn btn-outline-success btn-block font-weight-bold">Request a brochure</a>
            </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--End of Contact-us Section-->
@endsection

@push('script')
@endpush
