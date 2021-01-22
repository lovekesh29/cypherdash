@extends('layouts.page', ['cssId' => '15'])
@section('meta')
<title>Digital Marketing Services | Top Digital Marketing Agency India</title>
<meta name="description" content="Digital Marketing company from India offers various digital marketing services like SEO, PPC, SMO, Web design & development. We are one of the top digital marketing agency that delivers 360 degree growth for our clients.">
<meta name="keywords" content="Digital Marketing Services">
    
<meta property="og:title" content="Digital Marketing Services | Top Digital Marketing Agency India" />
<meta property="og:description" content="Digital Marketing company from India offers various digital marketing services like SEO, PPC, SMO, Web design & development. We are one of the top digital marketing agency that delivers 360 degree growth for our clients." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://cypherdash.com/" />
<meta property="og:image" content="https://cypherdash.com/wp-content/themes/qrion/assets/images/logo.png" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CypherDash">
<meta name="twitter:title" content="Digital Marketing Services | Top Digital Marketing Agency India">
<meta name="twitter:description" content="Digital Marketing company from India offers various digital marketing services like SEO, PPC, SMO, Web design & development. We are one of the top digital marketing agency that delivers 360 degree growth for our clients.">
<meta name="twitter:image" content="https://cypherdash.com/wp-content/themes/qrion/assets/images/logo.png">
@endsection
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Cypherdash",
  "url": "https://cypherdash.com/",
  "logo": "https://cypherdash.com/wp-content/themes/qrion/assets/images/logo.png",
  "image": "https://cypherdash.com/wp-content/uploads/2020/04/image5.png",
  "description": "If you are thinking of SEO then that’s correct, you are looking into the right direction & we can help you to achieve the same. We at Cypherdash, will provide you the best digital marketing services and will make your website come at the top of the search engines result which is called Organic research.",
  "brand": "Cypherdash",
  "offers": {
    "@type": "Offer",
    "url": "https://cypherdash.com/",
    "priceCurrency": "["USD","INR"]",
    "price": "",
    "itemCondition": "https://schema.org/NewCondition"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "ratingCount": "11457"
  }
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9896788095",
    "contactType": "",
    "areaServed": ["US","IN"],
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/cypherdash",
    "https://www.linkedin.com/company/cypherdash/"
  ]
}
</script>

@endsection



@section('css')

<link rel="stylesheet" id="elementor-post-15-css" href="wp-content/cache/autoptimize/css/autoptimize_single_2ff3ae06c980b27de56ada70239785630e9e.css?ver=1589615155" type="text/css" media="all" />

@endsection



@include('layouts.header')



@section('top-section')

@if(session('success') == 'true')

<script>

      $(document).ready(function(){

        swal({

            icon: 'success',

            title: 'Thanks For Contacting Us',

            text: 'We will reach back to you shortly'

        })

      })

	</script>

@endif

<section

    class="elementor-element elementor-element-0b159d0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="0b159d0"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-131dbfd elementor-column elementor-col-33 elementor-top-column" data-id="131dbfd" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-cf6f3fa elementor-widget elementor-widget-hbtheme-heading"

                            data-id="cf6f3fa"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hbtheme-animes hbtheme-animes-fadeInLeft" data-hbtheme-anime="fadeInLeft">

                                    <div class="hbtheme-anime anime-loading">

                                        <div class="hb-heading">

                                            <h4 class="hb-heading__subtitle">WE ARE BEST DIGITAL MARKETING AGENCY</h4>

                                            <h1 class="hb-heading__title">Get Digital Marketing Services Now From Experts</h1>

                                            <p class="hb-heading__desc">Cypherdash is there for you. We provide excellent Digital Marketing Services for your business.</p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-5c1fc47 elementor-widget elementor-widget-hbtheme-form-analyze"

                            data-id="5c1fc47"

                            data-element_type="widget"

                            data-widget_type="hbtheme-form-analyze.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hbtheme-animes hbtheme-animes-fadeInLeft" data-hbtheme-anime="fadeInLeft">

                                    <div class="hbtheme-anime anime-loading">

                                        <div class="hb-form-analyze">

                                            <form action="{{ url('/webiste-analyze') }}" method="post">

                                            @csrf

                                                <div class="hb-form-analyze__content">

                                                    <div class="hb-form-analyze__input">

                                                        <input type="email" name="businessEmail" placeholder="Enter Your Business Email" autocomplete="off" class="@error('businessEmail') is-invalid @enderror" />

                                                    </div>

                                                    <div class="hb-form-analyze__submit">

                                                        <button type="submit">

                                                            Analyze

                                                        </button>

                                                    </div>

                                                </div>

                                                @error('businessEmail')

                                                    <span class="invalid-feedback" role="alert">

                                                        <strong>{{ $message }}</strong>

                                                    </span>

                                                @enderror

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="elementor-element elementor-element-2a354fd elementor-column elementor-col-33 elementor-top-column" data-id="2a354fd" data-element_type="column">

                <div class="elementor-column-wrap">

                    <div class="elementor-widget-wrap"></div>

                </div>

            </div>

            <div class="elementor-element elementor-element-a9030ee elementor-column elementor-col-33 elementor-top-column" data-id="a9030ee" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-7170376 elementor-widget elementor-widget-hbtheme-image-animation"

                            data-id="7170376"

                            data-element_type="widget"

                            data-widget_type="hbtheme-image-animation.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hbtheme-animes hbtheme-animes-fadeInRight" data-hbtheme-anime="fadeInRight">

                                    <div class="hbtheme-anime anime-loading">

                                        <div class="hb-image-animation" data-mousemove-parallax='{"hoverOnly":false,"relativeInput":true,"clipRelativeInput":false,"selector":".mouse-parallax"}'>

                                            <div class="hb-image-animation__item elementor-repeater-item-846c155 active" data-depth="">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/1.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-8eab8d1" data-depth="">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/2.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-767c032 mouse-parallax" data-depth="0.1">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/3.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-b9ef1be mouse-parallax" data-depth="0.2">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/4.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-3865ee1" data-depth="">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/5.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-31c75a9" data-depth="">

                                                <div

                                                    class="animation-infinite moveUpDown"

                                                    style="animation-delay: 1s; -webkit-animation-delay: 1s; animation-duration: 2s; -webkit-animation-duration: 2s; animation-direction: alternate;"

                                                >

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/6-1.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-a7a4735 mouse-parallax" data-depth="0.2">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/6.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>



                                            <div class="hb-image-animation__item elementor-repeater-item-5574cf4 mouse-parallax" data-depth="0.3">

                                                <div class="animation-infinite" style="">

                                                    <img

                                                        width="751"

                                                        height="486"

                                                        src="wp-content/uploads/2020/04/7.png"

                                                        class="attachment-large size-large"

                                                        alt=""

                                                        sizes="(max-width: 751px) 100vw, 751px"

                                                    />

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection



@section('slider')

<section

    class="elementor-element elementor-element-c1605c1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="c1605c1"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-c55deec elementor-column elementor-col-100 elementor-top-column" data-id="c55deec" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div class="elementor-element elementor-element-3059726 elementor-widget elementor-widget-heading" data-id="3059726" data-element_type="widget" data-widget_type="heading.default">

                            <div class="elementor-widget-container">

                                <h2 class="elementor-heading-title elementor-size-default">Brands We’ve Helped:</h2>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-15b783c hb-partners elementor-widget elementor-widget-hbtheme-image-carousel"

                            data-id="15b783c"

                            data-element_type="widget"

                            data-widget_type="hbtheme-image-carousel.default"

                        >

                            <div class="elementor-widget-container">

                                <div

                                    class="hb-owl-container hb-images-carousel hb-images-carousel-standard text-left owl-nav-s1 owl-dots-s1 owl-nav-box-shadow owl-nav-circle owl-nav-icon owl-nav-middle owl-nav-horizontal owl-dots-center"

                                >

                                    <div class="hb-owl-carousel">

                                        <div

                                            class="owl-carousel"

                                            data-owl-carousel='{"items":1,"slideBy":1,"autoplay":true,"autoplayTimeout":5000,"autoplayHoverPause":false,"smartSpeed":250,"margin":30,"stagePadding":0,"loop":true,"center":false,"mouseDrag":true,"touchDrag":true,"merge":false,"autoWidth":false,"startPosition":0,"nav":false,"navText":["&lt;i class=\"arrow_left\"&gt;&lt;\/i&gt;","&lt;i class=\"arrow_right\"&gt;&lt;\/i&gt;"],"dots":false,"dotsOutside":true,"navOutside":true,"hbthemeContainer":".hb-owl-container","wrapClass":"owl-nav-s1 owl-dots-s1 owl-nav-box-shadow owl-nav-circle owl-nav-icon owl-nav-middle owl-nav-horizontal owl-dots-center","responsive":{"992":{"items":5,"slideBy":1,"margin":100,"stagePadding":0,"nav":false,"dots":false},"768":{"items":4,"slideBy":1,"margin":50,"stagePadding":0,"nav":false,"dots":false},"480":{"items":4,"slideBy":1,"margin":50,"stagePadding":0,"nav":false,"dots":false},"320":{"items":3,"slideBy":1,"margin":30,"stagePadding":0,"nav":false,"dots":false}}}'

                                        >

                                            <div class="hb-image">

                                                <a href="#" target="_self"> <img width="1" height="1" src="wp-content/uploads/2020/05/client5.svg" class="attachment-large size-large" alt="" /> </a>

                                            </div>



                                            <div class="hb-image">

                                                <a href="#" target="_self"> <img width="1" height="1" src="wp-content/uploads/2020/05/client4.svg" class="attachment-large size-large" alt="" /> </a>

                                            </div>



                                            <div class="hb-image">

                                                <a href="#" target="_self"> <img width="1" height="1" src="wp-content/uploads/2020/05/client3.svg" class="attachment-large size-large" alt="" /> </a>

                                            </div>



                                            <div class="hb-image">

                                                <a href="#" target="_self"> <img width="1" height="1" src="wp-content/uploads/2020/05/client2.svg" class="attachment-large size-large" alt="" /> </a>

                                            </div>



                                            <div class="hb-image">

                                                <a href="#" target="_self"> <img width="1" height="1" src="wp-content/uploads/2020/05/client1.svg" class="attachment-large size-large" alt="" /> </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection

@section('dm-tips')

<section

    class="elementor-element elementor-element-d56d132 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="d56d132"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-896132b elementor-column elementor-col-33 elementor-top-column" data-id="896132b" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-07a9beb elementor-widget elementor-widget-hbtheme-heading"

                            data-id="07a9beb"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">SHARED EXPERIENCES</h4>

                                    <h2 class="hb-heading__title">What are the main fundamentals of Digital Marketing?</h2>

                                    <p class="hb-heading__desc">
                                    If you are thinking of SEO then that’s correct, you are looking into the right direction & we can help you to achieve the same. We at Cypherdash, will provide you the best digital marketing services and will make your website come at the top of the search engines result which is called Organic research.
                                    </p>
                                    <h6>In case you aren't aware of SEO then the next question in your mind must be why SEO is Important?</h6>
                                    <p>Here is the answer to your question. The following are the benefits  for which SEO is required</p>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-aef5f39 elementor-icon-list--layout-traditional elementor-widget elementor-widget-icon-list"

                            data-id="aef5f39"

                            data-element_type="widget"

                            data-widget_type="icon-list.default"

                        >

                            <div class="elementor-widget-container">

                                <ul class="elementor-icon-list-items">

                                    <li class="elementor-icon-list-item">

                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>

                                        <span class="elementor-icon-list-text">More Visibility over the internet</span>

                                    </li>

                                    <li class="elementor-icon-list-item">

                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>

                                        <span class="elementor-icon-list-text">Less requirement of SEM</span>

                                    </li>

                                    <li class="elementor-icon-list-item">

                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>

                                        <span class="elementor-icon-list-text">Cost Efficient as compared to SEM</span>

                                    </li>

                                    <li class="elementor-icon-list-item">

                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>

                                        <span class="elementor-icon-list-text">Build strong brand value of you company</span>

                                    </li>

                                    <li class="elementor-icon-list-item">

                                        <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="far fa-check-circle"></i> </span>

                                        <span class="elementor-icon-list-text">Create a lead magnet</span>

                                    </li>

                                </ul>
                                <p>And of course more the visibility and more is the possibility of business</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div

                class="elementor-element elementor-element-2b978bf elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-33 elementor-top-column"

                data-id="2b978bf"

                data-element_type="column"

            >

                <div class="elementor-column-wrap">

                    <div class="elementor-widget-wrap"></div>

                </div>

            </div>

            <div class="elementor-element elementor-element-ca9dd68 elementor-column elementor-col-33 elementor-top-column" data-id="ca9dd68" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-c85fe52 elementor-widget elementor-widget-hbtheme-image-animation"

                            data-id="c85fe52"

                            data-element_type="widget"

                            data-widget_type="hbtheme-image-animation.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-image-animation" data-mousemove-parallax='{"hoverOnly":false,"relativeInput":true,"clipRelativeInput":false,"selector":".mouse-parallax"}'>

                                    <div class="hb-image-animation__item elementor-repeater-item-2d0ca9d active" data-depth="">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image9.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-62b53fc mouse-parallax" data-depth="0.2">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image7.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-8803cd0 mouse-parallax" data-depth="0.1">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image6.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-96f515e" data-depth="">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image5.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-992b32f" data-depth="">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image4.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-ece930a" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0s; -webkit-animation-delay: 0s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image1.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-fcb1a90" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0.2s; -webkit-animation-delay: 0.2s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image2.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-c1e2cf5" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0.4s; -webkit-animation-delay: 0.4s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="660"

                                                height="641"

                                                src="wp-content/uploads/2020/04/image3.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 660px) 100vw, 660px"

                                            />

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection





@section('benifits')

<section

    class="elementor-element elementor-element-2bcfb74 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="2bcfb74"

    data-element_type="section"

    data-settings='{"background_background":"classic"}'

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-ed3fb51 elementor-column elementor-col-33 elementor-top-column" data-id="ed3fb51" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <section

                            class="elementor-element elementor-element-ee70d96 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"

                            data-id="ee70d96"

                            data-element_type="section"

                        >

                            <div class="elementor-container elementor-column-gap-default">

                                <div class="elementor-row">

                                    <div class="elementor-element elementor-element-2997a87 elementor-column elementor-col-50 elementor-inner-column" data-id="2997a87" data-element_type="column">

                                        <div class="elementor-column-wrap elementor-element-populated">

                                            <div class="elementor-widget-wrap">

                                                <div

                                                    class="elementor-element elementor-element-838d18a elementor-widget elementor-widget-hbtheme-icon-box-grid"

                                                    data-id="838d18a"

                                                    data-element_type="widget"

                                                    data-widget_type="hbtheme-icon-box-grid.default"

                                                >

                                                    <div class="elementor-widget-container">

                                                        <div class="hb-icon-box-grid hb-icon-box-grid-iconbox1">

                                                            <div

                                                                class="row gap-xl-0 gap-lg-0 gap-md-0 gap-sm-0 gap-0 mt-xl-40 mt-lg-40 mt-md-40 mt-sm-30 mt-40 rm-mt-xl-12 rm-mt-lg-12 rm-mt-md-12 rm-mt-sm-12 rm-mt-12"

                                                            >

                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                    <div class="hb-icon-box hb-iconbox1 hb-icon-box-img box-shadow text-left">

                                                                        <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                                            <span class="hb-icon-box__icon-inner">

                                                                                <img width="1" height="1" src="wp-content/uploads/2020/05/1.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                                            </span>

                                                                        </div>



                                                                        <div class="hb-icon-box__entry">

                                                                            <h2 class="hb-icon-box__title">Fast Company Performance</h2>

                                                                            <p class="hb-icon-box__desc">We already helped a lot of clients to achieve the same goal. Will provide a team that is dedicated only towards your business.</p>

                                                                        </div>

                                                                    </div>

                                                                </div>



                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                    <div class="hb-icon-box hb-iconbox1 hb-icon-box-img box-shadow text-left">

                                                                        <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                                            <span class="hb-icon-box__icon-inner">

                                                                                <img width="1" height="1" src="wp-content/uploads/2020/05/3.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                                            </span>

                                                                        </div>



                                                                        <div class="hb-icon-box__entry">

                                                                            <h2 class="hb-icon-box__title">Unparalleled Track Record</h2>

                                                                            <p class="hb-icon-box__desc">Will take care of your marketing.
                                                                            Yes of course, affordable rates is one of  our major specialization</p>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="elementor-element elementor-element-ff8b5bc elementor-column elementor-col-50 elementor-inner-column" data-id="ff8b5bc" data-element_type="column">

                                        <div class="elementor-column-wrap elementor-element-populated">

                                            <div class="elementor-widget-wrap">

                                                <div

                                                    class="elementor-element elementor-element-be280df elementor-widget elementor-widget-hbtheme-icon-box-grid"

                                                    data-id="be280df"

                                                    data-element_type="widget"

                                                    data-widget_type="hbtheme-icon-box-grid.default"

                                                >

                                                    <div class="elementor-widget-container">

                                                        <div class="hb-icon-box-grid hb-icon-box-grid-iconbox1">

                                                            <div

                                                                class="row gap-xl-0 gap-lg-0 gap-md-0 gap-sm-0 gap-0 mt-xl-40 mt-lg-40 mt-md-40 mt-sm-40 mt-40 rm-mt-xl-12 rm-mt-lg-12 rm-mt-md-12 rm-mt-sm-12 rm-mt-12"

                                                            >

                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                    <div class="hb-icon-box hb-iconbox1 hb-icon-box-img box-shadow text-left">

                                                                        <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                                            <span class="hb-icon-box__icon-inner">

                                                                                <img width="1" height="1" src="wp-content/uploads/2020/05/2.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                                            </span>

                                                                        </div>



                                                                        <div class="hb-icon-box__entry">

                                                                            <h2 class="hb-icon-box__title">Technical Support</h2>

                                                                            <p class="hb-icon-box__desc">We also have developers in our team. In case any technical help is required with your websites</p>

                                                                        </div>

                                                                    </div>

                                                                </div>



                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                                    <div class="hb-icon-box hb-iconbox1 hb-icon-box-img box-shadow text-left">

                                                                        <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                                            <span class="hb-icon-box__icon-inner">

                                                                                <img width="1" height="1" src="wp-content/uploads/2020/05/4.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                                            </span>

                                                                        </div>



                                                                        <div class="hb-icon-box__entry">

                                                                            <h2 class="hb-icon-box__title">Regular Updates and 24/7 Support</h2>
                                                                            <p class="hb-icon-box__desc">Will update you on timely basis and provide you the updates and we have 24*7 Support</p>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>

                    </div>

                </div>

            </div>

            <div class="elementor-element elementor-element-0f909c4 elementor-column elementor-col-33 elementor-top-column" data-id="0f909c4" data-element_type="column">

                <div class="elementor-column-wrap">

                    <div class="elementor-widget-wrap"></div>

                </div>

            </div>

            <div class="elementor-element elementor-element-f412376 elementor-column elementor-col-33 elementor-top-column" data-id="f412376" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-19deb33 elementor-widget elementor-widget-hbtheme-heading"

                            data-id="19deb33"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">WHY CHOOSE US</h4>

                                    <h2 class="hb-heading__title">The Benefits You’ll Get With CypherDash</h2>

                                    <p class="hb-heading__desc">

                                    If you are searching for the same, then you must get in touch or search for a different digital marketing agency then why choose cypherdash?

                                    </p>
                                    <p>Here are the key points that why you choose as your SEO Optimization Company</p>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-eea92c5 elementor-widget elementor-widget-hbtheme-button"

                            data-id="eea92c5"

                            data-element_type="widget"

                            data-widget_type="hbtheme-button.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-btn-wrap">

                                    <a href="#" class="hb-btn hb-btn--primary hb-btn--icon-right hb-btn--shadow hb-btn--round">

                                        <span>FREE SEO CONSULTATION</span>

                                        <i class="arrow_right"></i>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
@section('what-we-do')

<section

    class="elementor-element elementor-element-bd4c9bb elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="bd4c9bb"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-4242d52 elementor-column elementor-col-100 elementor-top-column" data-id="4242d52" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-81d2e2f elementor-widget elementor-widget-hbtheme-heading"

                            data-id="81d2e2f"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">WHAT WE DO</h4>

                                    <h2 class="hb-heading__title">Key areas or services on which we will work for you</h2>

                                    <p class="hb-heading__desc">Our main aim is to provide customer satisfaction and make your Websites SEO friendly via our best SEO Services through our experts.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section

    class="elementor-element elementor-element-f3f6ba6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="f3f6ba6"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-ab2765b elementor-column elementor-col-100 elementor-top-column" data-id="ab2765b" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-fdb6534 elementor-widget elementor-widget-hbtheme-icon-box-carousel"

                            data-id="fdb6534"

                            data-element_type="widget"

                            data-widget_type="hbtheme-icon-box-carousel.default"

                        >

                            <div class="elementor-widget-container">

                                <div

                                    class="hb-owl-container hb-icon-box-carousel hb-icon-box-carousel-iconbox2 owl-nav-s1 owl-dots-s8 owl-nav-icon owl-nav-middle owl-nav-horizontal owl-nav-square owl-dots-center"

                                >

                                    <div class="hb-owl-carousel">

                                        <div

                                            class="owl-carousel"

                                            data-owl-carousel='{"items":1,"slideBy":1,"autoplay":false,"autoplayTimeout":5000,"autoplayHoverPause":false,"smartSpeed":250,"margin":30,"stagePadding":20,"loop":false,"center":false,"mouseDrag":true,"touchDrag":true,"merge":false,"autoWidth":false,"startPosition":0,"nav":false,"navText":["&lt;i class=\"arrow_carrot-left\"&gt;&lt;\/i&gt;","&lt;i class=\"arrow_carrot-right\"&gt;&lt;\/i&gt;"],"dots":true,"dotsOutside":true,"navOutside":true,"hbthemeContainer":".hb-owl-container","wrapClass":"owl-nav-s1 owl-dots-s8 owl-nav-icon owl-nav-middle owl-nav-horizontal owl-nav-square owl-dots-center","responsive":{"992":{"items":3,"slideBy":1,"margin":30,"stagePadding":20,"nav":false,"dots":true},"576":{"items":2,"slideBy":1,"margin":30,"stagePadding":20,"nav":false,"dots":true}}}'

                                        >

                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_1.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Search Engine Optimization Services</h2>

                                                        <p class="hb-icon-box__desc">Will bring your site on the top whenever someone searches for the services you provide. </p>
                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>



                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow active">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_2.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Social Media Marketing Services</h2>

                                                        <p class="hb-icon-box__desc">We will enhance visibility of your site on different social marketing platforms like facebook, instagram, twitter & So on</p>

                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>



                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_3.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Pay Per Click Marketing</h2>

                                                        <p class="hb-icon-box__desc">Do you need to generate immediate sales and targeted leads? As one of the top Google Premier…</p>

                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>



                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_4.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Email Marketing Services</h2>

                                                        <p class="hb-icon-box__desc">will keep your prior customers and subscribers updated and will add new.
</p>

                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>



                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_5.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Content Marketing Services</h2>

                                                        <p class="hb-icon-box__desc">Improve your content, make it more readable and convenient to the search for people.</p>

                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>



                                            <div class="hb-icon-box hb-iconbox2 hb-icon-box-img text-left box-shadow">

                                                <a href="#">

                                                    <div class="hb-icon-box__icon hb-icon-box__icon-img">

                                                        <span class="hb-icon-box__icon-inner hb-icon-box-anime-morphing">

                                                            <img width="1" height="1" src="wp-content/uploads/2020/05/icon_service_6.svg" class="attachment-thumbnail size-thumbnail" alt="" />

                                                        </span>

                                                    </div>



                                                    <div class="hb-icon-box__entry">

                                                        <h2 class="hb-icon-box__title">Site Optimization</h2>

                                                        <p class="hb-icon-box__desc">In this section, will optimize your site i,e. Make it load fast and check for bugs and errors in case any</p>

                                                        <span class="hb-icon-box__more text-uppercase">LEARN MORE <i class="arrow_right"></i></span>

                                                    </div>

                                                </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection



@section('our-portfolio')

<!-- <section

    class="elementor-element elementor-element-11096bf elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="11096bf"

    data-element_type="section"

    data-settings='{"background_background":"classic"}'

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-6b0178c elementor-column elementor-col-33 elementor-top-column" data-id="6b0178c" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-d23fa95 elementor-widget elementor-widget-hbtheme-heading"

                            data-id="d23fa95"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">CASE STUDIES</h4>

                                    <h2 class="hb-heading__title">Our Digital Marketing Portfolio</h2>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div

                class="elementor-element elementor-element-d3f66e3 elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-33 elementor-top-column"

                data-id="d3f66e3"

                data-element_type="column"

            >

                <div class="elementor-column-wrap">

                    <div class="elementor-widget-wrap"></div>

                </div>

            </div>

            <div class="elementor-element elementor-element-5c5785c elementor-column elementor-col-33 elementor-top-column" data-id="5c5785c" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-fb613ae elementor-widget elementor-widget-text-editor"

                            data-id="fb613ae"

                            data-element_type="widget"

                            data-widget_type="text-editor.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="elementor-text-editor elementor-clearfix">

                                    <p>We’re lucky to have the opportunity to join the efforts of so many great companies in many different industries.</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section> -->

<!-- <section

    class="elementor-element elementor-element-37c0b32 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="37c0b32"

    data-element_type="section"

    data-settings='{"background_background":"classic"}'

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-917a52b elementor-column elementor-col-100 elementor-top-column" data-id="917a52b" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-d3cda2e elementor-widget elementor-widget-hbtheme-portfolio-carousel"

                            data-id="d3cda2e"

                            data-element_type="widget"

                            data-widget_type="hbtheme-portfolio-carousel.default"

                        >

                            <div class="elementor-widget-container">

                                <div

                                    class="hb-owl-container hb-por-carousel hb-por-carousel-por1 owl-nav-s1 owl-dots-s8 owl-nav-vertical-left owl-nav-box-shadow owl-nav-top-left owl-nav-circle owl-nav-vertical owl-nav-icon owl-dots-center"

                                >

                                    <div class="hb-owl-carousel">

                                        <div

                                            class="owl-carousel"

                                            data-owl-carousel='{"items":1,"slideBy":1,"autoplay":false,"autoplayTimeout":5000,"autoplayHoverPause":false,"smartSpeed":250,"margin":30,"stagePadding":20,"loop":false,"center":false,"mouseDrag":true,"touchDrag":true,"merge":false,"autoWidth":false,"startPosition":0,"nav":false,"navText":["&lt;i class=\"arrow_left\"&gt;&lt;\/i&gt;","&lt;i class=\"arrow_right\"&gt;&lt;\/i&gt;"],"dots":true,"dotsOutside":true,"navOutside":true,"hbthemeContainer":".hb-owl-container","wrapClass":"owl-nav-s1 owl-dots-s8 owl-nav-vertical-left owl-nav-box-shadow owl-nav-top-left owl-nav-circle owl-nav-vertical owl-nav-icon owl-dots-center","responsive":{"480":{"items":2,"slideBy":1,"margin":30,"stagePadding":20,"nav":false,"dots":true},"992":{"items":3,"slideBy":1,"margin":30,"stagePadding":20,"nav":false,"dots":true},"1200":{"items":3,"slideBy":1,"margin":30,"stagePadding":20,"nav":true,"dots":false}}}'

                                        >

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/thefox-entertainment/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/1.jpg);">

                                                                <img src="wp-content/uploads/2020/04/1.jpg" alt="TheFox Entertainment" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/thefox-entertainment/index.html">TheFox Entertainment</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>Link Building</span>

                                                                <span>SEO Services</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/hercules-education/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/2.jpg);">

                                                                <img src="wp-content/uploads/2020/04/2.jpg" alt="Hercules Education" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/hercules-education/index.html">Hercules Education</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>Ecommerce SEO</span>

                                                                <span>SEO Services</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/costa-rica-escapes/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/3.jpg);">

                                                                <img src="wp-content/uploads/2020/04/3.jpg" alt="Costa Rica Escapes" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/costa-rica-escapes/index.html">Costa Rica Escapes</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>SEO Services</span>

                                                                <span>Social Media</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/travel-agency/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/6.jpg);">

                                                                <img src="wp-content/uploads/2020/04/6.jpg" alt="Travel Agency" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/travel-agency/index.html">Travel Agency</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>Link Building</span>

                                                                <span>SEO Services</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/brand-ninja/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/4.jpg);">

                                                                <img src="wp-content/uploads/2020/04/4.jpg" alt="Brand Ninja" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/brand-ninja/index.html">Brand Ninja</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>SEO Services</span>

                                                                <span>Social Media</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="">

                                                <div class="hb-por box-shadow hb-por1">

                                                    <div class="hb-por__thumbnail">

                                                        <a href="case-study/sun-world-grapes/index.html">

                                                            <div class="hb-por__img bg-scroll" style="background-image: url(wp-content/uploads/2020/04/5-737x1024.jpg);">

                                                                <img src="wp-content/uploads/2020/04/5-737x1024.jpg" alt="Sun World Grapes" />

                                                            </div>

                                                        </a>

                                                    </div>



                                                    <div class="hb-por__entry">

                                                        <h2 class="hb-por__title"><a href="case-study/sun-world-grapes/index.html">Sun World Grapes</a></h2>

                                                        <div class="hb-por__metas">

                                                            <div class="hb-por__categories">

                                                                <span>Ecommerce SEO</span>

                                                                <span>SEO Services</span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section> -->

@endsection



@section('testiomonials')

<section

    class="elementor-element elementor-element-431320d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="431320d"

    data-element_type="section"

    data-settings='{"background_background":"classic"}'

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-eae6d0f elementor-column elementor-col-100 elementor-top-column" data-id="eae6d0f" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-312ae93 elementor-widget elementor-widget-hbtheme-heading"

                            data-id="312ae93"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">TESTIOMONIALS</h4>

                                    <h2 class="hb-heading__title">Our Happy Clients</h2>

                                    <p class="hb-heading__desc">We’re lucky to have the opportunity to join the efforts of so many great companies in many different industries.</p>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-0cf37ff elementor-widget elementor-widget-hbtheme-testimonial-grid"

                            data-id="0cf37ff"

                            data-element_type="widget"

                            data-widget_type="hbtheme-testimonial-grid.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-testimonial-grid hb-testimonial-grid-testimonial1">

                                    <div class="row gap-xl-0 gap-lg-0 gap-md-0 gap-sm-0 gap-0 mt-xl-45 mt-lg-40 mt-md-40 mt-sm-40 mt-40 rm-mt-xl-12 rm-mt-lg-12 rm-mt-md-12 rm-mt-sm-12 rm-mt-12">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="hb-testimonial hb-testimonial1 text-left clearfix active">

                                                <div class="hb-testimonial__review box-shadow">

                                                    “ Very useful and it generates reports easy to understand by clients. I like the simple checks it performs for site performance. it's easy to see where

                                                    code problems have been left in place.”

                                                </div>



                                                <div class="hb-proin proin-avatar-top text-center">

                                                    <div class="hb-proin__avatar">

                                                        <img class="circle" src="wp-content/uploads/2020/04/avater4.jpg" alt="Jordan Jenkins" />

                                                    </div>



                                                    <div class="hb-proin__entry">

                                                        <h4 class="hb-proin__name">Jordan Jenkins</h4>



                                                        <span class="hb-proin__pos">CEO at Medusa</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="hb-testimonial hb-testimonial1 text-left clearfix reverse">

                                                <div class="hb-testimonial__review box-shadow">

                                                    “Dan understands online marketing, organic SEO and content marketing better than anybody else I know. He brings real-world experience to the table,

                                                    citing facts and figures, instead of merely stating thoughts.”

                                                </div>



                                                <div class="hb-proin proin-avatar-top text-center">

                                                    <div class="hb-proin__avatar">

                                                        <img class="circle" src="wp-content/uploads/2020/04/avater5.jpg" alt="Daniel Andrew H." />

                                                    </div>



                                                    <div class="hb-proin__entry">

                                                        <h4 class="hb-proin__name">Daniel Andrew H.</h4>



                                                        <span class="hb-proin__pos">Marketing Director</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>



                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="hb-testimonial hb-testimonial1 text-left clearfix">

                                                <div class="hb-testimonial__review box-shadow">

                                                    “We started small in the beginning with John teaching the online editors about keyword research and how powerful it could be. John worked with them for

                                                    a number of months and what transpired was truly amazing.”

                                                </div>



                                                <div class="hb-proin proin-avatar-top text-center">

                                                    <div class="hb-proin__avatar">

                                                        <img class="circle" src="wp-content/uploads/2020/04/avater6.jpg" alt="Corey Hartford" />

                                                    </div>



                                                    <div class="hb-proin__entry">

                                                        <h4 class="hb-proin__name">Corey Hartford</h4>



                                                        <span class="hb-proin__pos">Sales Manager</span>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-6c507c3 elementor-widget elementor-widget-hbtheme-button"

                            data-id="6c507c3"

                            data-element_type="widget"

                            data-widget_type="hbtheme-button.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-btn-wrap">

                                    <a href="#" class="hb-btn hb-btn--primary hb-btn--shadow hb-btn--round">

                                        <span>SEE ALL REVIEWS</span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- <section

    class="elementor-element elementor-element-95ce290 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="95ce290"

    data-element_type="section"

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-378fbfb elementor-column elementor-col-100 elementor-top-column" data-id="378fbfb" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-e113b52 elementor-widget elementor-widget-hbtheme-heading"

                            data-id="e113b52"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">TESTIOMONIALS</h4>

                                    <h2 class="hb-heading__title">Our Happy Clients</h2>

                                    <p class="hb-heading__desc">We’re lucky to have the opportunity to join the efforts of so many great companies in many different industries.</p>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-fe3b2cb elementor-widget elementor-widget-hbtheme-posts-carousel"

                            data-id="fe3b2cb"

                            data-element_type="widget"

                            data-widget_type="hbtheme-posts-carousel.default"

                        >

                            <div class="elementor-widget-container">

                                <div

                                    class="hb-owl-container hb-posts-carousel hb-posts-carousel-post2 owl-nav-s1 owl-dots-s8 owl-nav-box-shadow owl-nav-circle owl-nav-icon owl-nav-middle owl-nav-horizontal owl-dots-center"

                                >

                                    <div class="hb-owl-carousel">

                                        <div

                                            class="owl-carousel"

                                            data-owl-carousel='{"items":1,"slideBy":1,"autoplay":false,"autoplayTimeout":5000,"autoplayHoverPause":false,"smartSpeed":250,"margin":30,"stagePadding":20,"loop":false,"center":false,"mouseDrag":true,"touchDrag":true,"merge":false,"autoWidth":false,"startPosition":0,"nav":true,"navText":["&lt;i class=\"arrow_left\"&gt;&lt;\/i&gt;","&lt;i class=\"arrow_right\"&gt;&lt;\/i&gt;"],"dots":false,"dotsOutside":true,"navOutside":true,"hbthemeContainer":".hb-owl-container","wrapClass":"owl-nav-s1 owl-dots-s8 owl-nav-box-shadow owl-nav-circle owl-nav-icon owl-nav-middle owl-nav-horizontal owl-dots-center","responsive":{"576":{"items":2,"slideBy":1,"margin":30,"stagePadding":20,"nav":true,"dots":false},"768":{"items":2,"slideBy":1,"margin":30,"stagePadding":20,"nav":true,"dots":false},"992":{"items":3,"slideBy":1,"margin":30,"stagePadding":20,"nav":true,"dots":false},"1200":{"items":3,"slideBy":1,"margin":30,"stagePadding":20,"nav":true,"dots":false}}}'

                                        >

                                            <div

                                                class="hb-post box-shadow hb-post2 post-100 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media tag-digital tag-local-seo tag-video-seo"

                                            >

                                                <div class="hb-post__media">

                                                    <div class="hb-post__thumbnail">

                                                        <a

                                                            class="hb-post__thumbnail-link bg-scroll"

                                                            href="top-seo-benefits-of-responsive-web-design/index.html"

                                                            style="background-image: url(wp-content/uploads/2020/04/post9-1024x682.jpg);"

                                                        >

                                                            <img src="wp-content/uploads/2020/04/post9-1024x682.jpg" alt="Top SEO Benefits of Responsive Web Design" />

                                                        </a>

                                                    </div>



                                                    <span class="hb-post-meta__cat hb-post-meta__cat2">

                                                        <span class="hb-post-meta__cat-links"><a href="category/social-media/index.html" rel="category tag">Social Media</a></span>

                                                    </span>

                                                </div>



                                                <div class="hb-post__entry">

                                                    <h2 class="hb-post__title">

                                                        <a href="top-seo-benefits-of-responsive-web-design/index.html" title="Top SEO Benefits of Responsive Web Design">

                                                            Top SEO Benefits of Responsive Web Design

                                                        </a>

                                                    </h2>



                                                    <div class="hb-post__metas">

                                                        <div class="hb-post__author-date">

                                                            <span class="hb-post-meta__author">

                                                                <a href="author/qrion/index.html">

                                                                    <span class="hb-post-meta__author-avatar">

                                                                        <img

                                                                            alt=""

                                                                            src="wp-content/uploads/2020/04/avater3.jpg"

                                                                            srcset="https://cdn.shortpixel.ai/client/q_glossy, ret_img/https://qrion.hbtheme.com/wp-content/uploads/2020/04/avater3.jpg 2x"

                                                                            class="avatar avatar-150 photo"

                                                                            height="150"

                                                                            width="150"

                                                                        />

                                                                    </span>



                                                                    <span class="hb-post-meta__author-content">

                                                                        <span class="hb-post-meta__author-name">Amanda Ferm</span>

                                                                    </span>

                                                                </a>

                                                            </span>

                                                            <span class="hb-post-meta__date">

                                                                <span class="hb-post-meta__date-text"><a href="top-seo-benefits-of-responsive-web-design/index.html">April 22, 2020</a></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div

                                                class="hb-post box-shadow hb-post2 post-105 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media tag-careers tag-content-marketing tag-seo"

                                            >

                                                <div class="hb-post__media">

                                                    <div class="hb-post__thumbnail">

                                                        <a

                                                            class="hb-post__thumbnail-link bg-scroll"

                                                            href="linkedin-for-business-growth-lead-generation/index.html"

                                                            style="background-image: url(wp-content/uploads/2020/04/post8-1024x682.jpg);"

                                                        >

                                                            <img src="wp-content/uploads/2020/04/post8-1024x682.jpg" alt="Linkedin For Business Growth &#038; Lead Generation" />

                                                        </a>

                                                    </div>



                                                    <span class="hb-post-meta__cat hb-post-meta__cat2">

                                                        <span class="hb-post-meta__cat-links"><a href="category/social-media/index.html" rel="category tag">Social Media</a></span>

                                                    </span>

                                                </div>



                                                <div class="hb-post__entry">

                                                    <h2 class="hb-post__title">

                                                        <a href="linkedin-for-business-growth-lead-generation/index.html" title="Linkedin For Business Growth &#038; Lead Generation">

                                                            Linkedin For Business Growth &#038; Lead Generation

                                                        </a>

                                                    </h2>



                                                    <div class="hb-post__metas">

                                                        <div class="hb-post__author-date">

                                                            <span class="hb-post-meta__author">

                                                                <a href="author/winter-thielen/index.html">

                                                                    <span class="hb-post-meta__author-avatar">

                                                                        <img

                                                                            alt=""

                                                                            src="wp-content/uploads/2020/04/avater2.jpg"

                                                                            srcset="https://cdn.shortpixel.ai/client/q_glossy, ret_img/https://qrion.hbtheme.com/wp-content/uploads/2020/04/avater2.jpg 2x"

                                                                            class="avatar avatar-150 photo"

                                                                            height="150"

                                                                            width="150"

                                                                        />

                                                                    </span>



                                                                    <span class="hb-post-meta__author-content">

                                                                        <span class="hb-post-meta__author-name">Thielen Winter</span>

                                                                    </span>

                                                                </a>

                                                            </span>

                                                            <span class="hb-post-meta__date">

                                                                <span class="hb-post-meta__date-text"><a href="linkedin-for-business-growth-lead-generation/index.html">April 22, 2020</a></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div

                                                class="hb-post box-shadow hb-post2 post-104 post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-blogging tag-seo tag-video-seo"

                                            >

                                                <div class="hb-post__media">

                                                    <div class="hb-post__thumbnail">

                                                        <a

                                                            class="hb-post__thumbnail-link bg-scroll"

                                                            href="top-10-video-marketing-strategies-for-2019/index.html"

                                                            style="background-image: url(wp-content/uploads/2020/04/post7-1024x682.jpg);"

                                                        >

                                                            <img src="wp-content/uploads/2020/04/post7-1024x682.jpg" alt="Top 10 Video Marketing Strategies for 2019" />

                                                        </a>

                                                    </div>



                                                    <span class="hb-post-meta__cat hb-post-meta__cat2">

                                                        <span class="hb-post-meta__cat-links"><a href="category/business/index.html" rel="category tag">Business</a></span>

                                                    </span>

                                                </div>



                                                <div class="hb-post__entry">

                                                    <h2 class="hb-post__title">

                                                        <a href="top-10-video-marketing-strategies-for-2019/index.html" title="Top 10 Video Marketing Strategies for 2019">

                                                            Top 10 Video Marketing Strategies for 2019

                                                        </a>

                                                    </h2>



                                                    <div class="hb-post__metas">

                                                        <div class="hb-post__author-date">

                                                            <span class="hb-post-meta__author">

                                                                <a href="author/jessie-yeung/index.html">

                                                                    <span class="hb-post-meta__author-avatar">

                                                                        <img

                                                                            alt=""

                                                                            src="wp-content/uploads/2020/04/avater1.jpg"

                                                                            srcset="https://cdn.shortpixel.ai/client/q_glossy, ret_img/https://qrion.hbtheme.com/wp-content/uploads/2020/04/avater1.jpg 2x"

                                                                            class="avatar avatar-150 photo"

                                                                            height="150"

                                                                            width="150"

                                                                        />

                                                                    </span>



                                                                    <span class="hb-post-meta__author-content">

                                                                        <span class="hb-post-meta__author-name">Yeung Jessie</span>

                                                                    </span>

                                                                </a>

                                                            </span>

                                                            <span class="hb-post-meta__date">

                                                                <span class="hb-post-meta__date-text"><a href="top-10-video-marketing-strategies-for-2019/index.html">April 22, 2020</a></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div

                                                class="hb-post box-shadow hb-post2 post-103 post type-post status-publish format-standard has-post-thumbnail hentry category-website-design tag-digital tag-local-seo tag-video-seo"

                                            >

                                                <div class="hb-post__media">

                                                    <div class="hb-post__thumbnail">

                                                        <a

                                                            class="hb-post__thumbnail-link bg-scroll"

                                                            href="how-to-improve-web-page-speed-in-2020/index.html"

                                                            style="background-image: url(wp-content/uploads/2020/04/post6-1024x682.jpg);"

                                                        >

                                                            <img src="wp-content/uploads/2020/04/post6-1024x682.jpg" alt="How to Improve Web Page Speed in 2020?" />

                                                        </a>

                                                    </div>



                                                    <span class="hb-post-meta__cat hb-post-meta__cat2">

                                                        <span class="hb-post-meta__cat-links"><a href="category/website-design/index.html" rel="category tag">Website Design</a></span>

                                                    </span>

                                                </div>



                                                <div class="hb-post__entry">

                                                    <h2 class="hb-post__title">

                                                        <a href="how-to-improve-web-page-speed-in-2020/index.html" title="How to Improve Web Page Speed in 2020?">How to Improve Web Page Speed in 2020?</a>

                                                    </h2>



                                                    <div class="hb-post__metas">

                                                        <div class="hb-post__author-date">

                                                            <span class="hb-post-meta__author">

                                                                <a href="author/jessie-yeung/index.html">

                                                                    <span class="hb-post-meta__author-avatar">

                                                                        <img

                                                                            alt=""

                                                                            src="wp-content/uploads/2020/04/avater1.jpg"

                                                                            srcset="https://cdn.shortpixel.ai/client/q_glossy, ret_img/https://qrion.hbtheme.com/wp-content/uploads/2020/04/avater1.jpg 2x"

                                                                            class="avatar avatar-150 photo"

                                                                            height="150"

                                                                            width="150"

                                                                        />

                                                                    </span>



                                                                    <span class="hb-post-meta__author-content">

                                                                        <span class="hb-post-meta__author-name">Yeung Jessie</span>

                                                                    </span>

                                                                </a>

                                                            </span>

                                                            <span class="hb-post-meta__date">

                                                                <span class="hb-post-meta__date-text"><a href="how-to-improve-web-page-speed-in-2020/index.html">April 22, 2020</a></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                            <div

                                                class="hb-post box-shadow hb-post2 post-102 post type-post status-publish format-standard has-post-thumbnail hentry category-social-media tag-digital tag-local-seo tag-video-seo"

                                            >

                                                <div class="hb-post__media">

                                                    <div class="hb-post__thumbnail">

                                                        <a

                                                            class="hb-post__thumbnail-link bg-scroll"

                                                            href="part-1-grow-your-business-and-leads-with-seo/index.html"

                                                            style="background-image: url(wp-content/uploads/2020/04/post5-1024x682.jpg);"

                                                        >

                                                            <img src="wp-content/uploads/2020/04/post5-1024x682.jpg" alt="Part 1: Grow Your Business and Leads With SEO" />

                                                        </a>

                                                    </div>



                                                    <span class="hb-post-meta__cat hb-post-meta__cat2">

                                                        <span class="hb-post-meta__cat-links"><a href="category/social-media/index.html" rel="category tag">Social Media</a></span>

                                                    </span>

                                                </div>



                                                <div class="hb-post__entry">

                                                    <h2 class="hb-post__title">

                                                        <a href="part-1-grow-your-business-and-leads-with-seo/index.html" title="Part 1: Grow Your Business and Leads With SEO">

                                                            Part 1: Grow Your Business and Leads With SEO

                                                        </a>

                                                    </h2>



                                                    <div class="hb-post__metas">

                                                        <div class="hb-post__author-date">

                                                            <span class="hb-post-meta__author">

                                                                <a href="author/qrion/index.html">

                                                                    <span class="hb-post-meta__author-avatar">

                                                                        <img

                                                                            alt=""

                                                                            src="wp-content/uploads/2020/04/avater3.jpg"

                                                                            srcset="https://cdn.shortpixel.ai/client/q_glossy, ret_img/https://qrion.hbtheme.com/wp-content/uploads/2020/04/avater3.jpg 2x"

                                                                            class="avatar avatar-150 photo"

                                                                            height="150"

                                                                            width="150"

                                                                        />

                                                                    </span>



                                                                    <span class="hb-post-meta__author-content">

                                                                        <span class="hb-post-meta__author-name">Amanda Ferm</span>

                                                                    </span>

                                                                </a>

                                                            </span>

                                                            <span class="hb-post-meta__date">

                                                                <span class="hb-post-meta__date-text"><a href="part-1-grow-your-business-and-leads-with-seo/index.html">April 22, 2020</a></span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section> -->

@endsection



@section('blog')

<section

    class="elementor-element elementor-element-f2db6f0 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"

    data-id="f2db6f0"

    data-element_type="section"

    data-settings='{"background_background":"classic"}'

>

    <div class="elementor-container elementor-column-gap-default">

        <div class="elementor-row">

            <div class="elementor-element elementor-element-fdb2ee5 elementor-column elementor-col-33 elementor-top-column" data-id="fdb2ee5" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-0710c74 elementor-widget elementor-widget-hbtheme-image-animation"

                            data-id="0710c74"

                            data-element_type="widget"

                            data-widget_type="hbtheme-image-animation.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-image-animation" data-mousemove-parallax='{"hoverOnly":false,"relativeInput":true,"clipRelativeInput":false,"selector":".mouse-parallax"}'>

                                    <div class="hb-image-animation__item elementor-repeater-item-422b5e0 active" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0s; -webkit-animation-delay: 0s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im1.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-10b7d99" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0.2s; -webkit-animation-delay: 0.2s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im2.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-2e9edea" data-depth="">

                                        <div class="animation-infinite fadeIn" style="animation-delay: 0.4s; -webkit-animation-delay: 0.4s; animation-duration: 1.3s; -webkit-animation-duration: 1.3s;">

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im3.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-918cf22" data-depth="">

                                        <div

                                            class="animation-infinite moveUpDown"

                                            style="animation-delay: 0s; -webkit-animation-delay: 0s; animation-duration: 2s; -webkit-animation-duration: 2s; animation-direction: alternate;"

                                        >

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im5.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-8ca96d0" data-depth="">

                                        <div

                                            class="animation-infinite moveLeftRight"

                                            style="animation-delay: 1s; -webkit-animation-delay: 1s; animation-duration: 2s; -webkit-animation-duration: 2s; animation-direction: alternate;"

                                        >

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im6.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-7318a1f" data-depth="">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im7.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>



                                    <div class="hb-image-animation__item elementor-repeater-item-6ff3662 mouse-parallax" data-depth="0.1">

                                        <div class="animation-infinite" style="">

                                            <img

                                                width="582"

                                                height="604"

                                                src="wp-content/uploads/2020/04/im4.png"

                                                class="attachment-large size-large"

                                                alt=""

                                                sizes="(max-width: 582px) 100vw, 582px"

                                            />

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div

                class="elementor-element elementor-element-62073ac elementor-hidden-tablet elementor-hidden-phone elementor-column elementor-col-33 elementor-top-column"

                data-id="62073ac"

                data-element_type="column"

            >

                <div class="elementor-column-wrap">

                    <div class="elementor-widget-wrap"></div>

                </div>

            </div>

            <div class="elementor-element elementor-element-1dfb508 elementor-column elementor-col-33 elementor-top-column" data-id="1dfb508" data-element_type="column">

                <div class="elementor-column-wrap elementor-element-populated">

                    <div class="elementor-widget-wrap">

                        <div

                            class="elementor-element elementor-element-607c72e elementor-widget elementor-widget-hbtheme-heading"

                            data-id="607c72e"

                            data-element_type="widget"

                            data-widget_type="hbtheme-heading.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-heading">

                                    <h4 class="hb-heading__subtitle">CONTACT US</h4>

                                    <h2 class="hb-heading__title">Request Project Estimate</h2>

                                </div>

                            </div>

                        </div>

                        <div

                            class="elementor-element elementor-element-a141395 elementor-widget elementor-widget-hbtheme-contact-form7"

                            data-id="a141395"

                            data-element_type="widget"

                            data-widget_type="hbtheme-contact-form7.default"

                        >

                            <div class="elementor-widget-container">

                                <div class="hb-contact-form7 hb-contact-wpcf7-2">

                                    <div role="form" class="wpcf7" id="wpcf7-f6-p15-o1" lang="en-US" dir="ltr">

                                        <div class="screen-reader-response"></div>

                                        <form action="{{ url('/contact-us') }}" method="post" class="wpcf7-form" novalidate="novalidate" id="contactForm">

                                            @csrf

                                            <div class="row">

                                                <div class="col-sm-6">

                                                    <span class="wpcf7-form-control-wrap your-name">

                                                        <input

                                                            type="text"

                                                            name="name"

                                                            size="40"

                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"

                                                            aria-required="true"

                                                            aria-invalid="false"

                                                            placeholder="Name *"

                                                        />

                                                    </span>

                                                    @error('name')

                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $message }}</strong>

                                                        </span>

                                                    @enderror

                                                </div>

                                                

                                                <div class="col-sm-6">

                                                    <span class="wpcf7-form-control-wrap your-email">

                                                        <input

                                                            type="email"

                                                            name="email"

                                                            value=""

                                                            size="40"

                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"

                                                            aria-required="true"

                                                            aria-invalid="false"

                                                            placeholder="Email *"

                                                        />

                                                    </span>

                                                    @error('email')

                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $message }}</strong>

                                                        </span>

                                                    @enderror

                                                </div>

                                               

                                                <div class="col-sm-6">

                                                    <span class="wpcf7-form-control-wrap your-phone">

                                                        <input

                                                            type="text"

                                                            name="phone"

                                                            value=""

                                                            id="phone"

                                                            size="40"

                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"

                                                            aria-required="true"

                                                            aria-invalid="false"

                                                            placeholder="Phone number *"

                                                        />

                                                    </span>

                                                    <span class="invalid-feedback" id="phoneErrorLabel" role="alert" style="display: none;">

                                                        <strong>Invalid Phone Number</strong>

                                                    </span>

                                                    @error('phone')

                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $message }}</strong>

                                                        </span>

                                                    @enderror

                                                </div>

                                                

                                                

                                                <div class="col-sm-6">

                                                    <span class="wpcf7-form-control-wrap your-site">

                                                        <input type="url" name="website" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Website" />

                                                    </span>

                                                    @error('website')

                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $message }}</strong>

                                                        </span>

                                                    @enderror

                                                </div>

                                                

                                                <div class="col-sm-12">

                                                    <span class="wpcf7-form-control-wrap your-message">

                                                        <textarea

                                                            name="yourMessage"

                                                            cols="4"

                                                            rows="5"

                                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"

                                                            aria-required="true"

                                                            aria-invalid="false"

                                                            placeholder="Message…"

                                                        ></textarea>

                                                    </span>

                                                    @error('message')

                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $message }}</strong>

                                                        </span>

                                                    @enderror

                                                </div>

                                                

                                                <div class="col-sm-12"><input type="submit" value="SUMMIT" class="wpcf7-form-control wpcf7-submit" /></div>

                                            </div>

                                            <div class="wpcf7-response-output wpcf7-display-none"></div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection



@include('layouts.footer')