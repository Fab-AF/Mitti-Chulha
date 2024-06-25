@extends('front.layout')

@section('pagename')
 - {{convertUtf8($page->name)}}
@endsection

@section('meta-keywords', "$page->meta_keywords")
@section('meta-description', "$page->meta_description")
<style>
    .aboutcontainer{
        background-color: #F2F2F2;
    }
.about-section {
    max-width: 100%;
    margin: 0px auto;
    padding: 4rem 0rem;
    text-align: center;
    width: 60%;
    margin: auto;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    flex-direction:column;
    align-items:center;
    gap:1rem;
    
}

.about-section h1 {
    font-size: 30px;
    color: #C75B34;
    line-height:37px
    font-family: 'Cursive', sans-serif;
    font-weight:700;
}

.about-section h2 {
    font-size: 36px;
    line-height:47px;

    color: #333;
    font-weight: 700;
}

.about-section p {
    font-size: 18px;
    color: #555;
    line-height: 29px;
    
}
.teampage{
    padding:4rem 0rem !important;
}.ourfoodcontainer{
    display: flex;
    justify-content:space-between;
    align-items:center;
    gap:2rem;
    padding:1rem 9rem;
    background-color: #F2F2F2;

}
.ourfoodcontainer>.about-section{
    width: 50%;
    justify-content: start;
    align-items: flex-start;
}


.ourfoodcontainer>img{
    width: 50%;

}
@media (max-width:600px) {
    .about-section {
    width: 90%;}
    .ourfoodcontainer {
    
    background-color: #F2F2F2;
    padding:4rem 0rem;
    flex-direction: column;}
    .ourfoodcontainer>.about-section {
        padding:0rem 0rem;
        width: 90%;}
}

</style>
@section('content')
  <!--====== PAGE TITLE PART START ======-->

  <section class="page-title-area d-flex align-items-center lazy" data-bg="{{asset('assets/front/img/'.$bs->breadcrumb)}}">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <div class="page-title-item text-center">
                   <h2 class="title">{{convertUtf8($page->title)}}</h2>
                   <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{route('front.index')}}"><i class="flaticon-home"></i>{{__('Home')}}</a></li>
                           <li class="breadcrumb-item active" aria-current="page">{{convertUtf8($page->name)}}</li>
                       </ol>
                   </nav>
               </div>
           </div>
       </div>
   </div>
</section>

  <!--====== PAGE TITLE END ======-->
<div>
  <!-- {!! nl2br(replaceBaseUrl(convertUtf8($page->body))) !!} -->
  </div>
<div class="aboutcontainer ">
  <section class="about-section">
        <h1>About Mittichulha</h1>
        <h2>We are a modern restaurant in the city</h2>
        <p>
            What started as a pop-up ice-cream handcart in 1944, has today, transformed into a network of 14 restaurants, 
            serving the formidable yet warm and welcoming 1944 The Hocco Kitchen gourmet experience. To this day, the 
            Chona family’s legacy of trying out new recipes and formats has kept customers coming back for more. After all, 
            it was the gastronomist, Mr Satish Chona’s hunger for innovation that brought authentic North Indian and Punjabi 
            cuisine to Ahmedabad for the first time.
        </p>
    </section>
</div>
<!--====== EXPERIENCE PART START ======-->
<section class="team-area team-page teampage">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-title text-center">
                        <span>{{convertUtf8($bs->team_section_title)}} <img class="lazy" data-src="{{asset('assets/front/img/title-icon.png')}}" alt=""></span>
                        <h3 class="title">{{convertUtf8($bs->team_section_subtitle)}}</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                @foreach ($members as $item)
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-team mt-30">
                        <div class="team-thumb">
                            <img class="lazy wow fadeIn" data-src="{{asset('assets/front/img/members/'.$item->image)}}" alt="team" data-wow-delay=".5s">
                            <div class="team-overlay">
                                <div class="link">
                                    <a><i class="flaticon-add"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        @if($item->facebook)
                                        <li><a href="{{$item->facebook}}" target="_bank"><i class="flaticon-facebook"></i></a></li>
                                        @endif
                                        @if($item->twitter)
                                        <li><a href="{{$item->twitter}}" target="_bank"><i class="flaticon-twitter"></i></a></li>
                                        @endif
                                        @if($item->instagram)
                                        <li><a href="{{$item->instagram}}" target="_bank"><i class="flaticon-instagram"></i></a></li>
                                        @endif
                                        @if($item->linkedin)
                                        <li><a href="{{$item->linkedin}}" target="_bank"><i class="flaticon-linkedin"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h4 class="title">{{convertUtf8($item->name)}}</h4>
                            <span>{{convertUtf8($item->rank)}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


<!--====== EXPERIENCE PART ENDS ======-->

<!--====== OURFOOD PART START ======-->
<div class="ourfoodcontainer">
  <section class="about-section text-left">
        <h1>About Mittichulha</h1>
        <h2>We are a modern restaurant in the city</h2>
        <p>
            What started as a pop-up ice-cream handcart in 1944, has today, transformed into a network of 14 restaurants, 
            serving the formidable yet warm and welcoming 1944 The Hocco Kitchen gourmet experience. To this day, the 
            Chona family’s legacy of trying out new recipes and formats has kept customers coming back for more. After all, 
            it was the gastronomist, Mr Satish Chona’s hunger for innovation that brought authentic North Indian and Punjabi 
            cuisine to Ahmedabad for the first time.
        </p>
    </section>
   <img src="../../../../public/assets/front/img/5f59cf90bb4ff.png" alt="burger">
</div>
<!-- ====== OURFOOD PART END ====== -->

@endsection
