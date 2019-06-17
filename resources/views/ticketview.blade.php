@extends('layouts.app')
@section('content')
<div class="main-panel ">
    <div class="main-content">
          <div class="content-wrapper">    
        
                <div class="card card-outline-info box-shadow-0 text-center"  >
                    <div class="card-content">
                    <div class="card-body pt-3">
                        <div class="row d-flex">
                            <div class="col-md-3 align-self-center">
                                <img src="{{ asset('images') }}/{{ $data->image }}" alt="element 04" width="310" class="float-left mt-3">
                            </div>
                            <div class="col-md-6 ">
                                <h4 class="card-title mt-3">{{ $data->name }}</h4>
                                <p class="card-text">{{ $data->description }}</p>
                                <a href="{{ route('ticket.index')}}" class="btn btn-raised btn-info btn-darken-3">View all tickets</a>
                            </div>
                            <div class="col-md-3  ">
                                <p class="card-text">$ {{ $data->price }}</p>
                                <p class="card-text">{{ $data->sale_date }}</p>
                                <p class="card-text">{{ $data->resale_date }}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

         </div>
    </div>
</div>
@endsection
