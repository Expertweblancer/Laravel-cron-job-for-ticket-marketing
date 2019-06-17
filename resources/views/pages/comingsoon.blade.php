@extends('layouts.app')

@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Coming soon starts-->
<section id="coming-soon">
  <div class="container-fluid white">
    <div class="row full-height-vh">
      <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="card card-coming-soon box-shadow-0 border-0">
          <div class="card-header text-center">
            <h4 class="card-title text-dark">
              WE ARE LAUNCHING SOON.
            </h4>
          </div>
          <div class="card-content text-center">
            <div class="row">
              <div class="col-sm-12 text-center">
                <img alt="avtar" class="img-fluid img-cs mb-2" src="app-assets/img/gallery/coming-soon.png" width="200">
              </div>
            </div>
            <div id="clockFlat" class="getting-started pt-1 mt-2">
              <div class="px-3 py-3 mr-3 mb-3 d-inline-block"> <span>57</span> <br>
                <p class="lead mt-2 mb-0 text-dark"> Days </p>
              </div>
              <div class="px-3 py-3 mr-3 mb-3 d-inline-block"> <span>05</span> <br>
                <p class="lead mt-2 mb-0 text-dark"> Hours </p>
              </div>
              <div class="px-3 py-3 mr-3 mb-3 d-inline-block"> <span>11</span> <br>
                <p class="lead mt-2 mb-0 text-dark"> Minutes </p>
              </div>
              <div class="px-2 py-3 mr-3 mb-3 d-inline-block"> <span>12</span> <br>
                <p class="lead mt-2 mb-0 text-dark"> Seconds </p>
              </div>
            </div>
            <div class="cs-text-divider">
              <hr class="float-left"> <span class="text-dark">Subscribe</span>
              <hr class="float-right">
            </div>
            <p class="mt-3 text-dark cs-text">
              If you would like to be notified when our app is live, Please subscribe to our mailing list.
            </p>
            <div class="row mx-auto">
              <div class="col-sm-12 mx-auto">
                <input type="text" class="form-control mt-3" placeholder="Email" />
                <button class="btn btn-lg btn-primary mt-2">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Coming soon ends-->

          </div>
        </div>

@endsection