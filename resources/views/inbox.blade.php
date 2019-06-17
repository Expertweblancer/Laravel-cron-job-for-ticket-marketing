@extends('layouts.app')

@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><div class="email-application">
            <div class="content-overlay"></div>
            <div class="email-app-sidebar float-left d-none d-xl-block">
                <div class="email-app-sidebar-content">
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose text-center mb-0">
                            <button type="button" class="btn btn-raised btn-danger btn-block my-2">
                                <i class="ft-mail"></i> Compose</button>
                        </div>
                        <h6 class="text-muted text-bold-500 mt-2 mb-1">Messages</h6>
                        <div class="list-group list-group-messages">
                            <a class="list-group-item active border-0">
                                <i class="ft-inbox mr-1"></i> Inbox
                                <span class="badge badge-dark badge-pill float-right">8</span>
                            </a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="fa fa-paper-plane-o mr-1"></i> Sent</a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-file mr-1"></i> Draft</a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-star mr-1"></i> Starred
                                <span class="badge badge-danger badge-pill float-right">3</span>
                            </a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-trash-2 mr-1"></i> Trash</a>
                        </div>
                        <h6 class="text-muted text-bold-500 mt-2 mb-1">Labels</h6>
                        <div class="list-group list-group-messages border-0">
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-circle mr-1 warning"></i> Work
                                <span class="badge badge-warning badge-pill float-right">5</span>
                            </a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-circle mr-1 danger"></i> Family</a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-circle mr-1 primary"></i> Friends</a>
                            <a class="list-group-item list-group-item-action border-0">
                                <i class="ft-circle mr-1 success"></i> Private
                                <span class="badge badge-success badge-pill float-right">3</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="email-app-content row">
                <div class="email-search-box w-100 bg-white p-2">
                    <div class="media">
                        <span class="email-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-xl-none"></span>
                        <div class="media-body">
                            <input type="text" class="form-control round" placeholder="search for emails">
                        </div>
                    </div>
                </div>
                <div class="email-app-content-area w-100">
                    <div class="email-app-list-mails p-0">
                        <div class="email-app-list">
                            <div id="users-list">
                                <div class="list-group">
                                    <div class="users-list-padding">
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">T</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading text-bold-400">Tonny Deep
                                                        <span class="float-right">
                                                            <span class="font-small-2 primary">4:14 AM</span>
                                                        </span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate text-bold-500">PixInvent, I
                                                        fount you...</p>
                                                    <p class="list-group-item-text">I would be good.
                                                        <span class="float-right primary">
                                                            <span class="badge badge-danger mr-1">Family</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-danger">L</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading text-bold-400">Louis Welch
                                                        <span class="float-right">
                                                            <i class="fa-paperclip fa"></i>
                                                            <span class="font-small-2 primary">2:15 AM</span>
                                                        </span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate text-bold-500">Thanks, Let's do
                                                        it.</p>
                                                    <p class="list-group-item-text">Can we connect today...
                                                        <span class="float-right primary">
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">E</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading text-bold-400">Envato Market
                                                        <span class="float-right">
                                                            <span class="font-small-2 primary">11:18 PM</span>
                                                        </span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate text-bold-500">You have new
                                                        comment...</p>
                                                    <p class="list-group-item-text">Hi Pixinvent...
                                                        <span class="float-right primary">
                                                            <span class="badge badge-warning mr-1">Work</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a
                                            class="list-group-item list-group-item-action bg-blue-grey bg-lighten-5 border-right-primary border-right-2">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <img class="media-object rounded-circle"
                                                        src="app-assets/img/portrait/small/avatar-s-7.png"
                                                        alt="Generic placeholder image">
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Wayne Burton
                                                        <span class="font-small-2 float-right">Today</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Project ABC Status...</p>
                                                    <p class="list-group-item-text">Andy, Lte's...
                                                        <span class="float-right primary">
                                                            <span class="badge badge-success mr-1">Private</span>
                                                            <i class="font-medium-1 ft-star warning"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <img class="media-object rounded-circle"
                                                        src="app-assets/img/portrait/small/avatar-s-5.png"
                                                        alt="Generic placeholder image">
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Sarah Montgomery
                                                        <span class="font-small-2 float-right">Yesterday</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Your New UI.</p>
                                                    <p class="list-group-item-text text-truncate">Everything looks good.</p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-success">H</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Heather Howell
                                                        <span class="float-right">
                                                            <i class="fa-paperclip fa"></i>
                                                            <span class="font-small-2">15 July</span>
                                                        </span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Thanks, Let's do it.</p>
                                                    <p class="list-group-item-text">Can we connect today...
                                                        <span class="float-right primary">
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <img class="media-object rounded-circle"
                                                        src="app-assets/img/portrait/small/avatar-s-8.png"
                                                        alt="Generic placeholder image">
                                                    <i></i>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Kelly Reyes
                                                        <span class="font-small-2 float-right">12 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">I paid it, Thanks.</p>
                                                    <p class="list-group-item-text">Check once...
                                                        <span class="float-right primary">
                                                            <span class="badge badge-warning mr-1">Work</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">V</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Vincent Nelson
                                                        <span class="font-small-2 float-right">11 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">
                                                        <i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                                    <p class="list-group-item-text">Party tonight ?
                                                        <span class="float-right primary">
                                                            <span class="badge badge-primary mr-1">Friends</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">E</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Elizabeth Elliott
                                                        <span class="font-small-2 float-right">8 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Okay, I will call you.</p>
                                                    <p class="list-group-item-text">Here they are work.
                                                        <span class="float-right primary">
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <img class="media-object rounded-circle"
                                                        src="app-assets/img/portrait/small/avatar-s-6.png"
                                                        alt="Generic placeholder image">
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Sarah Montgomery
                                                        <span class="font-small-2 float-right">Yesterday</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Your New UI.</p>
                                                    <p class="list-group-item-text text-truncate">Everything looks good.</p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-success">H</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Heather Howell
                                                        <span class="float-right">
                                                            <i class="fa-paperclip fa"></i>
                                                            <span class="font-small-2">15 July</span>
                                                        </span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Thanks, Let's do it.</p>
                                                    <p class="list-group-item-text">Can we connect today...
                                                        <span class="float-right primary">
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <img class="media-object rounded-circle"
                                                        src="app-assets/img/portrait/small/avatar-s-10.png"
                                                        alt="Generic placeholder image">
                                                    <i></i>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Kelly Reyes
                                                        <span class="font-small-2 float-right">12 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">I paid it, Thanks.</p>
                                                    <p class="list-group-item-text">Check once...
                                                        <span class="float-right primary">
                                                            <span class="badge badge-warning mr-1">Work</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">V</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Vincent Nelson
                                                        <span class="font-small-2 float-right">11 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">
                                                        <i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                                    <p class="list-group-item-text">Party tonight ?
                                                        <span class="float-right primary">
                                                            <span class="badge badge-primary mr-1">Friends</span>
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                        <a class="list-group-item list-group-item-action border-0">
                                            <span class="media">
                                                <span class="avatar avatar-md mr-2">
                                                    <span
                                                        class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">E</span>
                                                </span>
                                                <div class="media-body">
                                                    <h6 class="list-group-item-heading">Elizabeth Elliott
                                                        <span class="font-small-2 float-right">8 July</span>
                                                    </h6>
                                                    <p class="list-group-item-text text-truncate">Okay, I will call you.</p>
                                                    <p class="list-group-item-text">Here they are work.
                                                        <span class="float-right primary">
                                                            <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email-app-mail-content">
                        <div class="email-app-mail-content-detail">
                            <div class="email-app-options card-body">
                                <div class="row d-md-none">
                                    <button class="btn btn-raised btn-primary ml-2 back-to-inbox">
                                        <i class="fa fa-angle-left"></i> Back to inbox</button>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Replay">
                                                <i class="fa fa-reply"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Replay All">
                                                <i class="fa fa-reply-all"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Report SPAM">
                                                <i class="ft-alert-octagon"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Delete">
                                                <i class="ft-trash-2"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12 text-right">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Previous">
                                                <i class="fa fa-angle-left"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                data-placement="top" data-original-title="Next">
                                                <i class="fa fa-angle-right"></i>
                                            </button>
                                        </div>
                                        <div class="btn-group ml-1">
                                            <div placement="bottom-right" class="d-inline-block">
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">More</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Mark as unread</a>
                                                    <a class="dropdown-item" href="#">Mark as unimportant</a>
                                                    <a class="dropdown-item" href="#">Add star</a>
                                                    <a class="dropdown-item" href="#">Add to task</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Filter mail</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="email-app-title card-body">
                                <h3 class="list-group-item-heading">Project ABC Status Report</h3>
                                <p class="list-group-item-text">
                                    <span class="primary">
                                        <span class="badge badge-primary">Previous</span>
                                        <i class="float-right font-medium-3 ft-star warning"></i>
                                    </span>
                                </p>
                            </div>


                            <div class="media-list">
                                <div id="headingCollapse1" class="card-header p-0">
                                    <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1"
                                        class="collapsed email-app-sender list-group-item list-group-item-action border-0 bg-blue-grey bg-lighten-5">

                                        <span class="media">
                                            <span class="avatar avatar-md mr-2">
                                                <img class="media-object rounded-circle width-50"
                                                    src="app-assets/img/portrait/small/avatar-s-1.png"
                                                    alt="Generic placeholder image">
                                            </span>
                                            <div class="media-body">
                                                <h6 class="list-group-item-heading">John Doe</h6>
                                                <p class="list-group-item-text">Can you please provide me ABC Status Report.
                                                    <span class="float-right text muted">12 July</span>
                                                </p>
                                            </div>
                                        </span>

                                    </a>
                                </div>

                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1"
                                    class="card-collapse collapse" aria-expanded="true">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>Hi Wayne,</p>
                                            <p>Can you please provide me ABC Status Report.</p>
                                            <p>Gmail Material Design Concept. Please check the full project on Behance. Hope
                                                that will be
                                                fine for you.</p>
                                            <p>Thanks for your consideration !</p>
                                            <p>Regards,
                                                <br />John</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="headingCollapse2" class="card-header p-0">
                                    <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2"
                                        class="email-app-sender list-group-item list-group-item-action border-0">

                                        <div class="media">
                                            <span class="avatar avatar-md mr-2">
                                                <img class="media-object rounded-circle width-50"
                                                    src="app-assets/img/portrait/small/avatar-s-7.png"
                                                    alt="Generic placeholder image">
                                            </span>
                                            <div class="media-body">
                                                <h6 class="list-group-item-heading">Wayne Burton</h6>
                                                <p class="list-group-item-text">to me
                                                    <span>Today</span>
                                                    <span class="float-right">
                                                        <i class="fa fa-reply mr-1"></i>
                                                        <i class="fa fa-arrow-right mr-1"></i>
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse"
                                    aria-expanded="false">
                                    <div class="card-content">
                                        <div class="email-app-text card-body">
                                            <div class="email-app-message">
                                                <p>Hi John,</p>
                                                <p>Thanks for your feedback ! Here's a new layout for a new Apex Admin theme.
                                                </p>
                                                <p>We will start the new application development soon once this will be
                                                    completed, I will provide
                                                    you more details after this Saturday. Hope that will be fine for you.</p>
                                                <p>Hope your like it, or feel free to comment, feedback or rebound !</p>
                                                <p>Cheers~</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-app-text-action card-content">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </div>
        </div>
@endsection
