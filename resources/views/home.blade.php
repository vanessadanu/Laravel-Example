@extends('layouts.web')

@section('title', 'Home')

@section('content')
<div class="container">
  <h2>Bootstrap</h2>
  <div class="row">
      <div class="col-sm">
          <b>Col1</b>
          <div class="card" style="width: 18rem;">
          <img src="https://i.pinimg.com/564x/20/bb/3f/20bb3f7e36e3a1b9367fe73c9f120d6b.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Hidup itu kaya roda; kadang di bawah, kadang di bawah banget.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

    <div class="col-sm">
      <b>Col2</b>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.pinimg.com/564x/12/47/f5/1247f58ad55bcb649d0c134fe21bbaa4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://i.pinimg.com/564x/0c/cd/f0/0ccdf081d1c250c30007d7af5a35ad29.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>

    <div class="col-sm">
      <b>Col3</b>
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <br>
          <a href="#" class="btn btn-primary">Submit</a>
        </div>
    </div>
  </div>
</div>
@endsection