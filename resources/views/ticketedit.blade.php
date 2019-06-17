@extends('layouts.app')
@section('content')
<div class="main-panel ">
    <div class="main-content">
          <div class="content-wrapper">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title" id="basic-layout-tooltip">Edit Ticket</h4>
                        <p class="mb-0">You can Edit a current ticket here.
                        <code>Ticket Price</code>,  <code>Sales date</code>
                        ( Ticket Information ) </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('ticket.index') }}" class="btn btn-success">View all tickets</a>
                    </div>
                </div>
            

            </div>
            <div class="card-content">
            <div class="px-3">

                <form class="form" method="post" action="{{ route('ticket.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput1">Ticket Title</label>
                            <input type="text" id="issueinput1" class="form-control" name="name" data-toggle="tooltip"
                                data-trigger="hover" value="{{ $data->name }}" data-placement="top" data-title="Issue Title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput2">Price</label>
                            <input type="text" id="issueinput2" class="form-control" name="price" data-toggle="tooltip"
                                data-trigger="hover" value="{{ $data->price }}"  data-placement="top" data-title="Opened By">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput3">Sale Date</label>
                            <input type="date" id="issueinput3" value="{{ $data->sale_date }}"  class="form-control" name="sale_date" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Opened">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="issueinput4">Resale Date</label>
                            <input type="date" id="issueinput4" value="{{ $data->resale_date }}"  class="form-control" name="resale_date" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Date Fixed">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                    <label for="issueinput8">Description</label>
                    <textarea id="issueinput8" rows="5" value="{{ $data->description }}" class="form-control" name="description" data-toggle="tooltip"
                        data-trigger="hover" data-placement="top" data-title="Comments">{{$data->description}}</textarea>
                    </div>
                
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('images') }}/{{ $data->image }}" alt="element 04" width="200"   class="float-left mt-3">

                        </div>
                        <div class="col-md-5">
                            
                        
                            <div class="form-group">
                            <label class="text-center">Select Ticket Image</label>
                                <div class=" custom-file">
                                    <input type="file" name="image"  class="custom-file-input __web-inspector-hide-shortcut__" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <button type="submit"  class="btn-lg btn btn-raised btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                            </button>
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