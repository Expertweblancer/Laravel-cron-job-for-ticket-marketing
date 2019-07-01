@extends('layouts.app')

@section('content')
<div class=" content-area">
  <div class="page-header">
    <h4 class="page-title">Dashboard</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard 1</li>
    </ol>
  </div>

  <div class="row row-cards">
    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default bg-color">
        <div class="row">
          <div class="col-4">
            <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">{{ $total_count }}</h1>
              <h5 class="font-weight-normal mb-0">Registered Ticket</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">{{ $upcome }}</h1>
              <h5 class="font-weight-normal mb-0">Upcoming Ticket</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-dollar fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">$ {{ $total_cost }}</h1>
              <h5 class="font-weight-normal mb-0">Custom Ticket Cost</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="assets\images\circle.svg" class="card-img-absolute"><i class=" fa fa-code-fork fs-30 text-white mt-4 "></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">7</h1>
              <h5 class="font-weight-normal mb-0">Tracked Websites</h5>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-12 col-xl-4 col-sm-12">
      <div class="card ">
        <div class="card-header">
          <div class="card-title">All Tickets</div>
        </div>
        <div class="card-body p-4">
          <div class="chats-wrap">
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Ongoing Tickets</span>
                <span class="float-right p-1  btn btn-sm text-default">
                <b></b>{{ $upcome }}</span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary-gradient" style="width: 70%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal"> Custom Ticket</span>
                <span class="float-right p-1  btn btn-sm text-default">
                  <b>{{$custom_ticket}}</b></span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info-gradient" style="width: 60%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Custom Price</span>
                <span class="float-right p-1  btn btn-sm text-default">
                  <b>$ {{$total_cost}}</b>
                </span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning-gradient" style="width: 47%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Today Cost</span>
                <span class="float-right p-1 btn btn-sm text-default">
                  <b>$ {{$today_cost}}</b>
                </span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated  bg-success-gradient" style="width: 25%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-8 col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tickets Report</h3>
        </div>
        <div class="card-body">
          <div id="morrisBar3" class="chartsh"></div>
          <div class="col pt-3">
            <ul class="legend align-items-center ">
              <li>
                <span class="legend-dots bg-primary"></span>Ongoing Tickets
              </li>
              <li>
                <span class="legend-dots bg-secondary"></span>Custom Tickets
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

 

  <div class="row row-cards row-deck">
    <div class="col-md-12 col-lg-12 col-xl-4">
      <div class="card clearfix">
        <div class="card-header">
            <h2 class="card-title">Profile</h2>
        </div>
          <div class="card-body p-0">
          <div class="card-body bg-primary text-white">
            <img src="{{ asset('assets\images\faces\male\photo.png') }}"   alt="" class="profile-img img-responsive center-block">
            <a href="#" class="profile-image">
              <span class="fa fa-pencil" aria-hidden="true"></span>
            </a>
            <div class="profile-label mt-3">
              <span>{{Auth::user()->name}}</span>
            </div>

            <div class="profile-stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              
              <span>Website Owner</span>
            </div>

            <div class="profile-since">
               {{date("F j, Y, g:i a")}}
            </div>
          </div>
                              <div class="border-bottom align-items-center">
            <div class="card-body">
              <div class="profile-details">
                <div class="list-group list-group-transparent mb-0 mail-inbox">
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <span class="icon mr-3"><i class="fa fa-phone-square"></i></span>Phone: <span>+1 860 966 1693</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <span class="icon mr-3"><i class="fa fa-outdent"></i></span>Address: <span>40 Sutton Pl Apt 9J, NY 10022-2306</span>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                    <span class="icon mr-3"><i class="fa fa-envelope-square"></i></span>Email: <span> tktundrgrnd@gmail.com</span>z
                  </a>
                </div>
              </div>
            </div>
          </div>
                              <div class="p-3">
            <div class="profile-message-btn center-block text-center">
              <a href="{{ route('email.index') }}" class="btn btn-secondary btn-block">
                <i class="fa fa-envelope"></i> Send message
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-8 col-md-12">
      <div class="card ">
        <div class="card-header">
          <h5 class="card-title">Select a Seat </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped card-table table-condensed mt-0 table-nowrap border">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>EVENT</th>
                  <th>LOCATIONS</th>
                  <th>DATE</th>
               
                </tr>
              </thead>
              <tbody>
              <?php $i = 1 ?>
                @foreach($data as $row)
                <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ str_replace("'", "", $row->name) }}</td>
                        <td>{{ str_replace("'", "", $row->address) }}</td>
                        <td>{{ str_replace("'", "", $row->date) }}</td>
                 </tr>
                <?php $i+=1 ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-center">
          <a href="{{route('selectaseat.index')}}"><i class="fa fa-angle-down"></i> View More</a>
        </div>
      </div>
    </div>
  </div>
</div>  
 @endsection
