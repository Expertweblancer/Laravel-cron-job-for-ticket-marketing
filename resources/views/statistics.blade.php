@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Statistics</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Widgets</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-primary">
                <div class="card-body d-flex justify-content-center align-items-center">
                <div class="chart-circle chart-circle-sm mr-5" data-value="1" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-info"><i style="font-size:20px" class="fa fa-archive"></i></div></div>

                     <div class="wrp text-wrapper text-white">
                        <p class="mt-3">{{ $total_count}}</p>
                        <p class="mt-1">Registered Ticket</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-success">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="1" data-thickness="6" data-color="#2b9146"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-default"><i  style="font-size:20px" class="fa fa-wpforms"></i></div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">{{ $eventbrite}}</p>
                        <p class=" mt-1">Eventbrite Counts</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-secondary">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="1" data-thickness="6" data-color="#f66b4e"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-white"><i  style="font-size:20px" class="fa fa-wpforms"></i></div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">{{ $etix }}</p>
                        <p class=" mt-1">Etix Events</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card widgets-cards bg-info">
                <div class="card-body d-flex justify-content-center align-items-center">
                    <div class="chart-circle chart-circle-sm mr-5" data-value="1" data-thickness="6" data-color="#3578d5"><canvas width="64" height="64"></canvas><div class="chart-circle-value text-primary"><i  style="font-size:20px" class="fa fa-wpforms"></i></div></div>
                    <div class="wrp text-wrapper text-white">
                        <p class="mt-3">{{ $upcome }}</p>
                        <p class=" mt-1">Upcoming Festival</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card card-img-holder text-default bg-color">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="{{ str_replace("'", "", $upcome_data->img) }}" class="card-img-absolute"><i class="lnr lnr-user fs-30  text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h4 class="mb-3">{{ str_replace("'", "", $upcome_data->name) }}</h4>
                            <h5 class="font-weight-normal mb-0">{{ str_replace("'", "", $upcome_data->date) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card card-img-holder text-default">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-warning"><img src="{{ str_replace("'", "", $etix_data[0]->img) }}" class="card-img-absolute"><i class="lnr lnr-heart fs-30 text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                                <h4 class="mb-3">{{ substr(str_replace("'", "", $etix_data[0]->name), 0, 35) }}</h4>
                                <h5 class="font-weight-normal mb-0">{{ str_replace("'", "", $etix_data[0]->price) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card card-img-holder text-default">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="{{ str_replace("'", "", $eventbrite_data->img) }}" class="card-img-absolute"><i class="lnr lnr-bubble fs-30 text-white mt-4"></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                                <h4 class="mb-3">{{ str_replace("'", "", $eventbrite_data->name) }}</h4>
                                @if(str_replace("'", "", $eventbrite_data->price) == '')
                                    <h5 class="font-weight-normal mb-0">Free</h5>
                                @else
                                    <h5 class="font-weight-normal mb-0">$ {{ str_replace("'", "", $eventbrite_data->price) }}</h5>
                                @endif                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card card-img-holder text-default">
                <div class="row">
                    <div class="col-4">
                        <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="{{asset('images')}}/{{ str_replace("'","",$custom_data->image)}}" class="card-img-absolute"><i class=" lnr lnr-envelope fs-30 text-white mt-4 "></i></div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h1 class="mb-3">{{ str_replace("'","",$custom_data->name)}}</h1>
                            <h5 class="font-weight-normal mb-0">{{ str_replace("'","",$custom_data->sale_date)}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
         

         

         


        <div class="col-lg-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Eventbrite Ongoing Tickets</h3>
                </div>
                <div>
                    <div class="table-responsive border-top">
                        <table class="table card-table table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th colspan="2">name</th>
                                    <th>address</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($eventbrite_datas as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td><span class="avatar brround" style="background-image: url({{ str_replace("'","", $row->img)}})"></span></td>
                                    <td>{{ str_replace("'","",$row->name)}}</td>
                                    <td>{{ str_replace("'","",$row->address)}}</td>
                                    <td class="text-nowrap">{{ str_replace("'","",$row->date)}}</td>
                                    <td><a href="{{ route ('eventbrite.index')}}" class="icon"><i class="fa fa-chain text-danger"></i></a></td>
                                </tr>
                                @endforeach
                                 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title">Select a seat</h5>
                </div>
                <div class="card-body">
                    @foreach($data as $row)
                    <div class="clearfix row border-bottom p-1 pt-3 pb-3">
                        <div class="col">
                            <div>
                                <div class="float-left">
                                    <h5><strong>{{ str_replace("'","",$row->name)}}</strong></h5>
                                    <h6>{{ str_replace("'","",$row->address)}}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="float-right">
                                <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-primary">{{ str_replace("'","",$row->date)}}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
    <div class="row row-deck">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Upcoming Events</h2>
                </div>
                <div class="card-body">
                    @foreach($upcome_datas as $row)
                    <article class="media event">
                        <a class="pull-left message-avatar mb-1 ">
                            <img src="{{ str_replace("'","",$row->img)}}" alt="">
                        </a>
                        <div class="media-body">
                            <div class="pull-left">
                                <a class="title" href="{{ route('upcoming-festivals.index') }}">{{ str_replace("'","",$row->name)}}</a>
                                <p>{{ str_replace("'","",$row->address)}}</p>
                                <p class="text-success mb-0"><i class="fa fa-eye mr-2"></i>: {{ str_replace("'","",$row->date)}}</p>

                            </div>
                       
                          
                        </div>
                    </article>
                    @endforeach
                     
                </div>
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Etix Events</h3>
                </div>
                <div class="card-body">
                    <table class="table card-table ">
                        <tbody>
                            @foreach($etix_datas as $row)
                            <tr>
                                <td class="  "><img style="border-radius:50%" src="{{ str_replace("'","",$row->img)}}" alt=""></td>
                                <td>{{ str_replace("'","",$row->name)}}
                                    <div class="progress progress-xs mt-1">
                                        <div class="progress-bar bg-primary" style="width: 78%"></div>
                                    </div>
                                </td>
                                <td class="w-1 text-right"><span class="text-muted">"{{ str_replace("'","",$row->price)}}</span></td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-4">
            <div class="card">
                <a href="#"><img class="card-img-top br-tl-7 br-tr-7" src="assets\images\photos\3.jpeg" alt="And this isn't my nose. This is a false one."></a>
                <div class="card-body d-flex flex-column">
                    <h4><a href="#">The new event is engraved.</a></h4>
                    <div class="text-muted">Event information
 There is also a possibility. Depending on the results of your audition, the results may vary. Ability to achieve as soon as possible.</div>
                    <div class="d-flex align-items-center pt-5 mt-auto">
                        <div class="avatar brround avatar-md mr-3" style="background-image: url(assets/images/faces/female/8.jpeg)"></div>
                        <div>
                            <a href="profile.html" class="text-default">Jevan Peters</a>
                            <small class="d-block text-muted">1 days ago</small>
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-thumbs-up mr-1"></i></a>
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-message-square mr-1"></i></a>
                        </div>
                        <div class="ml-auto text-muted">
                            <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-share-2 mr-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     
    
</div>
@endsection