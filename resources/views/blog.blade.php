@extends('layouts.frontend.app')
@section('title', 'Blog')
@push('css')
@endpush

@section('content')
    <section id="blog-page" class="">
        <div class="container-fluid">
            <div class="row p-3">
                <!--this is left blog section-->
                <div class="col-md-8 py-3 blog-left">
                    @foreach($blogPosts as $blogPost)
                    <div class="row mt-5">
                        <div class="col-md-5 col-sm-4 col-4">
                            <a href="{{ route('detailsBlogPost', $blogPost->id) }}" target="_blank"><img src="{{ Storage::url('post/'.$blogPost->image) }}" alt="image" class="img-fluid"></a>
                        </div>
                        <div class="col-md-7 col-sm-8 col-8">
                            <a href="{{ route('detailsBlogPost', $blogPost->id) }}" target="_blank"><h4 class="font-weight-bold">{{ $blogPost->title }}</h4></a>
                            <p class="text-muted">{{ $blogPost->created_at->diffForHumans() }} |
                                <span class="text-warning">Posted by {{ $blogPost->user->name }}</span>
                            </p>
                            <div class="d-none d-md-block">
                                <p>{!! str_limit($blogPost->body, 200) !!}</p>
                                <a href="{{ route('detailsBlogPost', $blogPost->id) }}" target="_blank" class="btn btn-success">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        <br>
                    {{ $blogPosts->onEachSide(2)->links() }}
                </div>

            <!--this is right blog section-->
                <div class="col-md-4 py-3 blog-right text-center">
                    <div class="blog-right-wrapper">
                        <!--this is contact section-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="call-section text-center px-5">
                                    <h6 class="font-weight-bold mt-3">Call Us On</h6>
                                    @foreach($contact as $con)
                                        <h4 class="font-weight-bold mb-3">{{ $con->phone }}</h4>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--this is recent blog section-->
                        <div class="row">
                            @foreach($oneLatestPost as $latsPost)
                            <div class="col-md-12 col-4 mt-5">
                                <a href="{{ route('detailsBlogPost', $latsPost->id) }}" target="_blank"><img class="img-fluid" src="{{ Storage::url('post/'.$latsPost->image) }}" alt="image" ></a>
                            </div>
                            <div class="col-md-12 col-8 text-left ">
                                <a href="{{ route('detailsBlogPost', $latsPost->id) }}" target="_blank"><h4 class="font-weight-bold mt-5 mt-md-2">{{ $latsPost->title }}</h4></a>
                                <p class="text-muted">{{ $latsPost->created_at->diffForHumans() }} |
                                    <span class="text-warning">Posted by {{ $latsPost->user->name }}</span></p>
                                <div class="d-none d-md-block">
                                    <p>{!! str_limit($latsPost->body, 250) !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--this is suggested blog section-->
                        <div class="row suggested-blog">
                            <!--1st suggested blog-->
                            @foreach($randomPost as $blogPost)
                                <div class="col-md-4 col-4">
                                    <a href="{{ route('detailsBlogPost', $blogPost->id) }}" target="_blank"><img src="{{ Storage::url('post/'.$blogPost->image) }}" alt="image" class="img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-8">
                                    <a href="{{ route('detailsBlogPost', $blogPost->id) }}" target="_blank"><h6 class="text-left font-weight-bold">{{ $blogPost->title }}</h6></a>
                                    <p class="text-left text-muted">{{ $blogPost->created_at->diffForHumans() }}</p>
                                </div>
                            @endforeach
                        </div>

                        <!--Popular blog post-->
                       <!-- <div class="row popular-blog mt-5">
                            <div class="col-md-12">
                                <h5 class="text-center font-weight-bold">Popular</h5>
                                <hr>
                            </div>

                            <div class="col-md-12">
                                <a href="#" target="_blank"><h6 class="text-left font-weight-bold">Funds in Focus – Where to invest?</h6></a>
                                <p class="text-left text-muted">May 14, 2018</p>
                            </div>
                            <div class="col-md-12 mt-2">
                                <a href="#" target="_blank"><h6 class="text-left font-weight-bold">Investment Update April 2018</h6></a>
                                <p class="text-left text-muted">April 5, 2018</p>
                            </div>
                            <div class="col-md-12 mt-2">
                                <a href="#" target="_blank"><h6 class="text-left font-weight-bold">Property Investment using your Pension</h6></a>
                                <p class="text-left text-muted">May 5, 2018</p>
                            </div>
                            <div class="col-md-12 mt-2">
                                <a href="#" target="_blank"><h6 class="text-left font-weight-bold">Qualifying Recognised Overseas Pension Schemes (QROPS)</h6></a>
                                <p class="text-left text-muted">June 21, 2018</p>
                            </div>

                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@push('script')
@endpush