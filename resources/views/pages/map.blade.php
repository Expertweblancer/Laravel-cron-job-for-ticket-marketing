@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Maps</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Maps</li>
        </ol>
    </div>
    <div class="row">
        
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Custom Map</h3>
                </div>
                <div class="card-body">
              
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width:100%; height:75vh" allowfullscreen></iframe>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection