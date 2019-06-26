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
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-primary">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="0.62" data-thickness="6" data-color="#ca8411"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">70%</div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">$8758</p>
                        <p class="mt-1">This Week Orders</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-success">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">42%</div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">7847</p>
                        <p class=" mt-1">This Week Earnings</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-secondary">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="0.37" data-thickness="6" data-color="#f66b4e"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">17%</div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">6477</p>
                        <p class=" mt-1">This Week Views</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-info">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="0.42" data-thickness="6" data-color="#3578d5"><canvas width="64" height="64"></canvas><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white">37%</div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">345</p>
                        <p class=" mt-1">This Week Comments</p>
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
                    <div class="col-lg-9">
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