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
        <p>
          <input type="text" name="title" placeholder="Input ETH">
        </p>
        <p>
          <textarea name="body" placeholder="Enter message"></textarea>
        </p>
        <p>
        <button type="SEND" class="btn btn-block btn-lg btn-primary waves-effect">SEND</button>
        </p>
      </form>
      </div>
    </div>
            <!-- #END# Unordered List -->
</div>


  </div>
@endsection

@section('extra-script')

@endsection
