@extends('front.layout')
<style>
.reservation-area {
    padding: 4rem 0rem !important;
}

.bg_cover {
    height: min-content !important;
}

.inner-banner {
    position: relative;
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    text-align: center;
}

.catering-banner-content {
    max-width: 800px;
    margin: 0 auto;
}

.catering-banner-content .main-title {
    font-size: 2.5em;
    margin: 0;
}

.catering-banner-content .main-title>span:first-child {
    color: white;
}

.catering-banner-content .main-title>span:last-child {
    color: #f96e01;
}

.catering-banner-content .catering-banner-para {
    font-size: 1.2em;
    margin: 20px 0 0;
    color: white;
}

.letsconnect {
    background: rgb(255 255 255 / 7%);
    border-radius: 8px;
    padding: 20px;
    margin: 50px auto 0;
    max-width: 600px;
    backdrop-filter: blur(10px);

}

.section-title {
    text-align: center;
    /* margin-bottom: 20px; */
}

.section-title h2 {
    margin: 0;
    font-size: 1.8em;
    color: white;

}

.section-title p {
    margin: 5px 0 0;
    font-size: 1em;
    color: white;

}

.letsconnect-form {
    text-align: left;
}

.group-field {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.group-field .input-field {
    width: 48%;
    margin-bottom: 15px;
}

.inputbox {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.inputbox::placeholder {
    color: #888;
}

.input-btn {
    text-align: center;
    margin-top: 20px;
}

.input-btn input[type="submit"] {
    background: #f96e01;
    color: #fff;
    border: none;
    padding: 12px 20px;
    font-size: 1em;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.input-btn input[type="submit"]:hover {
    background: #c18b49;
}

/* Responsive styles */
@media (max-width: 768px) {
    .inner-banner {
        padding: 50px 20px;
    }

    .catering-banner-content .main-title {
        font-size: 2em;
    }

    .catering-banner-content .catering-banner-para {
        font-size: 1em;
    }

    .letsconnect {
        width: 90%;
        margin: 20px auto 0;
    }

    .group-field {
        flex-direction: column;
    }

    .group-field .input-field {
        width: 100%;
        margin-bottom: 10px;
    }
}
</style>
@section('content')
<!--====== PAGE TITLE PART START ======-->

<section class="page-title-area d-flex align-items-center"
    style="background-image:url('{{asset('assets/front/img/'.$bs->breadcrumb)}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-item text-center">
                    <h2 class="title">Catering</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.index')}}"><i
                                        class="flaticon-home"></i>{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catering</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-banner catering-banner catering-banner-new"
    style="background-image:url(https://www.1944.in/wp-content/themes/bonoboz/images/catering-banner-new.jpg);">
    <div class="wrap">
        <div class="catering-banner-content">
            <h1 class="main-title"><span>Welcome to </span> <span>Mitti Chulha</span></h1>
            <p class="catering-banner-para">We <span style="color: #f96e01"> The Mitti Chulha </span> ensure that our Catering
                services embody the standards of service and quality. We totally understand that every
                event is unique, and every customer has different expectations and hence we endeavour to
                make your event a success.</p>
        </div>
        <section class="letsconnect" id="letsconnect">
            <div class="section-title">
                <h2>Let's Connect</h2>
                <p>Drop your information below.</p>
            </div>
            <div class="letsconnect-form">
                <form action="" id="catering-form" method="post" novalidate="novalidate">
                    <div class="group-field column2">
                        <div class="input-field">
                            <input type="text" name="yourname" class="inputbox" placeholder="Your Name*">
                        </div>
                        <div class="input-field">
                            <input type="text" name="email" class="inputbox" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="group-field column2">
                        <div class="input-field">
                            <input type="text" name="phone" class="inputbox" placeholder="Phone Number*">
                        </div>
                        <div class="input-field">
                            <select class="inputbox" name="service">
                                <option value="">Select the service you need</option>
                                <option value="Parties">Parties</option>
                                <option value="Special Events">Special Events</option>
                                <option value="Private Dinners">Private Dinners</option>
                                <option value="Weddings and Reception">Weddings and Reception</option>
                                <option value="Outdoor catering">Outdoor catering</option>
                                <option value="Corporate catering">Corporate catering</option>
                            </select>
                        </div>
                    </div>
                    <div class="group-field column2">
                        <div class="input-field">
                            <input type="text" name="guests" class="inputbox" placeholder="Expexted number of guests">
                        </div>
                        <div class="input-field">
                            <!-- <label>Select date you want</label>     -->
                            <input type="date" name="selectdate" class="inputbox" placeholder="Select date you want">
                        </div>
                    </div>
                    <div class="input-btn">
                        <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit button btn">
                        <input type="hidden" name="submitted" id="submitted" value="true">
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>
</div>




@endsection