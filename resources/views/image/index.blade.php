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
        <form id="form" method="POST" action="{{ route('contract') }}" enctype="multipart/form-data" name="form">
        {{ csrf_field() }} 
        <div class="form-group">
          <input id="image" type="file" name="image" accept="image/*">
          <img id="img1" class="img_resize" />
          <label id="photo-error" class="error bold" for="photo">{{ $errors->first('photo') }}</label>
        </div>
        <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SEND</button>
      </div>
    </div>
            <!-- #END# Unordered List -->
  </div>
@endsection

@section('extra-script')

@endsection
