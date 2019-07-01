@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Email Inbox</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email Inbox</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-3">
            <div class="card">
                <div class="list-group list-group-transparent mb-0 mail-inbox">
                    <div class="mt-4 mb-4 ml-4 mr-4 text-center">
                        <a href="email.html" class="btn btn-secondary btn-lg btn-block">Compose</a>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                        <span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">14</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-star"></i></span>Starred
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-file"></i></span>Drafts
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title ">Labels</h5>
                </div>
                <div class="list-group list-group-transparent">
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fa fa-briefcase"></i></span>Works
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fa fa-folder-open"></i></span>Job
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fa fa-user"></i></span>Client
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                        <span class="icon mr-3"><i class="fa fa-newspaper-o"></i></span>News
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="online-status d-flex justify-content-between align-items-center mt-4 mb-2 ml-2">
                    <h4 class="chat ml-3">Chats</h4>
                    <div class="status offline online"> <h6 class="online text-right">online</h6></div>
                </div>
                <ul class="mail-chats">
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="assets\images\faces\male\41.jpeg" alt=""></span>
                            <div class="user mt-1">
                                <p class="u-name">David</p>
                                <p class="u-designation">Python Developer</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="assets\images\faces\female\1.jpeg" alt=""></span>
                            <div class="user mt-1">
                                <p class="u-name">Stella Johnson</p>
                                <p class="u-designation">SEO Expert</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="assets\images\faces\male\35.jpeg" alt=""></span>
                            <div class="user">
                                <p class="u-name mt-1">Marina Michel</p>
                                <p class="u-designation">Business Development</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="assets\images\faces\female\2.jpeg" alt=""></span>
                            <div class="user">
                                <p class="u-name mt-1">Edward Fletcher</p>
                                <p class="u-designation">UI/UX Designer</p>
                            </div>
                        </a>
                    </li>

                    <!-- list person -->
                </ul>
                <!-- CHAT -->
            </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xl-9">
            <div class="card">
                <div class="card-body p-6">
                    <div class="inbox-body">
                        <div class="mail-option">
                            <div class="chk-all">
                                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> None</a></li>
                                        <li><a href="#"> Read</a></li>
                                        <li><a href="#"> Unread</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 234</span></li>

                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-inbox table-hover text-nowrap">
                                <tbody>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message  dont-show">PHPClass</td>
                                        <td class="view-message ">Added a new class: Login Class Fast Site</td>
                                        <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message  text-right">9:27 AM</td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Google Webmaster </td>
                                        <td class="view-message">Improve the search presence of WebSite</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 15</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">JW Player</td>
                                        <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 15</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Tim Reid, S P N</td>
                                        <td class="view-message">Boost Your Website Traffic</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">April 01</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                                        <td class="view-message">Stop wasting your visitors </td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">May 23</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">WOW Slider </td>
                                        <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">March 14</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">LinkedIn Pulse</td>
                                        <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">Feb 19</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                                        <td class="view-message view-message">Welcome to the Drupal Community</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 04</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Facebook</td>
                                        <td class="view-message view-message">Somebody requested a new password </td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">June 13</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                                        <td class="view-message view-message">Password successfully changed</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 24</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Google+</td>
                                        <td class="view-message">alireza, do you know</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 09</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="dont-show">Zoosk </td>
                                        <td class="view-message">7 new singles we think you'll like</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">May 14</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">LinkedIn </td>
                                        <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">February 25</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="dont-show">Facebook</td>
                                        <td class="view-message view-message">Your account was recently logged into</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">March 14</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Twitter</td>
                                        <td class="view-message">Your Twitter password has been changed</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">April 07</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                        <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">July 14</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">AddMe.com</td>
                                        <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">August 10</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Terri Rexer, S P N</td>
                                        <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">April 14</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Bertina </td>
                                        <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">June 16</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                        <td class="view-message dont-show">Laura Gaffin, S P N </td>
                                        <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                                        <td class="view-message inbox-small-cells"></td>
                                        <td class="view-message text-right">August 10</td>
                                    </tr>
                                    <tr>
                                        <td class="inbox-small-cells">
                                            <input type="checkbox" class="mail-checkbox">
                                        </td>
                                        <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                        <td class="view-message dont-show">Facebook</td>
                                        <td class="view-message view-message">Alireza Zare Login faild</td>
                                        <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                        <td class="view-message text-right">feb 14</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div>
                <ul class="pagination float-right mb-3">
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
@endsection