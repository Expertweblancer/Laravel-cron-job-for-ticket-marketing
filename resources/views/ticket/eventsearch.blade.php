@extends('layouts.app')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">EventBrites</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('ticket.index')}}">Ticket</a></li>
        <li class="breadcrumb-item active" aria-current="page">EventBrites</li>
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
                <h5 class="font-weight-normal mb-0">Total Upcoming Tickets</h5>
              </div>
            </div>
          </div>
          </div>
      </div>

      <div class="col-sm-12 col-lg-6 col-xl-8 col-md-6">
        <div class="card card-img-holder text-default">
          <div class="row">
            <div class="col-md-2 col-sm-12">
              <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="{{ str_replace("'", "", $last_ticket[0]->small_img) }}" class="card-img-absolute"> </div>
            </div>
            <div class="col-md-8 col-sm-12">
              
              <div class="card-body  p-4">
                <h3 class="mb-3 text-primary"> {{ str_replace("'", "", $last_ticket[0]->name) }} <small class="text-info"> <br>{{ str_replace("'", "", $last_ticket[0]->date) }} </small></h3>
                <h5 class="font-weight-normal mb-0"> Locations {{ str_replace("'", "", $last_ticket[0]->address) }} </h5>
              </div>
            </div>
            <div class="col-md-2 col-sm-12 pt-5">
            @if(str_replace("'", "", $last_ticket[0]->sold_out)=='')
              <button class="btn btn-sm btn-outline-success">Saling Ticket</button>          
            @else
              <button class="btn btn-sm btn-outline-danger">{{ str_replace("'", "", $last_ticket[0]->sold_out) }}</button>
            @endif
            </div>
          </div>
          </div>
      </div>
         
        
    </div>
    <div class="row">
      <div class="col-12">
        <form action="{{ route('event_search')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="input-group">
                    <input type="text" name="item" class="form-control br-tl-7 br-bl-7" placeholder="">
                    <div class="input-group-append ">
                        <button type="submit" class="btn btn-primary br-tr-7 br-br-7">
                            <i class="fa fa-search" aria-hidden="true"> Search</i>
                        </button>
                    </div>
                
            </div>
          </form>
      </div>
    </div>
    <div class="row mt-4">
        @foreach($data as $row)
        <div  class="col-md-6 col-sm-12 col-lg-6 col-xl-12">
            <div class="card">
                <div class="row">
                    <div class="col-lg-2">
                      <a href="{{ route('eventbrite.show', $row->id)}}">
                        <img src="{{ str_replace("'", "", $row->small_img) }}" alt="">
                      </a>
                    </div>
                    <div class="col-lg-7">
                        <small class="text-muted"> {{ str_replace("'", "", $row->date) }} </small>
                        <h4 class="text-primary">{{ str_replace("'", "", $row->name) }} </h4>
                        <p>{{ str_replace("'", "", $row->address) }}</p>
                        
                    </div>
                    <div class="col-lg-1 pt-5">
                        @if( str_replace("'", "", $row->price)  == '')
                            <h4 class="text-success">Free</h4>
                        @else
                            <h4 class="text-info">${{ str_replace("'", "", $row->price) }}</h4>
                        @endif
                    </div>
                    <div class="col-lg-2 pt-5 text-right p-5">
                      @if( str_replace("'", "", $row->sold_out) == '')
                       <a href="{{ route('eventbrite.show', $row->id) }}" class="btn btn-sm btn-primary">view more</a> 
                      @else
                        <a href="{{ route('eventbrite.show', $row->id) }}" class="btn btn-sm btn-outline-danger">{{ str_replace("'", "", $row->sold_out) }}</a>
                      @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
   
</div>
@endsection