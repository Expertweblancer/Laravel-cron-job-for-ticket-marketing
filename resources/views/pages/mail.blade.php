@extends('layouts.app')
@section('content')
<div class=" content-area">
    <div class="page-header">
        <h4 class="page-title">Email</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Email</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-3 col-md-12 col-sm-12">
            <div class="card">
                <div class="list-group list-group-transparent mb-0 mail-inbox">
                    <div class="mt-4 mb-4 ml-4 mr-4 text-center">
                        <a href="#" class="btn btn-secondary btn-lg btn-block">Compose</a>
                    </div>
                    <a href="emailservices.html" class="list-group-item list-group-item-action d-flex align-items-center active">
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
                <div class="online-status d-flex justify-content-between align-items-center mt-4 mb-2 ml-2">
                    <h5 class="chat ml-3">Chats</h5>
                    <div class="status offline online"> <h6 class="online text-right">online</h6></div>
                </div>
                <ul class="mail-chats">
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="{{ asset('assets\images\faces\male\41.jpeg')}}" alt=""></span>
                            <div class="user">
                                <p class="u-name">David</p>
                                <p class="u-designation">Python Developer</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="{{ asset('assets\images\faces\female\1.jpeg')}}" alt=""></span>
                            <div class="user">
                                <p class="u-name">Stella Johnson</p>
                                <p class="u-designation">SEO Expert</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="{{ asset('assets\images\faces\male\35.jpeg')}}" alt=""></span>
                            <div class="user">
                                <p class="u-name">Marina Michel</p>
                                <p class="u-designation">Business Development</p>
                            </div>
                        </a>
                    </li>
                    <!-- list person -->
                    <li class="chat-persons">
                        <a href="#">
                            <span class="pro-pic"><img src="{{ asset('assets\images\faces\female\2.jpeg')}}" alt=""></span>
                            <div class="user">
                                <p class="u-name">Edward Fletcher</p>
                                <p class="u-designation">UI/UX Designer</p>
                            </div>
                        </a>
                    </li>

                    <!-- list person -->
                </ul>
                <!-- CHAT -->
            </div>
        </div>
        <div class="col-lg-12 col-xl-9 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Compose new message</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <label class="col-sm-2">To</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <label class="col-sm-2">Subject</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="row ">
                                <label class="col-sm-2">Message</label>
                                <div class="col-sm-10">
                                    <textarea rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row message-box-last-content">
                        <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-0 ">
                                        <span>
                                        <button type="button" class="btn btn-icon btn-primary mt-2"><i class="fa fa-paperclip text-white"></i></button>
                                            <button type="button" class="btn btn-icon btn-secondary mt-2"><i class="fa fa-picture-o text-white"></i></button>
                                            <button type="button" class="btn btn-icon btn-info mt-2"><i class="fa fa-link text-white"></i></button>
                                            <button type="button" class="btn btn-icon btn-success mt-2"><i class="fa fa-smile-o text-white"></i></button>
                                            <button type="button" class="btn btn-icon btn-warning mt-2"><i class="fa fa-trash-o text-white"></i></button>
                                            <button type="button" class="btn btn-icon btn-teal mt-2"><i class="fa fa-file text-white"></i></button>
                                        </span>
                                    </div>
                                    <div class="col-lg-6 mb-0 col-md-6 col-sm-12 text-right">
                                        <button type="button" class="btn btn-secondary btn-space mt-2 mr-2">Cancel</button>
                                        <button type="submit" class="btn btn-primary btn-space mt-2">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection