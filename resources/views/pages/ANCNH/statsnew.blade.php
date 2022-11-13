@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Ranking')
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-knowledge-base.css')}}">
@endsection
@section('content')
<!-- Knowledge base Jumbotron start -->
<div class="row text-left align">
           
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
      <div class="row align-items-center">
        <amp-ad width="100vw" height="320"
type="adsense"
data-ad-client="ca-pub-1871368928636838"
data-ad-slot="9862428135"
data-auto-format="rspv"
data-full-width="">
<div overflow=""></div>
</amp-ad>

      </div>
      <div class="col-12 text-right">
       <div class="fb-share-button" data-href="http://www.cubigaming.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cubigaming.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
        
        </div>
       
   

<section class="kb-search">
  <div class="row">
    <div class="col-12">
      
        <div class="card-content">
          <div class="card-body text-center">
            <h1 class=" mb-2 kb-title">Animal Crossing Villagers Ranking</h1>
            <p class=" mb-1">
                Data from the user and calculated by the algorithm of the system.
      
                <div> <a href="/" class="btn btn-outline-primary mr-1 mb-1"><i class="livicon-evo"
                    data-options="name: balance.svg; size: 30px; style: original;"></i> Go Vote</a> </div>
               
            </p>
            <form>
                

              <fieldset class="form-group position-relative w-50 mx-auto kb-search-width">
                <input type="text" class="form-control form-control-lg round pl-2" id="searchbar"
                  placeholder="Find villager name or nuture ..">
                  <div class="form-control-position">
                    <i class="bx bx-search-alt"></i>
                  </div>
              </fieldset>
            </form>
          </div>
        </div>
      
    </div>
  </div>
</section>
<!-- Knowledge base Jumbotron ends -->
<!-- Knowledge base start -->
<section class="kb-content">
  <div class="row kb-search-content-info mx-1 mx-md-2 mx-lg-5">
    <div class="col-12">
      <div class="row match-height">

        @if(count($toprank) >= 1)
        @foreach($toprank as $image)

        <div class=" col-md-4 col-sm-6 kb-search-content">
          <div class="card kb-hover-1">
            <div class="card-content">
                
                     
            
              <div class="card-body text-center">
                <div class="text-right">
                    <h5> # {{$loop->iteration}}</h5>
                </div>
                <a href="#">
                  <div class=" mb-1">
                    <div class="avatar  avatar-xl">
                        
                        <img src="{{ url('img/models/'.$image->filename) }}" style="width: 150px;height:150px" class="avtar img holder">
                        </div>
                  </div>
                  <h4>{{$title = strtoupper($image->title)}}</h4>
                  <h5>Nature : {{$image->country}}</h5>
                  <p class="font120 text-warning">Score: {{$title = strtoupper($image->score)}}</p>
                  <p class="text-muted">Won: <span class="text-success">{{ $image->wins }}</span></p>
                  <p class="text-muted">Lost: <span class="text-danger">{{ $image->losses }}</span></p>
                 
                </a>
              </div>
            </div>
          </div>
        </div>
       
        @endforeach
        @else
            <p class="text-danger">Sorry, no images found today, consider <a href="{{ url('images') }}">uploading some.</a></p>
        @endif



      </div>
    </div>
  </div>
  <div class="row text-left align">
           
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
      <div class="row align-items-center">
        <amp-ad width="100vw" height="320"
type="adsense"
data-ad-client="ca-pub-1871368928636838"
data-ad-slot="9862428135"
data-auto-format="rspv"
data-full-width="">
<div overflow=""></div>
</amp-ad>

      </div>
</section>
<!-- Knowledge base ends -->
@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/page-knowledge-base.js')}}"></script>
@endsection