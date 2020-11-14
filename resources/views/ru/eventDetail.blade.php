@extends ('ru/basicLayout')

@section ('content')

<section class="section-event ">
    <div class="wrap-slick2">
        <div class="slick2">

            <div class="item-slick2 item1-slick2 bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('media/images/fotosAgricolart/1900-545/plazores1900-545.jpg')}});">
                <div class="wrap-content-slide2 p-t-115 p-b-208">
                    <div class="container">
                        <h2 class="tit6 t-center">
                            About Us
                        </h2>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<!-- Our Story -->
<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
    <span class="tit2 t-center">
        Agricolart
    </span>

    <h3 class="tit3 t-center m-b-35 m-t-5">
        {{ $marce->p_id }}
    </h3>
    <h4 class="tit10 t-center m-b-35 m-t-5">
       {{ $marce->yearMonthDay }}  
        ,&#160
        {{ $marce->startTime }} - {{ $marce->endTime }} 
    </h4>
    
   

    <p class="t-center size32 m-l-r-auto">
        {{ $marce->descriziun }}
    </p>

    <br>
    <br>
    <br>
    <div class="container">
        <!-- <div class="map bo8 bo-rad-10 of-hidden"> -->
        <iframe width="100%" height="500" id="gmap_canvas contact-map size37" src="https://www.google.com/maps?q=Plazores&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"> <!-- https://maps.google.com/maps?q=Plazores&t=&z=13&ie=UTF8&iwloc=&output=embed -->
               
        </iframe>
        <!-- </div> -->
    </div>


</section>

@endsection

@section ('script')

<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="{{ asset('js/map-custom.js') }}"></script>
<!--===============================================================================================-->

@endsection