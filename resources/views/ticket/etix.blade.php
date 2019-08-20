@extends('layouts.app')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Etixes</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('ticket.index')}}">Ticket</a></li>
        <li class="breadcrumb-item active" aria-current="page">Etixes</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-4 col-md-6">
        <div class="card card-img-holder text-default bg-color">
            <div class="row">
            <div class="col-3">
                <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30  text-white mt-4"></i></div>
            </div>
            <div class="col-9">
                <div class="card-body p-4">
                <h1 class="mb-3">{{ $total_count}}</h1>
                <h5 class="font-weight-normal mb-0">Total Etix Tickets</h5>
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
                <h3 class="mb-3 text-primary"> {{ str_replace("'", "", $last_ticket[0]->name) }}  </h3>
                <h5 class="font-weight-normal mb-0"> Locations {{ str_replace("'", "", $last_ticket[0]->address) }}  <button class="btn btn-sm btn-outline-danger">{{ str_replace("'", "", $last_ticket[0]->sold_out) }} </button></h5>
                </div>
            </div>
            </div>
            </div>
        </div>
         
        
    </div>
    <div class="row">
        @foreach($data as $row)
        <div  class="col-md-6 col-sm-12 col-lg-6 col-xl-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{ str_replace("'", "", $row->img) }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <small class="text-muted"> {{ str_replace("'", "", $row->date) }} : {{ str_replace("'", "", $row->price) }}</small>
                        <h4 class="text-primary">{{ str_replace("'", "", $row->name) }}</h4>
                        <p>{{ str_replace("'", "", $row->address) }}</p>
                    </div>
                    <div class="col-lg-2">
                        <a class="mt-5 btn btn-outline-info" href="{{ str_replace("'", "", $row->link) }}">{{ str_replace("'", "", $row->sold_out) }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        
 
<div class="row">
        <div class="col-md-12" style=" ">
        {!! $data->links() !!}

        </div>
    </div>


</div>
@endsection