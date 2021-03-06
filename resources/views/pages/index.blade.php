@extends('pages.layout') @section('title', '首頁 ｜日何百鐵') @section('inner-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css"> @endsection @section('content')

<div class="container-fluid">
    <div id="home-slide" class="owl-carousel owl-theme fade-in">
        @if($banner->isEmpty())
        <div class="item">
            <img src="http://placehold.it/1140x640">
        </div>
        @endif @foreach($banner as $key => $val)
        <div class="item">
            <img src="{{ IMAGE_BANNER . $val->value }}">
        </div>
        @endforeach
    </div>
</div>

<div class="container">
    <div id="home-product-list">
        <div class="row">
            @if($news->isEmpty()) @for($i=1; $i
            <=6; $i++) <div class="col-md-4 product-item">
                <img src="http://placehold.it/340x340">
                <h4>0000-00-00</h4>
                <p>Description............</p>
        </div>
        @endfor @endif @foreach($news as $key => $val)
        <div class="col-md-4 product-item">
            <img src="{{ IMAGE_NEWS . $val->image_url }}">
            <h4>{{ substr($val->created_at , 0 , 10) }}</h4>
            <p>{{ $val->desc }}</p>
        </div>
        @endforeach
    </div>

    <div class="row fb-content">
        <div class="fb-page" data-href="https://www.facebook.com/hevodeco/" data-tabs="timeline" data-width="400" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/hevodeco/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hevodeco/">Hevo 日何百鐵</a></blockquote>
        </div>
    </div>
    </div>
</div>

@endsection @section('inner-js')


<script>
    //顯示當前頁 ok
    document.getElementById('nav-1').style.borderBottom = "0.4rem solid #b0bec5";
    document.getElementById('nav-small-1').style.borderBottom = "0.4rem solid #b0bec5";
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            }
        }
    });
</script>
@endsection