@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Search </h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Main Search</a></li>
            <li class="breadcrumb-item active" aria-current="page">Search</li>
        </ol>

    </div>
    <div class="row row-cards">
         
        <div class="col-lg-12">
        <form action="{{ route('search')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="input-group">
                    <input type="text" name="item" class="form-control br-tl-7 br-bl-7" placeholder="">
                    <div class="input-group-append ">
                        <button type="submit" class="btn btn-primary br-tr-7 br-br-7">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                
            </div>
            </form>
            <div class="card mt-5 store">
                <div class="table-responsive p-5">
                    <table class="table card-table table-vcenter text-nowrap ">
                        @foreach($data as $row)
                        <tr>
                            <td><div style="width:100px"><img src=" {{ str_replace("'", "", $row->img) }} " alt="" class="h-8"></div></td>
                            <td> {{ str_replace("'", "", $row->name) }}</td>
                            <td>
                                {{ str_replace("'", "", $row->address) }}
                            </td>
                            <td class="text-right text-primary d-none d-md-table-cell text-nowrap"> {{ str_replace("'", "", $row->date) }}</td>

                            <td class="text-right">
                            @if(  str_replace("'", "", $row->price) =='')
                                <strong>Free</strong>
                            @else
                                <strong>$ {{ str_replace("'", "", $row->price) }}</strong>
                            @endif
                            </td>
                         </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style=" ">
                {!! $data->links() !!}

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection