@extends("theme")

@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-mid-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://miro.medium.com/max/10846/1*c4PwAk-scwsmIsgonBgqYA.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://i.pinimg.com/originals/c8/a8/cf/c8a8cf28e2bc418808f2488043aac2e2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/30/8a/7f/flower-shop.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="col col-12 col-sm-4 col-mid-4 col-lg-4 col-xl-4 col-xxl-4">
<table class="table table-borderless">
<h1>BLOSSOM FLOWER SHOP</h1>



@endsection