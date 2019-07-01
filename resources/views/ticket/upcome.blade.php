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
    <div class="col-sm-12 col-lg-6 col-xl-4 col-md-6">
      <div class="card card-img-holder text-default bg-color">
        <div class="row">
          <div class="col-3">
            <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-9">
            <div class="card-body p-4">
              <h1 class="mb-3">{{ $total_count}}</h1>
              <h5 class="font-weight-normal mb-0">Total Upcoming Tickets</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-8 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-2">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="{{ str_replace("'", "", $last_ticket[0]->img) }}" class="card-img-absolute"> </div>
          </div>
          <div class="col-10">
            
            <div class="card-body p-4">
              <h3 class="mb-3 text-primary"> {{ str_replace("'", "", $last_ticket[0]->name) }} <small class="text-danger">{{ str_replace("'", "", $last_ticket[0]->date) }} </small></h3>
              <h5 class="font-weight-normal mb-0"> Locations {{ str_replace("'", "", $last_ticket[0]->address) }}  <button class="btn btn-sm btn-outline-danger">Ongoing Ticket</button></h5>
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