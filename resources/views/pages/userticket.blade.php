@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h1 class="page-title">Users</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">UI Design</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
        </ol>
    </div>
    <div class="row row-cards">
        <div class="col-lg-12 col-xl-3">
            <div class="card bg-primary ">
                <div class="panel-heading text-center">
                    <h3 class=" text-primary mt-3 mb-2">Team Leader</h3>
                    <p class="text-dark">UX, UI Designer</p>
                </div>
                <div class=" userlist">
                    <div class="card-body text-center">
                        <div class="userprofile ">
                            <div class="userpic"> <img src="assets\images\faces\female\16.jpeg" alt="" class="userpicimg"> </div>
                            <h3 class="username">Pearle Leverett</h3>
                                <p>New York, USA</p>
                        </div>
                        <strong class="text-white">Information</strong><br>
                        <p class="text-white-transparent mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ornare lacus adipiscing, posuere.<br>
                            <br>
                        <p class="mb-0"><span class="text-white">Email : </span><a href="" class="text-white-transparent">info@pearle.in</a></p>
                        <p class="mb-0"><span class="text-white">Phone no :</span><span class="text-white-transparent"> +9100000000</span></p>
                    </div>
                </div>
                <div class="panel-footer br-br-7 br-bl-7"> 
                    <div class="text-center ">
                        <div class="flex-c-m ">
                            <a href="#" class="login100-social-item bg1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="login100-social-item bg2">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="login100-social-item bg3">
                                <i class="fa fa-google"></i>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Team</h3>
                </div>
                <div class="card-body o-auto" style="height: 15rem">
                    <ul class="list-unstyled list-separated">
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/12.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Anna White</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">annawhite@info.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround  avatar-md d-block" style="background-image: url(assets/images/faces/female/21.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Karen	Miller</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">karen@example.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround  avatar-md d-block" style="background-image: url(assets/images/faces/female/29.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Nicola Powell</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">lapowell@info.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround  avatar-md d-block" style="background-image: url(assets/images/faces/female/2.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Nathan Payne</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">nathan765@info.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround  avatar-md d-block" style="background-image: url(assets/images/faces/male/34.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Jacob	Slater</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">jacob567@info.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-separated-item">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="avatar brround  avatar-md d-block" style="background-image: url(assets/images/faces/female/11.jpeg)"></span>
                                </div>
                                <div class="col">
                                    <div>
                                        <a href="javascript:void(0)" class="text-inherit">Victor Blake</a>
                                    </div>
                                    <small class="d-block item-except text-sm text-muted h-1x">victor_1@info.com</small>
                                </div>
                                <div class="col-auto">
                                    <div class="item-action dropdown">
                                        <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="col-lg-12 col-xl-9">
            <div class="input-group mb-5">
                <input type="text" class="form-control br-tl-7 br-bl-7" placeholder="">
                <div class="input-group-append ">
                    <button type="button" class="btn btn-primary br-tr-7 br-br-7">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="card"> 
                <div class="card-header">
                    <h2 class="card-title">1 - 30 of 546 users</h2>
                    <div class="page-options d-flex float-right">
                    <select class="form-control custom-select w-auto">
                        <option value="asc">Latest</option>
                        <option value="desc">Oldest</option>
                    </select>
                </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                        <tbody>
                        <tr>
                            <th class="w-1"></th>
                            <th class="w-1"></th>
                            <th>Name</th>
                            <th>Purchased Date</th>
                            <th>Amount</th>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/25.jpeg)"></span></td>
                            <td>Jane Pearson</td>
                            <td>February 10, 2018</td>
                            <td>$1616.70</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/5.jpeg)"></span></td>
                            <td>Jason Porter</td>
                            <td>November 14, 2017</td>
                            <td>$1397.56</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/28.jpeg)"></span></td>
                            <td>Teresa Wood</td>
                            <td>February 02, 2018</td>
                            <td>$675.89</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/16.jpeg)"></span></td>
                            <td>Mary Butler</td>
                            <td>November 12, 2017</td>
                            <td>$600.25</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/27.jpeg)"></span></td>
                            <td>Janice Lane</td>
                            <td>December 07, 2017</td>
                            <td>$1142.12</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/26.jpeg)"></span></td>
                            <td>Anthony Miller</td>
                            <td>December 17, 2017</td>
                            <td>$1476.28</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/9.jpeg)"></span></td>
                            <td>Denise Elliott</td>
                            <td>March 01, 2018</td>
                            <td>$867.54</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/16.jpeg)"></span></td>
                            <td>Rose Cook</td>
                            <td>February 10, 2018</td>
                            <td>$656.43</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/17.jpeg)"></span></td>
                            <td>Terry Tucker</td>
                            <td>February 06, 2018</td>
                            <td>$1556.50</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/6.jpeg)"></span></td>
                            <td>Grace Knight</td>
                            <td>August 26, 2018</td>
                            <td>$768.76</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/26.jpeg)"></span></td>
                            <td>Elizabeth Martin</td>
                            <td>October 16, 2017</td>
                            <td>$787.89</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/17.jpeg)"></span></td>
                            <td>Michelle Schultz</td>
                            <td>March 19, 2018</td>
                            <td>$1123.95</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/21.jpeg)"></span></td>
                            <td>Crystal Austin</td>
                            <td>February 01, 2018</td>
                            <td>$846.57</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/32.jpeg)"></span></td>
                            <td>Douglas Ray</td>
                            <td>July 11, 2018</td>
                            <td>$1548.11</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/12.jpeg)"></span></td>
                            <td>Teresa Reyes</td>
                            <td>May 28, 2018</td>
                            <td>$1323.14</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/4.jpeg)"></span></td>
                            <td>Emma Wade</td>
                            <td>November 03, 2017</td>
                            <td>$1398.82</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/27.jpeg)"></span></td>
                            <td>Carol Henderson</td>
                            <td>March 02, 2018</td>
                            <td>$737.54</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/20.jpeg)"></span></td>
                            <td>Christopher Harvey</td>
                            <td>December 09, 2017</td>
                            <td>$1699.24</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/female/5.jpeg)"></span></td>
                            <td>Deborah Alvarado</td>
                            <td>April 02, 2018</td>
                            <td>$1936.02</td>
                        </tr>
                        <tr>
                            <th>
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                    <span class="custom-control-label"></span>
                                </label>
                            </th>
                            <td><span class="avatar brround avatar-md d-block" style="background-image: url(assets/images/faces/male/10.jpeg)"></span></td>
                            <td>Gregory Hunt</td>
                            <td>June 30, 2018</td>
                            <td>$689.86</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mb-5">
                <ul class="pagination float-right">
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