@extends('layouts.app')

@section('content')
<style>
td, th{
    font-size:18px;
}
</style>
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">TicketWeb</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('ticket.index')}}">Ticket</a></li>
        <li class="breadcrumb-item active" aria-current="page">TicketWeb</li>
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
                <h5 class="font-weight-normal mb-0">Total Web Events</h5>
                </div>
            </div>
            </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6 col-xl-8 col-md-6">
        <div class="card card-img-holder text-default">
            <div class="row">
            <div class="col-3">
                 <img  src="{{ str_replace("'", "", $last_ticket[0]->img) }} " class="card-img-absolute">  
            </div>
            <div class="col-9">
                
                <div class="card-body p-4">
                <h3 class="mb-3 text-primary"> {{ str_replace("'", "", $last_ticket[0]->name) }}  ( <small class="text-info">{{ str_replace("'", "", $last_ticket[0]->date) }}</small> )</h3>
                <h5 class="font-weight-normal mb-0"> Locations {{ str_replace("'", "", $last_ticket[0]->address) }}  <button class="btn btn-sm btn-outline-danger">{{ str_replace("'", "", $last_ticket[0]->sold_out) }} </button></h5>
                </div>
            </div>
            </div>
            </div>
        </div>
  </div>
   
  
  <div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">United States Locations</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th width="150px">Image</th>
                            <th>Event</th>
                             <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($data as $row)
                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td><img src="{{ str_replace("'", "", $row->img) }}" alt=""></td>
                        <td><?php 
                        $str = str_replace("'", "", $row->name);
                            if (strlen($str) > 15)
                            $str = substr($str, 0, 15) . '...';
                        
                        ?>
                      <br>
                        {{ $str }}
                        {{ str_replace("'", "", $row->address) }}
                        </td>

                        
                         <td>
                         <?php 
                        $str = str_replace("'", "", $row->sold_out);
                            if (strlen($str) > 15)
                            $str = "No Ticket...";
                        
                        ?>
                         {{ $str }} <br>
                        {{ str_replace("'", "", $row->date) }}
                        </td>
                        <td><a href="{{ str_replace("'","", $row->link)}}" class="btn btn-lg btn-info">More</a></td>
                            
                        </tr>
                        <?php $i+=1 ?>
                        @endforeach
                         
                    </tbody>
                </table>
            </div>
            <!-- table-responsive -->
        </div>
    </div>
</div>
<div class="row">
        <div class="col-md-12" style=" ">
        {!! $data->links() !!}

        </div>
    </div>


</div>
@endsection