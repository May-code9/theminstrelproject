@extends('admin.master')
@section('content')
<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>{{ config('app.name') }} Dashboard</h3>
        <p>Creatively crafted for your needs</p>
      </div>

    </div>
    <div class="row">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block success">
          <div class="media">
            <div class="media-body">
              <h5>$ <span class="spincreament">72548</span></h5>
              <p>Total Profit</p>
            </div>
            <i class="fa fa-cubes"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-cubes"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block danger">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">....</span></h5>
              <p> Users</p>
            </div>
            <i class="fa fa-users"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-users"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block warning">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">.....</span></h5>
              <p> Admin</p>
            </div>
            <i class="fa fa-eye"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-users"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block primary">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">.....</span></h5>
              <p>Leagues Active</p>
            </div>
            <i class="fa fa-dribbble"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-comments"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">.....</span></h5>
              <p>Total Leagues</p>
            </div>
            <i class="fa fa-dribbble"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">....</span><span class="badge badge-danger ml-2 "><i class="fa fa-caret-down"></i></span></h5>
              <p>Wallets</p>
            </div>
            <i class="fa fa-money"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">....</span><span class="badge badge-success ml-2 "><i class="fa fa-caret-up"></i></span></h5>
              <p>Total Q &amp; A</p>
            </div>
            <i class="fa fa-question"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">....</span></h5>
              <p>Total Bet Set</p>
            </div>
            <i class="fa fa-ticket"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Production <small>February 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-primary btn-round"><i class="fa fa-cloud-download"></i> <span class="text">Export</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-success btn-round"><i class="fa fa-print"></i> <span class="text">Print</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" id="randomizeData"><i class="fa fa-refresh"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Setting</a>
                  <a class="dropdown-item" href="#">Edit</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Close this</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <canvas id="mixedchartjs" ></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Production <small>February 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-primary btn-round"><i class="fa fa-cloud-download"></i> <span class="text">Export</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-success btn-round"><i class="fa fa-print"></i> <span class="text">Print</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 1</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 2</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 3</a>
                  <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 4</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="worldmap " id="mapwrap" ></div>
          </div>
        </div>
      </div>
    </div>


    @endsection
