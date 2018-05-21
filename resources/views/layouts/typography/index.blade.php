@extends('index')

@section('title')

@endsection

@section('extra-css')

@endsection

@section('content')
	<div class="container-fluid">
            <!-- Body Copy -->
    <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="info-box-2 bg-indigo">
            <div class="icon">
              <i class="material-icons">face</i>
            </div>
            <div class="content">
              <div class="text">NEW MEMBERS</div>
              <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">12</div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            <div class="form-line">
              <input type="text" class="form-control" placeholder="Input ETH">
            </div>
          </div>
        </div>
        <button type="SEND" class="btn btn-block btn-lg btn-primary waves-effect">PRIMARY</button>
      </div>
    </div>
            <!-- #END# Unordered List -->
  </div>
@endsection

@section('extra-script')

@endsection
