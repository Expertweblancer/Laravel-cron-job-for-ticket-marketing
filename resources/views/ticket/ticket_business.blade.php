@extends('layouts.app')
@section('content')

<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Events</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Business Ticket</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>

    </div>
    <div class="row row-cards">
        <div class="col-lg-3">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> Categories</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label mt-0">Locations</label>
                                <select name="beast" id="select-beast" class="form-control custom-select">
                                    <option value="0">--Select--</option>
                                     <option value="2">US</option>
                                    <option value="3">UK</option>
                                     
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Human</label>
                                <select name="beast" id="select-beast1" class="form-control custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Western wear</option>
                                    <option value="2">Foot wear</option>
                                    <option value="3">Top wear</option>
                                    <option value="4">Bootom wear</option>
                                    <option value="5">Beuty Groming</option>
                                    <option value="6">Accessories</option>
                                    <option value="7">jewellery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Baby & Kids</label>
                                <select name="beast" id="select-beast2" class="form-control custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Boys clothing</option>
                                    <option value="2">girls Clothing</option>
                                    <option value="3">Toys</option>
                                    <option value="4">Baby Care</option>
                                    <option value="5">Kids footwear</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Electronics</label>
                                <select name="beast" id="select-beast3" class="form-control custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Mobiles</option>
                                    <option value="2">Laptops</option>
                                    <option value="3">Gaming & Accessories</option>
                                    <option value="4">Health care Appliances</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label">Sport,Books & More </label>
                                <select name="beast" id="select-beast4" class="form-control custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Stationery</option>
                                    <option value="2">Books</option>
                                    <option value="3">Gaming</option>
                                    <option value="4">Music</option>
                                    <option value="5">Exercise & fitness</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-group-item">
                            <header class="card-header">
                                <h2 class="card-title">Date </h2>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                <form>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            upcoming
                                        </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            This month
                                        </span>
                                    </label>  <!-- form-check.// -->
                                    <label class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            Today
                                        </span>
                                    </label>  <!-- form-check.// -->
                                </form>
                                </div> <!-- card-body.// -->
                            </div>
                        </div> <!-- card-group-item.// -->
                    </div>
                    <div class="card">
                        <div class="card-group-item">
                            <header class="card-header">
                                <h2 class="card-title">Cost Range </h2>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <label class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                        <span class="form-check-label">
                                            Free
                                        </span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                        <span class="form-check-label">
                                            $100 less
                                        </span>
                                    </label>
                                    <label class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadio" value="">
                                        <span class="form-check-label">
                                            $100 more
                                        </span>
                                    </label>
                                </div> <!-- card-body.// -->
                            </div>
                        </div> <!-- card-group-item.// -->
                    </div>
                    <a href="#" class="btn btn-primary btn-block mb-3 ">Search</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="input-group mb-5">
                <input type="text" class="form-control br-tl-7 br-bl-7" placeholder="">
                <div class="input-group-append ">
                    <button type="button" class="btn btn-primary br-tr-7 br-br-7">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="row">
            @foreach($data as $row)

                <div class="col-lg-6 col-xl-4 col-md-12">
                    <div class="card item-card">
                        <div class="product-grid6  card-body">
                            <div class="product-image6">
                                <a href="#">
                                    <img class="img-fluid" src="{{ str_replace("'", "", $row->img) }}">
                                </a>
                            </div>
                            <div class="product-content text-center">
                                <h4 class="title"><a href="#">{{str_replace("'", "", $row->name)}}</a></h4>
                                @if(str_replace("'", "", $row->price) == '')
                                <div class="price">Free</div>
                                @else
                                <div class="price">$ {{str_replace("'", "", $row->price)}}</div>
                                @endif
                               
                            </div>

                            

                            <ul class="icons">
                                <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>

                                <li><a href="" data-tip="{{str_replace("'", "", $row->address)}}"><i class="fa fa-search"></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                <!-- <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>  

            @endforeach                
            </div>
            <div class="mb-3 ">
                <div class="float-right">
                    <ul class="pagination ">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    </div>

@endsection