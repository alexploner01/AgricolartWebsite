@extends ('basicLayout')

@section ('content')
<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{ asset('media/images/fotosAgricolart/1900-545/curt1900-545.jpg') }});">
    <h2 class="tit6 t-center">
        Gallery
    </h2>
</section>



<!-- Gallery -->
<div class="section-gallery p-t-118 p-b-100">
    <!-- <div class="wrap-label-gallery filter-tope-group size27 flex-w flex-sb-m m-l-r-auto flex-col-c-sm p-l-15 p-r-15 m-b-60">
        <button class="label-gallery txt26 trans-0-4 is-actived" data-filter="*">
            All Photo
        </button>

        <button class="label-gallery txt26 trans-0-4" data-filter=".food">
            Food
        </button>

        <button class="label-gallery txt26 trans-0-4" data-filter=".events">
            Events
        </button>

        <button class="label-gallery txt26 trans-0-4" data-filter=".other">
            other
        </button>
    </div> -->

    <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">

        <!-- - -->

        @for ($i = ($currentPage-1)*$numberOfPicturesPerPage; $i < $currentPage*$numberOfPicturesPerPage; $i++)
            @if (count($fotosOfGallery) > $i)
                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom {{ $fotosOfGallery[$i]->category }}">
                    <img src="{{ asset($fotosOfGallery[$i]->path_to_photo) }}" alt="{{ $fotosOfGallery[$i]->alt_text }}">

                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                        <a class="btn-show-gallery flex-c-m fa fa-search" href="{{ asset($fotosOfGallery[$i]->path_to_photo) }}" data-lightbox="gallery"></a>
                    </div>
                </div>
            @endif
        @endfor
        
    </div>

    <div class="pagination flex-c-m flex-w p-l-15 p-r-15 m-t-24 m-b-50">
        @for ($i = 1; $i <= $numberOfPages; $i++)
            @if (!($i == $currentPage))
                <a href="?p={{ $i }}" class="item-pagination flex-c-m trans-0-4 ">{{ $i }}</a>
            @else
                <a href="?p={{ $i }}" class="item-pagination flex-c-m trans-0-4 active-pagination">{{ $i }}</a>
            @endif
        @endfor
    </div>
    
</div>
@endsection

@section ('script')
<!--===============================================================================================-->
<script type="text/javascript" src="{{ asset('vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
@endsection