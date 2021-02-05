@extends ('de/basicLayout')

@section ('content')

<section class="section-event ">
    <div class="wrap-slick2">
        <div class="slick2">
            
            @foreach ($picturePaths as $picturePath)
                <div class="item-slick2 item1-slick2 bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset($picturePath) }});">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">
                            <h2 class="tit6 t-center">
                                About Us
                            </h2>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>


<!-- Our Story -->
<section class="bg2-pattern p-t-116 p-b-110 t-center p-l-15 p-r-15">
    <span class="tit2 t-center">
        Agricolart
    </span>

    <h3 class="tit3 t-center m-b-35 m-t-5">
        Nosta Idea
    </h3>

    <p class="t-center size32 m-l-r-auto">
        "Le tomp de Corona á porté düc y dötes cantes a se fá pinsiers sön la vita tl monn, la natöra y sön tan che i tacun adöm con i atri.
        Án capí ci co é veramonter emportant por nos: la sanité, le mangé y la natöra, le sté adöm y se baié önn con l’ater. Döt cösc ánse tlo da nos.

        Fora de cösta esperionza nasc <b>AGRICOLART</b>, le <b>Marcé dai Paurs nö</b>.

        <br><b>Produc locai</b>, co crësc fora dla <b>tradiziun</b> sana y dal laur da paur, cösc orunse se porté dant y se fá conësce a Os y üsc clienc.
        Orun se cunté dl laur, dl svilup di produc, dl vîre con la natöra y i tiers danter nostes beles munts.

        Agricolart reporta le monn agrar, le laur sön la tera con ci co crësc, con i tiers y l’ert che al ó ester por fá svilupé y madorí i produc, la creativité y manualité dl paur.

        Agricolart é metü adöm da <b>10 mëmbri</b>, co se presëntará ia por l’isté nia plü sön paiun, mo en alternanza sön le lü <b>»Tló Plazores«</b> y le <b>»Lü de Corcela«</b>, endô le vëndres dales <b>16.00 ales 19.00</b>.

        Dal <b>cioce</b> al <b>ciajó</b> de vacia y ciöra, dales erbes al <b>met</b>, dla <b>farina</b> ala <b>snops</b>,
        dla <b>ceramica</b> al <b>lëgn</b>, dal <b>guant</b> ala <b>mi</b> ...

        Gnide a se ciafé, baiede con nos, orun se cunté de nosc laur, nüsc valurs, nosta tradiziun."

        <br>
        Roland Erlacher
    </p>
</section>

<!-- Members -->
<section class="section-chef bgwhite p-t-115 p-b-95">
    <div class="container t-center">
        <span class="tit2 t-center">
            Meet Our
        </span>

        <h3 class="tit5 t-center m-b-50 m-t-5">
            Members
        </h3>

        <div class="row">
            
            @foreach ($members as $member)
                <div class="col-md-8 col-lg-4 m-l-r-auto p-b-30">
                    <!-- -Block5 -->
                    <div class="blo5 pos-relative p-t-60">
                        <div class="pic-blo5 size14 bo4 wrap-cir-pic hov-img-zoom ab-c-t">
                            <a href="{{ $member->link }}"><img src="{{ asset($member->path_to_logo) }}" alt="{{ $member->ennom }} logo"></a>
                        </div>

                        <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                            <a href="{{ $member->link }}" class="txt34 dis-block p-b-6">
                                {{ $member->ennom }}
                            </a>

                            <span class="dis-block t-center txt35 p-b-25">
                                {{ $member->main_product }}
                            </span>

                            <p class="t-center">
                                {{ $member->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</section>

<!-- Video -->
<section class="section-video parallax100" style="background-image: url({{ asset('media/images/fotosAgricolart/1900-545/curt1900-545.jpg') }});">
    <div class="content-video t-center p-t-225 p-b-250">
        <span class="tit2 p-l-15 p-r-15">
            Ciari a
        </span>

        <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
            NOSC VIDEO
        </h3>

        <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01">
            <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>


<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0"><img src="{{ asset('media/images/icons/video-16-9.jpg') }}" alt="IMG"></div>
            <div class="video-mo-01">
                <iframe src="https://player.vimeo.com/video/431479650?title=0&byline=0&portrait=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

@endsection