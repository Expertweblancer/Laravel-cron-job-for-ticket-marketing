@extends('layouts.app')

@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><div class="row">
  <div class="col-sm-12">
    <div class="content-header">Ticket Board</div>
    <p class="content-sub-header"></p>
  </div>
</div>
<!-- Taskboard Starts -->
<section id="taskboard">

  <div class="row">
    <div class="col-md-3 col-12">
      <h4 class="ml-2 mt-2 text-bold-500">
        <i class="ft-list mr-1"></i> To Dos</h4>
      <div class='dragdrop-container' id='drag-todos'>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 primary float-left">Responsive</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.'</p>
            <img src="app-assets/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
            <span class="primary">May 17</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 primary float-left">QA Testing</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
            <span class="primary">June 17</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 primary float-left">Budget</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-3.png" class="rounded-circle width-50 mr-2">
            <span class="primary">May 27</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-12">
      <h4 class="ml-2 mt-2 text-bold-500">
        <i class="ft-trending-up mr-1"></i> Sales Ticket</h4>
      <div class='dragdrop-container' id='drag-in-progress'>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 info float-left">checklist</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="rounded-circle width-50 mr-2">
            <span class="info">Apr 11</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 info float-left">Navigation</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="rounded-circle width-50 mr-2">
            <span class="info">Apr 11</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 info float-left">Bootstrap 4</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="rounded-circle width-50 mr-2">
            <span class="info">Apr 11</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-12">
      <h4 class="ml-2 mt-2 text-bold-500">
        <i class="ft-thumbs-up mr-1"></i>Resales Ticket</h4>
      <div class='dragdrop-container' id='drag-completed'>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 success float-left">Angular 5</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="rounded-circle width-50 mr-2">
            <span class="success">Aug 22</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 success float-left">Fields</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="rounded-circle width-50 mr-2">
            <span class="success">Aug 22</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 success float-left">Task board</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="rounded-circle width-50 mr-2">
            <span class="success">Aug 22</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-12">
      <h4 class="ml-2 mt-2 text-bold-500">
        <i class="ft-alert-octagon mr-1"></i>Closed Ticket</h4>
      <div class='dragdrop-container' id='drag-on-hold'>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 warning float-left">Assessment</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-5.png" class="rounded-circle width-50 mr-2">
            <span class="warning">Jun 19</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 warning float-left">Schedule</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-5.png" class="rounded-circle width-50 mr-2">
            <span class="warning">Jun 19</span>
          </div>
        </div>
        <div class="card">
          <div class="card-body pt-3">
            <div class="clearfix">
              <h5 class="text-bold-500 warning float-left">Unit tests</h5>
              <div class="actions float-right">
                <i class="ft-edit mr-1 info"></i>
                <i class="ft-trash-2 danger"></i>
              </div>
            </div>
            <p>Etiam porta sem malesuada magna mollis euismod.</p>
            <img src="app-assets/img/portrait/small/avatar-s-5.png" class="rounded-circle width-50 mr-2">
            <span class="warning">Jun 19</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="taskboard-app-form bg-blue-grey bg-lighten-5">
    <div class="card">
      <div class="card-body pt-3">
        <h5 class="text-bold-500">Create new Task</h5>
        <form class="taskboard-app-input row">
          <fieldset class="position-relative has-icon-left col-md-4 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoTitle" placeholder="Title">
            <div class="form-control-position control-position-right">
              <i class="ft-image gallery-icon-title"></i>
            </div>
          </fieldset>
          <fieldset class="position-relative has-icon-left col-md-6 col-12 mb-1">
            <div class="form-control-position">
              <i class="icon-emoticon-smile"></i>
            </div>
            <input type="text" class="form-control" id="todoMessage" placeholder="Message">
            <div class="form-control-position control-position-right">
              <i class="ft-image gallery-icon-msg"></i>
            </div>
          </fieldset>

          <fieldset class="position-relative has-icon-left col-md-2 col-12 mb-1">
            <button type="button" class="btn btn-raised btn-primary px-4 mb-0">
              <i class="ft ft-plus-circle d-lg-none d-xl-inline-block"></i>
              <span class="d-lg-inline-block d-none">Create</span>
            </button>
          </fieldset>
        </form>
      </div>
    </div>
  </section>

</section>
<!-- Taskboard Ends -->
          </div>
        </div>

@endsection