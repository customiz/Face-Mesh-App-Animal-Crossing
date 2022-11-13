@extends('layouts.contentLayoutMaster')
@section('title', 'Ranking | FaceMash v1.0')

@section('content')

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
  <a href="/" class="btn btn-outline-primary mr-1 mb-1"><i class="livicon-evo"
    data-options="name: balance.svg; size: 30px; style: original;"></i> Vote</a>
  <div class="fb-share-button" data-href="http://www.cubigaming.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.cubigaming.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
</div>
<div class="col-12">
  <br>
 <h1 class="text-primary"> Animal Crossing Villagers Ranking </h1>
  <br>
</div>
<div class="col-12">
  <br>
  
  <br>
</div>
<form method="get" action="">
<div class="col-12">
  <div class="form-label-group position-relative has-icon-left">
    <input type="text" id="search" class="form-control" name="search"
      placeholder="Search villager name.">
    <div class="form-control-position">
      <i class="bx bx-search-alt"></i>
    </div>
    <label for="search">Search villager name.</label>
  </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script type="application/javascript">
$(document).ready(function(){

    $('#search').on('keyup', function(){

      $value=$(this).val();
        
        $.ajax({

            type:"GET",
            url: '/search',
            data: {'search':$value},
            success: function(output) {
              
               // console.log(output);
                $('#searchResult').html(output);
             }



        });


    });

});
</script>



<div id="searchResult"></div>


              <div class="row">
                @if(count($toprank) >= 1)
                @foreach($toprank as $image)

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 m-t-5 card">
                        <div class="media">
                          <a class="media-left margin-right-10 col-6" href="#">
                            <div class="avatar mr-1 avatar-xl">
                            <img src="{{ url('img/models/'.$image->filename) }}" style="width: 100px" class="avtar img holder">
                            </div>
                          </a>
                          <div class="col-6 media-body  margin-left-10 ">
                            <br>
                          <h3 class="media-heading">{{$title = strtoupper($image->title)}}</h3>
                          <h3># {{$loop->iteration}}</h3>
                         
                      @if($image->score != 0)
                             <p class="font120 text-warning">Score: {{$title = strtoupper($image->score)}}</p>
                          @else
                            <p class="font120">Not enough data to build ranking</p>
                          @endif 
                           
                               <p class="text-secondary">Won: <span class="text-success">{{ $image->wins }}</span></p>
                               <p class="text-secondary">Lost: <span class="text-danger">{{ $image->losses }}</span></p>
                              {{-- <p class="text-secondary">Score: <span class="text-success">{{ $image->score }}</span></p> --}}
                            
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

@stop