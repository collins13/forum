@extends('layouts.app')




@section('content')
  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Donate Kenya
          <h2 class="subtitle">Please subscribe for Daily newletter</h2>
          <form class="form-inline signup" role="form">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
            </div>
            <button type="submit" class="btn btn-theme">Get it now</button>
          </form>
        </div>
        <div class="col-lg-4 col-lg-offset-2">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="" src="/images/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="" src="/images/slide2.png" alt="Second slide">
                </div>
                <div class="">
                  <img class="" src="/images/slide3.png" alt="Third slide">
                </div>
              </div>
            </div>
        </div>

      </div>
    </div>
  </div>
  <div id="footer">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
@endsection
