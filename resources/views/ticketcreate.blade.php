@extends('layouts.app')
@section('content')
<div class=" content-area">
  <div class="page-header">
    <h4 class="page-title">Create Ticket</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" > Ticket</li>
      <li class="breadcrumb-item"><a href="{{ route('ticket.index')}}">Custom Ticket</a></li>
      <li class="breadcrumb-item active" aria-current="page">Create ticket</li>
    </ol>
  </div>
    <div class="main-content">
          <div class="content-wrapper">
        <div class="card p-5">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-tooltip">You can add new ticket for you.</h4>
                 
            </div>
            <div class="card-content p-5">
            <div class="px-3">

                <form class="form" method="post" action="{{ route('ticket.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput1">Ticket Title</label>
                            <input type="text" id="issueinput1" class="form-control" name="name" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Issue Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput2">Price</label>
                            <input type="text" id="issueinput2" class="form-control" name="price" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Opened By">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput3">Sale Date</label>
                            <input type="date" id="issueinput3" class="form-control" name="sale_date" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput4">Resale Date</label>
                            <input type="date" id="issueinput4" class="form-control" name="resale_date" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Fixed">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                    <label for="issueinput8">Description</label>
                    <textarea id="issueinput8" rows="5" class="form-control" name="description" data-toggle="tooltip"
                        data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
                    </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            
                        
                            <div class="form-group">
                            <label class="text-center">Select Ticket Image</label>
                                <div class=" custom-file">
                                    <input type="file" name="image" class="custom-file-input __web-inspector-hide-shortcut__" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <br>
                            <button type="submit" class=" btn btn-raised btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                        <div class="col-md-1">
                            <br>
                            <a href="{{ route('ticket.index') }}" class=" btn btn-purple"><i class="fa fa-repeat"></i> Back</a>

                        </div>
                    </div>
                    <br>
                    <!-- <div class="form-group">
                    <label for="issueinput5">Priority</label>
                    <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover"
                        data-placement="top" data-title="Priority">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                    </div> -->

                    

                    

                </div>

                
                     
                    
               
                </form>
            </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection