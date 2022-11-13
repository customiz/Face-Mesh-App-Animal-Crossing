@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Vote | Animal Crossing')

@section('content')
<!-- Basic Inputs Groups start -->
<section id="basic-input-groups">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" charset="utf-8" type='text/css' >



    
        <div class="row text-center">
            

               @if(count($images) >= 2)


               <div class="row">  
                   <div class="col-12">
                       <div class="row">
                           
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        {!! Form::open(['method' => 'PATCH','action' => ['GameController@update',$images->first()->id],'class'=>'form-horizontal']) !!}
                        <div class="form-group">
                        <input type="hidden" class="form-control" name="winner" id="{{ $images->first()->id }}" value="{{$images->first()->id}}">
                        <input type="hidden" class="form-control" name="loser" id="{{ $images->last()->id }}" value="{{$images->last()->id}}">
                        </div>
                        <div id="left" class="animated bounceInLeft">
                             <a href="#" class="pickoption">
                             <div class="view view-first">
                                 <img src="{{ asset('img/models/'. $images->first()->filename) }}" alt="" width="400px" class="img-fluid">
                                 <div class="mask">
                                     {{-- <h2>Rank: {{ $images->first()->rank }}</h2> --}}
                                     <h2>Name: {{ $images->first()->title }}</h2>
                                     <p class="lead">{{ $images->first()->personality }}</p>
                                     <table class="table bg-inherit text-center">
                                     <thead>
                                         <tr></tr>
                                     </thead>
                                     <tbody>
                                         {{-- <tr><td><span class="font120 text-white">ID: {{ $images->first()->id }}</span></td></tr> --}}
                                         <tr><td><span class="font120 text-white">Won: {{ $images->first()->wins }}</span></td></tr>
                                         
                                         <tr><td><span class="font120 text-white">Lost: {{ $images->first()->losses }}</span></td></tr>
                                         <tr><td><span class="font120 text-white">Score: {{ $images->first()->score }}</span></td></tr>
                                     </tbody>
                                     </table>
                                 </div>
                             </div>
                             </a>
                         </div> {{-- EndLIFT --}}
                         {!! Form::close() !!}
                    </div>
     
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             {!! Form::open(['method' => 'PATCH','action' => ['GameController@update',$images->first()->id],'class'=>'form-horizontal']) !!}
                             <div class="form-group">
                             <input type="hidden" class="form-control" name="winner" id="{{ $images->last()->id }}" value="{{$images->last()->id}}">
                             <input type="hidden" class="form-control" name="loser" id="{{ $images->first()->id }}" value="{{$images->first()->id}}">
                             </div>
                             <div id="right" class="animated bounceInRight">
                                  <a href="#" class="pickoption">
                                  <div class="view view-first">
                                      <img src="{{ asset('img/models/'. $images->last()->filename) }}" alt="" width="400px" class="img-fluid">
                                      <div class="mask">
                                          {{-- <h2>Rank: {{ $images->last()->rank }}</h2> --}}
                                          <h2>Name: {{ $images->last()->title }}</h2>
                                          <p class="lead">{{ $images->last()->personality }}</p>
                                          <table class="table bg-inherit text-center">
                                          <thead>
                                              <tr></tr>
                                          </thead>
                                          <tbody>
                                            {{-- <tr><td><span class="font120 text-white">ID: {{ $images->last()->id }}</span></td></tr> --}}
                                              <tr><td><span class="font120 text-white">Won: {{ $images->last()->wins }}</span></td></tr>
                                              <tr><td><span class="font120 text-white">Lost: {{ $images->last()->losses }}</span></td></tr>
                                              <tr><td><span class="font120 text-white">Score: {{ $images->last()->score }}</span></td></tr>
                                          </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  </a>
                              </div> {{-- EndLIFT --}}
                              {!! Form::close() !!}
                         </div>
                            @endif 

                       </div>
                       <div class="card-header">
                        <h4 class="card-title primary">Choose between 2 villager from randomly.</h4>
                       <hr>
                       <div class="col-12 text-center">
                        <a href="/stats" class="btn btn-outline-primary mr-1 mb-1"><i class="livicon-evo"
                            data-options="name: trophy.svg; size: 30px; style: original;"></i> See All Ranking</a>
                        
                    </div>
                    
                      </div>

<div class="row">
    <div class="col-12">
        <p>Advertise</p>
    </div>
    <div class="col-6">
        
        <amp-ad width="100vw" height="320"
        type="adsense"
        data-ad-client="ca-pub-1871368928636838"
        data-ad-slot="9459103454"
        data-auto-format="rspv"
        data-full-width="">
     <div overflow=""></div>
   </amp-ad>

    </div>
    <div class="col-6">
        <amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-1871368928636838"
     data-ad-slot="9459103454"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>
    </div>
</div>
                      





<div class="col-12 bg-white">
   <br> 
{{-- page scripts --}}
<h1 class="text-primary">End Season</h1>
{{-- <p class="mb-1">We will reset ranking data before next season!</p> --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/coming-soon.css')}}">
@endsection
<div id="clockFlat" class="card-text text-center coming-soon pt-2 d-flex justify-content-center mb-2"></div>
</div>


{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/coming-soon/jquery.countdown.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
<script src="{{asset('js/scripts/pages/coming-soon.js')}}"></script>
@endsection

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-50  ">
                                    <div class="card-header"> <hr>
                                        <h4 class="card-title ">Top 10 Animal Crossing Villagers of This Season</h4>
                                      </div>
                                      
<div class="col-12 text-right">
    <div class="fb-share-button" data-href="http://www.cubigaming.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cubigaming.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
</div>
<div class="col-12">
    <br>
</div>

                                    @if(count($top10))
                                    <ul class="list-inline ">
                                        @foreach ($top10 as $image)
                                        <li class="col-lg-2">
                                        <h5 class="margin-top-30 text-primary"><strong>{{$title = strtoupper($image->title)}}  # {{$loop->iteration}}</strong></h5>
                                        <p class="nopad text-warning">Score: {{$image->score}}</p>
                                        <img src="{{ asset('img/models/'. $image->filename) }}" alt="" width="150" class="img-fluid">
                                        <ul class="list-inline list-unstyled margin-top-10 small">
                                        <li><strong>Won: <span class="text-success">{{$image->wins}}</span></strong></li>
                                        <li><strong>Lost: <span class="text-danger">{{$image->losses}}</span></strong></li>
                                        {{-- <li><strong>Score: <span class="text-warning">{{$image->score}}</span></strong></li> --}}
                                        </ul>

                                        </li>         
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>

                                <div class="col-12 text-center">
                                    <a href="/stats" class="btn btn-outline-primary mr-1 mb-1"><i class="livicon-evo"
                                        data-options="name: trophy.svg; size: 30px; style: original;"></i> See All Ranking</a>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                    <amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-1871368928636838"
     data-ad-slot="9862428135"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>

<amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-1871368928636838"
     data-ad-slot="9862428135"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>
                                </div>




                              </div>
   
               </div>              

                
               </div>
            </div>
        </div>
      <hr>
        <footer id="footer" class="page-footer mt-4">
            <div class="container">
                <p class="text-center">
                    Find news and guides for New Horizons at
                    <a target="_blank" href="https://animalcrossingworld.com">Animal Crossing World</a>!
                </p>
                {{-- <p class="text-center">
                    <a href="/terms-of-service">Terms of Service</a> |
                    <a href="/privacy-policy">Privacy Policy</a> |
                    <a target="_blank" href="https://discordapp.com/invite/n4527pm">Discord</a> |
                    <a target="_blank" href="https://twitter.com/villagerdb">Twitter</a> |
                    <a target="_blank" href="https://github.com/jefflomacy/villagerdb">GitHub</a>
                </p> --}}
                <p class="text-center">
                    <a target="_blank" href="https://animal-crossing.com/">Animal Crossing</a> is a registered trademark of
                    <a target="_blank" href="https://www.nintendo.com/">Nintendo</a>.
                   
                </p>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
       
        @include('pages.ANCNH.partials.scripts')


</section>
<!-- Basic Inputs Groups end -->


<!-- Custom file input end -->
@endsection
