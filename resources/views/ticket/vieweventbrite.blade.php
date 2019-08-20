@extends('layouts.app')
@section('content')
<div class="main-panel ">
    <div class="main-content m-5">
          <div class="content-wrapper">    
            <div class="row">                
                <div class="card card-outline-info box-shadow-0 text-center"  >
                    <div class="card-content">
                        <div class="card-body pt-3">
                            <div class="row d-flex">
                                <div class="col-md-6 align-self-center">
                                    <img src="{{ str_replace("'", "", $data->big_img) }}" alt="element 04"  class="float-left mt-3">
                                </div>
                                <div class="col-md-3 pt-5">
                                    <h2 class="card-title mt-3" style="font-size:25px">{{ str_replace("'", "", $data->name) }}</h2>
                                    <p class="card-text" style="font-size:18px">{{ str_replace("'", "", $data->address) }}</p>
                                    
                                   
                                </div>
                                <div class="col-md-3  pt-4">
                                    @if(!str_replace("'","", $data->sold_out) == '')
                                    <button class="btn-lg btn btn-outline-danger"> {{ str_replace("'", "", $data->sold_out) }} </button><br><br>
                                    @endif
                                    @if(str_replace("'","", $data->price) == '')
                                    <p class="text-primary" style="font-size:25px">Free</p>
                                    @else
                                    <p class="text-primary" style="font-size:25px">${{ str_replace("'", "", $data->price) }}</p>
                                    @endif
                                    <a href="{{ route('eventbrite.index')}}" class="btn btn-raised btn-primary ">Back</a>
                                    @if(str_replace("'","", $data->sold_out) == '')
                                        <a href="{{ str_replace("'", "", $data->link) }}" class="btn btn-raised btn-primary  ">Buy Ticket</a>
                                    @else
                                        <a href="{{ str_replace("'","", $data->link)}}" class="btn btn-raised btn-primary">View Ticket</a>   
                                    @endif 
                                 </div>
                            </div>
                            <div class="row p-5 m-5" >
                            <p>{{ str_replace("'", "", $data->about) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         </div>
     
    </div>
</div>
@endsection