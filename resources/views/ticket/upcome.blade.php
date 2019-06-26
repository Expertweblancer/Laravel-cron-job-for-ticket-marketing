@extends('layouts.app')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Upcoming Festivals</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Ticket</a></li>
        <li class="breadcrumb-item active" aria-current="page">upcoming festivals</li>
        </ol>
    </div>
    <div class="row row-cards">
    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default bg-color">
        <div class="row">
          <div class="col-4">
            <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-user fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">17,533</h1>
              <h5 class="font-weight-normal mb-0">Followers</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-heart fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">10,257</h1>
              <h5 class="font-weight-normal mb-0">Likes</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-bubble fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">87</h1>
              <h5 class="font-weight-normal mb-0">Comments</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="assets\images\circle.svg" class="card-img-absolute"><i class=" lnr lnr-envelope fs-30 text-white mt-4 "></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">485</h1>
              <h5 class="font-weight-normal mb-0">Posts</h5>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
  
  
  <div class="row">
  @foreach($data as $row)
    <div class="col-md-6 col-sm-12 col-lg-6 col-xl-3">
        <div class="card text-center">
            <img src="{{ str_replace("'", "", $row->img) }}" alt="img" class="br-tl-7 br-tr-7">
            <div class="card-body">
                <h4 class="mb-3">{{ str_replace("'", "", $row->name) }}</h4>
                <p> {{ str_replace("'", "", $row->address) }}</p>
                <a href="#" class="btn btn-primary">{{ str_replace("'", "", $row->date) }}</a>
            </div>
        </div>
    </div>
  @endforeach
  </div>
  <div class="row">
        <div class="col-md-12" style="padding-left:72%">
        {!! $data->links() !!}

        </div>
    </div>  


</div>
@endsection