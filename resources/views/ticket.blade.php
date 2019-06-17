@extends('layouts.app')

@section('content')
<div class="main-panel py-2">
    <div class="main-content">
          <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Hi <strong> {{Auth::user()->name}}</strong></h2>
                    </div>
                    <div class="col-md-5 text-right">
                        <a href="{{ route('ticket.create') }}"   class="btn btn-success"><i class="ft-file-plus"></i> New Ticket</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            <div class="table-responsive">
                

                    
                
                <table class="table">
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
                            <a href="{{ route('ticket.edit', $row->id) }}" class="btn btn-primary"><i class="ft-edit"></i> Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('ticket.destroy', $row->id) }}" method="post">
                                 @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="ft-trash-2"></i> Delete</button>
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
<!-- Modal -->


<!-- Modal -->
<div class="modal fade" id="editticketModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
                <div class="px-3">

                    <form class="form">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="issueinput1">Ticket Title</label>
                                        <input type="text" id="issueinput1" class="form-control" name="issuetitle" data-toggle="tooltip"
                                            data-trigger="hover" data-placement="top" data-title="Issue Title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="issueinput2">Ticket Price</label>
                                    <input type="text" id="issueinput2" class="form-control" name="openedby" data-toggle="tooltip"
                                        data-trigger="hover" data-placement="top" data-title="Opened By">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="issueinput3">Date Opened</label>
                                <input type="date" id="issueinput3" class="form-control" name="dateopened" data-toggle="tooltip"
                                    data-trigger="hover" data-placement="top" data-title="Date Opened">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="issueinput4">Date Fixed</label>
                                <input type="date" id="issueinput4" class="form-control" name="datefixed" data-toggle="tooltip"
                                    data-trigger="hover" data-placement="top" data-title="Date Fixed">
                                </div>
                            </div>
                            </div>

                            <!-- <div class="form-group">
                            <label for="issueinput5">Priority</label>
                            <select id="issueinput5" name="priority" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                data-placement="top" data-title="Priority">
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                            </div> -->

                            <div class="form-group">
                            <label for="issueinput6">Status</label>
                            <select id="issueinput6" name="status" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                data-placement="top" data-title="Status">
                                <option value="not started">Not Started</option>
                                <option value="started">Started</option>
                                <option value="fixed">Fixed</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label for="issueinput8">Comments</label>
                            <textarea id="issueinput8" rows="5" class="form-control" name="comments" data-toggle="tooltip"
                                data-trigger="hover" data-placement="top" data-title="Comments"></textarea>
                            </div>

                        </div>

                        <div class="form-actions">
                            <button type="button" data-dismiss="modal" class="btn btn-raised btn-warning mr-1">
                            <i class="ft-x"></i> Cancel
                            </button>
                            <button type="button" class="btn btn-raised btn-primary">
                            <i class="fa fa-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
        
            </div>
                
        </div>
    </div>
</div>
@endsection