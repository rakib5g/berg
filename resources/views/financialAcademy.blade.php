@extends('layouts.frontend.app')
@section('title', 'Financial-Academy')
@push('css')
@endpush

@section('content')

  <!--Starts onilne course intro section-->
  <section id="online-course-1" class="text-center py-5 text-light">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-5 pt-5">
          <h1 class="display-4 font-weight-bold text-light">Build your trading skills with Alex</h1>
          <p class="lead font-weight-bold">Discover how to trade – or develop your knowledge – with free online courses, webinars and seminars. All from a world-leading company with over 40 years’ experience in the financial markets.</p>
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-5">Join With Me</a>
        </div>
      </div>
    </div>
  </section>
  <!--End of onilne course intro section-->

   <!-- Starts Modal-5 Section -->
  <div class="modal text-center animated zoomIn " id="modal-5">
    <div class="container">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="display-4 text-light">Contact US</h3>
            <button class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message"></textarea>
              </div>
              <input type="submit" value="Send" class="btn btn-primary btn-block">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- End Modal-5 Section -->

 <!--Starts onilne course section and here is all the courses, and the rest of the courses are in courses.html page -->
  <section id="online-trading-course" class="text-center">
    <div class="container-fluid">
      <div class="row mb-5">
    @foreach ($financialacademies as $financialacademy)
        <div class="col-md-4 mt-5">
          <div class="card">
            <img src="{{ Storage::url('financialacademy/'.$financialacademy->image) }}" class="img-fluid card-img-top" alt="">
            <div class="card-body">
              <div class="card-title">
                <h3 class="font-weight-bold">{{ $financialacademy->title }}</h3>
                <small class="text-muted font-weight-bold">{{ $financialacademy->user->name }}</small>
                <hr>
                <p class="lead">{!! str_limit($financialacademy->body, 200) !!}</p>
                <a href="#" class="btn btn-primary float-left">Beginner</a>
                <a href="#" class="btn btn-primary float-right">Course 3</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $financialacademies->onEachSide(2)->links() }}
    </div>
  </section>
  <!--End of onilne course intro section-->
@endsection

@push('script')
@endpush
