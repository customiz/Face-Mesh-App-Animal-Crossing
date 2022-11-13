@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Upload Image')

@section('content')
<!-- Basic Inputs Groups start -->
<section id="basic-input-groups">
  
  <div class="row">
    <div class="col-12">

      <div class="container">
        <div class="row text-center vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('pages.ANCNH.partials.notifications')
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        <h2 class="raleway">Paste Image assets inside public/img directory</h2>
                        {!! Form::open(['method' => 'POST', 'action' => 'ImageController@store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
                            <button type="submit" class="btn btn-primary">UPLOAD</button>
                        {!! Form::close() !!}
                        @if(count($images))
                            <p><a href="{{ url('/game') }}" class="btn  btn-success montserrat text-uppercase">Start Game</a></p>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
  </div>
</section>
<!-- Basic Inputs Groups end -->


<!-- Custom file input end -->
@endsection