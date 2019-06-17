@extends('layouts.app')

@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><div class="chat-application">
  <div class="content-overlay"></div>
  <div class="chat-sidebar float-left d-none d-sm-none d-md-block d-lg-block">
    <div class="chat-sidebar-content">
      <div class="chat-fixed-search p-2">
        <form>
          <div class="position-relative has-icon-left">
            <input class="form-control" id="timesheetinput1" name="employeename" type="text">
            <div class="form-control-position">
              <i class="ft-user"></i>
            </div>
          </div>
        </form>
      </div>
      <div id="users-list" class="list-group position-relative">
        <div class="users-list-padding">
          <a class="list-group-item bg-blue-grey bg-lighten-5 border-right-primary border-right-2">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Elizabeth Elliott
                  <span class="font-small-3 float-right primary">4:14 AM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Okay
                  <span class="float-right primary">
                    <i class="font-medium-1 icon-pin blue-grey lighten-3"></i>
                  </span>
                </p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-busy">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-7.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kristopher Candy
                  <span class="font-small-3 float-right primary">9:04 PM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Thank you
                  <span class="float-right 
                        primary">
                    <span class="badge badge-pill badge-primary">12</span>
                  </span>
                </p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-away">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-8.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Sarah Woods
                  <span class="font-small-3 float-right primary">2:14 AM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Hello krish!
                  <span class="float-right primary">
                    <i class="font-medium-1 icon-volume-off blue-grey lighten-3 mr-1"></i>
                    <span class="badge badge-pill badge-primary">3</span>
                  </span>
                </p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-away">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-5.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Bruce Reid
                  <span class="font-small-3 float-right primary">Yesterday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Will connect you</p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Heather Howell
                  <span class="font-small-3 float-right primary">Friday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Thank you
                  <span class="float-right primary">
                    <span class="badge badge-pill badge-primary">4</span>
                  </span>
                </p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-busy">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-4.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kelly Reyes
                  <span class="font-small-3 float-right primary">Thrusday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> I love you </p>
              </div>
            </span>
          </a>
          <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-14.png"
                  alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Vincent Nelson</h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Who you are?</p>
              </div>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="chat-name p-2 bg-white">
    <div class="media">
      <span class="chat-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-none d-block d-sm-block d-md-none"></span>
      <div class="media-body">
        <img src="app-assets/img/portrait/small/avatar-s-3.png" width="37" class="rounded-circle mr-1" alt="avatar" />
        <span>Elizabeth Elliott</span>
        <i class="ft-more-vertical float-right mt-1 dropdown-toggle" id="chatOptions" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"></i>
        <div class="dropdown-menu" aria-labelledby="chatOptions">
          <a href="#" class="dropdown-item">View Profile</a>
          <a href="#" class="dropdown-item">Mute Notification</a>
          <a href="#" class="dropdown-item">Clear Chat</a>
          <a href="#" class="dropdown-item">Add Shortcut</a>
        </div>
      </div>
    </div>
  </div>
  <section class="chat-app-window">
    <div class="badge badge-dark mb-1">Chat History</div>
    <div class="chats">
      <div class="chats">
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>How can we help? We're here for you!</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>Hey John, I am looking for the best admin template.</p>
              <p>Could you please help me to find it out?</p>
            </div>
            <div class="chat-content">
              <p>It should be Bootstrap 4 compatible.</p>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>Absolutely!</p>
            </div>
            <div class="chat-content">
              <p>Apex admin is the responsive bootstrap 4 admin template.</p>
            </div>
          </div>
        </div>
        <p class="time">1 hours ago</p>
        <div class="chat chat-left">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>Looks clean and fresh UI.</p>
            </div>
            <div class="chat-content">
              <p>It's perfect for my next project.</p>
            </div>
            <div class="chat-content">
              <p>How can I purchase it?</p>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>Thanks, from ThemeForest.</p>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>I will purchase it for sure.</p>
            </div>
            <div class="chat-content">
              <p>Thanks.</p>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-avatar">
            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
              <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
            </a>
          </div>
          <div class="chat-body">
            <div class="chat-content">
              <p>Great, Feel free to get in touch on</p>
            </div>
            <div class="chat-content">
              <p>https://pixinvent.ticksy.com/</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="chat-app-form bg-blue-grey bg-lighten-5">
    <form class="chat-app-input row mt-2">
      <fieldset class="form-group position-relative has-icon-left col-lg-10 col-8 m-0 px-3">
        <div class="form-control-position">
          <i class="icon-emoticon-smile"></i>
        </div>
        <input type="text" class="form-control" id="iconLeft4" placeholder="Type your message">
        <div class="form-control-position control-position-right">
          <i class="ft-image mr-1"></i>
        </div>
      </fieldset>
      <fieldset class="form-group position-relative has-icon-left col-lg-2 col-4 m-0">
        <button type="button" class="btn btn-raised btn-primary px-4">
          <i class="fa fa-paper-plane-o d-block d-xl-inline-block d-lg-none p-0"></i>
          <span class="d-none d-lg-inline-block">Send</span>
        </button>
      </fieldset>
    </form>
  </section>
</div>

          </div>
        </div>  

@endsection