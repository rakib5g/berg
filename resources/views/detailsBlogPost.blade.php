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
                    <a href="{{ route('detailsBlogPost', $blogPostsDetails->id) }}">
                        <h4 class="text-left font-weight-bold">{{ $blogPostsDetails->title }}</h4></a>
                    <p class="text-left text-muted">{{ $blogPostsDetails->created_at->diffForHumans() }}
                    <span class="text-warning">Posted By {{ $blogPostsDetails->user->name }}</span></p>
                    <hr>
                    <img src="{{ Storage::url('post/'.$blogPostsDetails->image) }}" alt="image"
                         class="img-thumbnail" style="height: 350px; width: 100%">
                    <p>{!! $blogPostsDetails->body !!}</p>
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
                        <br>
                        <!--this is suggested blog section-->
                        <div class="row suggested-blog">
                            <!--1st suggested blog-->
                            @foreach($blogPosts as $blogPost)
                                <div class="col-md-4 col-4">
                                    <a href="{{ route('detailsBlogPost', $blogPost->id) }}"><img src="{{ Storage::url('post/'.$blogPost->image) }}" alt="image" class="img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-8">
                                    <a href="{{ route('detailsBlogPost', $blogPost->id) }}">
                                        <h6 class="text-left font-weight-bold">{{ $blogPost->title }}</h6></a>
                                    <p class="text-left text-muted">{{ $blogPost->created_at->diffForHumans() }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection

@push('script')
@endpush
