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
            <div class="circle-icon bg-primary text-center align-self-center shadow-primary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-user fs-30  text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">17,533</h1>
              <h5 class="font-weight-normal mb-0">Followers</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-secondary align-items-center text-center shadow-secondary"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-heart fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">10,257</h1>
              <h5 class="font-weight-normal mb-0">Likes</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute  circle-icon bg-info align-items-center text-center shadow-info"><img src="assets\images\circle.svg" class="card-img-absolute"><i class="lnr lnr-bubble fs-30 text-white mt-4"></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">87</h1>
              <h5 class="font-weight-normal mb-0">Comments</h5>
            </div>
          </div>
        </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-6 col-xl-3 col-md-6">
      <div class="card card-img-holder text-default">
        <div class="row">
          <div class="col-4">
            <div class="card-img-absolute circle-icon bg-success align-items-center text-center shadow-success"><img src="assets\images\circle.svg" class="card-img-absolute"><i class=" lnr lnr-envelope fs-30 text-white mt-4 "></i></div>
          </div>
          <div class="col-8">
            <div class="card-body p-4">
              <h1 class="mb-3">485</h1>
              <h5 class="font-weight-normal mb-0">Posts</h5>
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
          <div class="card-title">All Tasks</div>
        </div>
        <div class="card-body p-4">
          <div class="chats-wrap">
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Sales Report</span>
                <span class="float-right p-1  btn btn-sm text-default">
                <b>95</b>%</span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary-gradient" style="width: 70%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal"> List Completion</span>
                <span class="float-right p-1  btn btn-sm text-default">
                  <b>84</b>%</span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info-gradient" style="width: 60%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Purchase Report</span>
                <span class="float-right p-1  btn btn-sm text-default">
                  <b>43%</b>
                </span>
              </h4>
              <div class="progress progress-md mt-3">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning-gradient" style="width: 47%"></div>
              </div>
            </div>
            <div class="chat-details mb-1 p-3">
              <h4 class="mb-0">
                <span class="h5 font-weight-normal">Revert Messages</span>
                <span class="float-right p-1 btn btn-sm text-default">
                  <b>34%</b>
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
          <h3 class="card-title">Sales Report</h3>
        </div>
        <div class="card-body">
          <div id="morrisBar3" class="chartsh"></div>
          <div class="col pt-3">
            <ul class="legend align-items-center ">
              <li>
                <span class="legend-dots bg-primary"></span>projects sold
              </li>
              <li>
                <span class="legend-dots bg-secondary"></span>projects in pending
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-deck">
    <div class=" col-lg-12 col-xl-4">
      <div class="card">
        <div class="card-header border-bottom">
          <h5 class="card-title">Activities</h5>
        </div>
        <div class="card-body">
          <div class="activity mt-3">
            <img src="assets\images\faces\male\7.jpeg" alt="" class="img-activity cover-image">
            <div class="time-activity">
              <div class="item-activity">
                <p class="mb-0"><b>Dennis Dalpiaz</b> Add a new projects <b> AngularJS Template</b></p>
                <small class="text-muted ">30 mins ago</small>
              </div>
            </div>
            <img src="assets\images\faces\female\4.jpeg" alt="" class="img-activity">
            <div class="time-activity">
              <div class="item-activity">
                <p class="mb-0"><b>Joey Coronel</b> Add a new projects <b>Free HTML Template</b></p>
                <small class="text-muted ">1 days ago</small>
              </div>
            </div>
            <img src="assets\images\faces\male\8.jpeg" alt="" class="img-activity">
            <div class="time-activity">
              <div class="item-activity">
                <p class="mb-0"><b>Norbert Bridwell</b> Add a new projects <b>Free PSD Template</b></p>
                <small class="text-muted ">3 days ago</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" col-lg-12 col-xl-4">
      <div class="card">
        <div class="card-header border-bottom">
          <h5 class="card-title">Sales Summary</h5>
        </div>
        <div class="card-body p-0">
          <div class="clearfix border-bottom p-3 ">
            <div class="col mb-0">
              <div>
                <div class="float-left">
                  <h5><strong>Total Revenue</strong></h5>
                  <h6 class="mb-0">weekly profit</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="float-right">
                <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-primary">$15300</h4>
              </div>
            </div>
          </div>

          <div class="clearfix border-bottom p-3">
            <div class="col">
              <div>
                <div class="float-left">
                  <h5><strong>Total Tax</strong></h5>
                  <h6 class="mb-0">weekly profit</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="float-right">
                <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-success">$1625</h4>
              </div>
            </div>
          </div>

          <div class="clearfix border-bottom p-3">
            <div class="col">
              <div>
                <div class="float-left">
                  <h5><strong>Total Income</strong></h5>
                  <h6 class="mb-0">weekly profit</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="float-right">
                <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-warning">70%</h4>
              </div>
            </div>
          </div>

          <div class="clearfix p-3">
            <div class="col">
              <div>
                <div class="float-left">
                  <h5><strong>Total Loss</strong></h5>
                  <h6 class="mb-0">weekly loss</h6>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="float-right">
                <h4 class="font-weight-semibold label-medium-size mt-4 mb-0 text-secondary">30%</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-center">
          <a href="#"><i class="fa fa-angle-down"></i> View More</a>
        </div>
      </div>
    </div>
    <div class=" col-lg-12 col-xl-4">
      <div class="card">
        <div class="card-header border-bottom">
          <h5 class="card-title">Order Statistics</h5>
        </div>
        <div class="card-body">
          <div class="text-center mt-5">
            <h5><strong></strong></h5>
          </div>
          <div id="morrisBar4" class="chartsh"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-cards row-deck">
    <div class="col-md-12 col-lg-12 col-xl-4">
      <div class="card">
        <div>
          <div class="weather-card one">
            <div class="top">
              <div class="weather-card-wrapper">
                <div class="mynav">
                  <a href="javascript:;"><span class="lnr lnr-chevron-left"></span></a>
                  <a href="javascript:;"><span class="lnr lnr-cog"></span></a>
                </div>
                <h1 class="heading">Clear Night</h1>
                <h3 class="location">Toronto, Canada</h3>
                <p class="temp">
                  <span class="temp-value">30</span>
                  <span class="deg">0</span>
                  <a href="javascript:;"><span class="temp-type">C</span></a>
                </p>
              </div>
            </div>
            <div class="bottom">
              <div class="weather-card-wrapper">
                <ul class="forecast">
                  <a href="javascript:;"><span class="lnr lnr-chevron-up go-up"></span></a>
                  <li class="active">
                    <span class="date">Yesterday</span>
                    <span class="lnr lnr-sun condition">
                      <span class="temp">28<span class="deg">0</span><span class="temp-type">C</span></span>
                    </span>
                  </li>
                  <li>
                    <span class="date">Tomorrow</span>
                    <span class="lnr lnr-cloud condition">
                      <span class="temp">32<span class="deg">0</span><span class="temp-type">C</span></span>
                    </span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-xl-8 col-md-12">
      <div class="card ">
        <div class="card-header">
          <h5 class="card-title">Users Table </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped card-table table-condensed mt-0 table-nowrap border">
              <thead>
                <tr>
                  <th>Username</th>
                  <th>Date registered</th>
                  <th>Role</th>
                  <th>Country</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wilber S. Rusch</td>
                  <td>2014/03/04</td>
                  <td>Editor</td>
                  <td>USA</td>
                  <td><span class="badge badge-primary">Active</span>
                  </td>
                </tr>
                <tr>
                  <td>Joey D. Coronel</td>
                  <td>2013/09/25</td>
                  <td>Staff</td>
                  <td>Canada</td>
                  <td><span class="badge badge-success">Banned</span></td>
                </tr>
                <tr>
                  <td>Micah H. Boice</td>
                  <td>2015/02/13</td>
                  <td>User</td>
                  <td>South Africa</td>
                  <td><span class="badge badge-danger">Inactive</span></td>
                </tr>
                <tr>
                  <td>Deshawn B. Nitta</td>
                  <td>2013/01/02</td>
                  <td>Editor</td>
                  <td>Nether Lands</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>Herschel R. Jade</td>
                  <td>2015/12/23</td>
                  <td>User</td>
                  <td>Germany</td>
                  <td><span class="badge badge-info">Banned</span></td>
                </tr>
                <tr>
                  <td>Sanderson</td>
                  <td>2016/11/21</td>
                  <td>Editor</td>
                  <td>India</td>
                  <td><span class="badge badge-primary">Active</span></td>
                </tr>
                <tr>
                  <td>Wiley Schreck</td>
                  <td>2013/08/17</td>
                  <td>Staff</td>
                  <td>Russia</td>
                  <td><span class="badge badge-success">Inactive</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer text-center">
          <a href="#"><i class="fa fa-angle-down"></i> View More</a>
        </div>
      </div>
    </div>
  </div>
</div>  
 @endsection
