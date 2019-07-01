@extends('layouts.app')

@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Recorded Tickets</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Ticket</a></li>
        <li class="breadcrumb-item active" aria-current="page">Recorded Tickets</li>
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
              <h1 class="mb-3">{{ $total_count}}</h1>
              <h5 class="font-weight-normal mb-0">Registerd Tickets</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-dollar fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">$ {{ $total_cost }}</h1>
              <h5 class="font-weight-normal mb-0">Total Cost</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-wpforms fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">{{ $today_count}}</h1>
              <h5 class="font-weight-normal mb-0">Today Ticket</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="fa fa-dollar fs-30 text-white mt-4 "></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">$ {{ $today_cost }}</h1>
              <h5 class="font-weight-normal mb-0">Today Price</h5>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
    <div class="card p-5">
          <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Hi <strong> {{Auth::user()->name}}</strong></h2>
                    </div>
                    <div class="col-md-5 text-right">
                        <a href="{{ route('ticket.create') }}"   class="btn btn-indigo"><i class="fa fa-link   "></i> New Ticket</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            <div class="table-responsive">      
                <table class="table card-table table-vcenter text-nowrap">
                    <tr>
                        <th width="10%">Image</th>
                        <th> Ticket Title</th>
                        <th>Price</th>
                        <th>Sales Date</th>
                        <th>Resales Date</th>
                        <th></th>
                        <th></th>
                        <!-- <th></th>
                        <th></th> -->
                    </tr>
                    @foreach($data as $row)
                    <tr>
                        <td><a href="{{ route('ticket.show', $row->id) }}"><img src="{{ asset('images')}}/{{ $row->image }}" class="img-thumbnail" width="75" /></a></td>
                        <td><a href="{{ route('ticket.show', $row->id) }}">{{ $row->name }}</a></td>
                        <td><a href="{{ route('ticket.show', $row->id) }}">$ {{ $row->price }}</a></td>
                        <td><a href="{{ route('ticket.show', $row->id) }}"> {{ $row->sale_date }} </a></td>
                        <td><a href="{{ route('ticket.show', $row->id) }}"> {{ $row->resale_date }} </a></td>
                        <td>
                            <a href="{{ route('ticket.edit', $row->id) }}" class="form-control btn-sm btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('ticket.destroy', $row->id) }}" method="post">
                                 @csrf
                                @method('DELETE')
                                <button type="submit" class="form-control  btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                         </td>
                         
                    </tr>
                    @endforeach
                </table>
                

            </div>
            <div class="row">
                <div class="col-md-12" style="padding-left:72%">
                {!! $data->links() !!}

                </div>
            </div>    
        </div>
    </div>
</div>
 

 
@endsection