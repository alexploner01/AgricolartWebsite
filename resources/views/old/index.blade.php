@extends ('ru/basicLayout')

@section ('content')
<!-- Video -->
<section class="section-slide">
    <div>
        <video id="videoLandingPage" width="100%" height="100%" autoplay muted playsinline>       <!-- autoplay muted playsinline -->
            <source src="media/videos/Agricolart-spot.mp4" type="video/mp4">
        </video>
    </div>
</section>

<!-- Welcome -->
<section class="section-welcome bg1-pattern p-t-120 p-b-105">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-welcome t-center">
                    <span class="tit2 t-center">
                        Agricolart
                    </span>

                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        Begnodü
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto">
                        Orun s’invié rodunt Os, operadësses y operadus tl setur dl turism, jont dl post ala presentaziun de <b>Agricolart</b>, <b>ai 7 de messé dales 16-19 ia Tló Plazores</b>.
                    </p>

                    <a href="/about" class="txt4">
                        Nosta idea
                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <img src="media/images/fotosAgricolart/plazores-cuadrat.jpg" alt="IMG-OUR">
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    // <!-- timer -->

    function startCounter(now, countDownDate, elementID) {
       

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            now = now + 1000;

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            //document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            //        + minutes + "m " + seconds + "s ";

            if (distance > 0) {
                document.getElementById("myday" + elementID).innerHTML = days;
                document.getElementById("myhour" + elementID).innerHTML = hours;
                document.getElementById("myminute" + elementID).innerHTML = minutes;
                document.getElementById("mysecond" + elementID).innerHTML = seconds;
            } else {
                document.getElementById("myday" + elementID).innerHTML = 0;
                document.getElementById("myhour" + elementID).innerHTML = 0;
                document.getElementById("myminute" + elementID).innerHTML = 0;
                document.getElementById("mysecond" + elementID).innerHTML = 0;
                clearInterval(x);
            }
        }, 1000)
    }
    // Set the date we're counting down to
   

</script>

<!-- Event -->
<section class="section-event">
    <div class="wrap-slick2">
        <div class="slick2">
            
            @foreach ($nextEvents as $event)
                
                <div class="item-slick2 item1-slick2" style="background-image: url(media/images/fotosAgricolart/stone-background-14.jpg);">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
                                <span class="tit2 p-l-15 p-r-15">
                                    Proscimi
                                </span>

                                <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                    Evenc
                                </h3>
                            </div>

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
                                <!-- Pic block2 -->
                                <a class="wrap-pic-blo2 bg1-blo2" style="background-image: url({{ $event->post_path_to_picture }});">
                                    <div class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m t-center">
                                            {{ $event->startTime }} - {{ $event->endTime }} - {{ $event->yearMonthDay }}
                                        </span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        {{ $event->title }}
                                    </h4>

                                    <p class="t-center">
                                        {{ $event->descriziun }}
                                    </p>

                                    <div class="flex-sa-m flex-w w-full m-t-40">
                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2" id="myday{{ $loop->index }}">
                                                25
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Days
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 " id="myhour{{ $loop->index }}">
                                                12
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Hours
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 myminute" id="myminute{{ $loop->index }}">
                                                59
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Minutes
                                            </span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 " id="mysecond{{ $loop->index }}">
                                                56
                                            </span>

                                            <span class="dis-block t-center txt8">
                                                Seconds
                                            </span>
                                        </div>
                                    </div>
                                    <!-- strtotime -->
                                    <script>
                                        startCounter({{ $curTime }} * 1000, <?= strtotime("$event->yearMonthDay $event->startTime"); ?> * 1000, {{ $loop->index }})       
                                    </script>
                                    <a href="/events/{{ $event->m_id }}" class="txt4 m-t-40">
                                        Plü enformaziuns
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    
        @if (count($nextEvents) < 1)
            <div class="item-slick2 item1-slick2" style="background-image: url(media/images/fotosAgricolart/stone-background-14.jpg);">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <!-- - -->
                            <div class="title-event t-center m-b-52">
                                <h3 class="tit9 t-center p-l-15 p-r-15 p-t-3" style="color: white;">
                                    Proscimamonter ne saral degügn evenc
                                </h3>
                            </div>
                        </div>
                    </div>
            </div>  
        @else
            <div class="wrap-slick2-dots"></div>                 
        @endif
    </div>
    
</section>

@endsection


@section ('script')
<script>
    window.onload = function () {
        var video = document.getElementById("videoLandingPage");
        video.play();
    }
</script>
@endsection
