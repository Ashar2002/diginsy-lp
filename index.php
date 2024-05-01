<?php
// Set cache control headers
header("Cache-Control: max-age=3600, public"); // Cache images for 1 hour
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digincy | Web design Services</title>
    <link rel="shortcut icon" href="./images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/all.css">
</head>
<style>
    .portfolio-slider {
        scrollbar-width: none !important;
    }

    .portfolio-slider ::-webkit-scrollbar {
        display: none !important;
    }
</style>

<body>
    <header class="container custom-container">
        <div class="row justify-content-between gap-md-4 flex-wrap align-items-sm-start align-items-center ">
            <div class="col-5 text-sm-start text-center col-md-4 col-lg-3">
                <img src="./images/logo.png" class="img-fluid" width="115" alt="">
            </div>
            <div class="col-7 text-end col-md-4 col-lg-3">
                <button style="max-width: 233px;" data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme font-14">Start your project</button>
            </div>
        </div>
    </header>
    <section class="banner">
        <div class="container custom-container">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-6 text-lg-start text-center banner-content-col">
                    <h1 class="text-black">
                        Custom Web Design Services <br> Made Easy
                    </h1>
                    <p class="font-18 pt-md-3 mx-lg-0 mx-auto mb-sm-2 mb-0">Stand out from competition with a custom, professional website
                        that communicates your brand values and attracts maximum
                        traffic to your site.</p>
                    <ul class="pt-2">
                        <li class="mb-1"><i class="fa-solid fa-check"></i><span class="ms-2">Industry-specific Expert Designers</span></li>
                        <li class="mb-1"><i class="fa-solid fa-check"></i><span class="ms-2">Conversion-focused Design</span></li>
                        <li class="mb-1"><i class="fa-solid fa-check"></i><span class="ms-2">Unlimited Revisions</span></li>
                    </ul>
                    <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme mt-sm-4 mt-2">Get started
                        <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                            <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                            <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                        </svg>
                    </button>
                    <div class="banner-bottom font-14 mt-3">
                        <span>We are rated 4.6 </span> <img src="./images/rating-small.svg" alt=""> <span> among <b> 34,578 </b> satisfied customers </span>
                    </div>
                </div>
                <div class="col-lg-6 position-relative mt-lg-5">
                    <div class="w-100 h-100">
                        <img src="./images/banner-1.webp" width="854" class="d-lg-block d-none banner-img position-absolute top-50 start-50 translate-middle" alt="">
                        <img src="./images/banner-img-2.webp" class="d-lg-none d-block banner-img position-absolute top-50 start-50 translate-middle" alt="" srcset="./images/banner-img-2-350.webp 500w, ./images/banner-img-2-500.webp 700w, ./images/banner-img-2.webp 800w" 
                        sizes="(max-width: 575px) 350px, (max-width: 768px) 500px, (max-width: 992px) 700px, 800px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="trusted">
        <div class="custom-container container">
            <div class="border-bottom pb-2 d-flex flex-lg-nowrap flex-wrap gap-lg-2 gap-4 justify-content-md-between justify-content-center  align-items-center">
                <span>Trusted by :</span>
                <img src="./images/trusted/fred.svg" width="147" alt="">
                <img src="./images/trusted/hoffman.svg" width="134" alt="">
                <img src="./images/trusted/cocacola.svg" width="123" alt="">
                <img src="./images/trusted/time.svg" width="103" alt="">
                <img src="./images/trusted/wawa.svg" width="113" alt="">
                <img src="./images/trusted/heavenly.svg" width="133" alt="">
            </div>
        </div>
    </section>

    <section class="portfolio">
        <div class="custom-container container">
            <div class="row">
                <div class="col-lg-4">
                    <h4 class="sub-heading">OUR PORTFOLIO</h4>
                    <h2 class="section-heading">Our Work Speaks <br> for Itself! </h2>
                </div>
                <div class="col-lg-8">
                    <p class="font-18">We design custom, engaging and user-centric websites, that not only attract your target
                        audience to the site, but also convert them into loyal customers.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid portfolio-slider">
            <div class="contest-examples__list">
                <div data-scrollable="examples">
                    <div data-scrollable-inner="" data-size="11700">
                        <div class="design-card-list design-card-list--large design-card-list--with-attributions " data-design-card-list="">
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/1.webp" alt="">
                                        <h5>Fitness</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/2.webp" alt="">
                                        <h5>clothing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/4.webp" alt="">
                                        <h5>fintech</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/3.webp" alt="">
                                        <h5>Beauty</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/5.webp" alt="">
                                        <h5>cleaning</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide1/6.webp" alt="">
                                        <h5>Agency</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contest-examples__list">
                <div data-scrollable="examples">
                    <div data-scrollable-inner="" data-size="11700" style="margin-top: -17px; bottom: -17px;">
                        <div class="design-card-list design-card-list--large design-card-list--with-attributions " data-design-card-list="">
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/1.webp" alt="">
                                        <h5>agency</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/2.webp" alt="">
                                        <h5>clothing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/3.webp" alt="">
                                        <h5>beauty</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/4.webp" alt="">
                                        <h5>fintech</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/5.webp" alt="">
                                        <h5>cleaning</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="design-card-list__item item" data-trackable-click-event="design-card-list-item">
                                <div class="design-card design-card--relative design-card--collapse design-card--heavy-shadow" data-design-card="" style="visibility: visible;">
                                    <div class="porWrp">
                                        <img src="./images/portfolio/slide2/6.jpg" alt="">
                                        <h5>Security</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started
                <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                    <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                    <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                </svg>

            </button>
        </div>
    </section>

    <section class="designer">
        <div class="custom-container container">
            <div class="section-head mx-auto text-center pb-4" style="max-width:887px">
                <h4 class="sub-heading">Why Choose Us As</h4>
                <h2 class="section-heading"> Your Professional Designer</h2>
                <p class="font-18">We have a diverse team of web designers, branding & marketing experts, all working towards the goal of
                    attracting audience to your site and converting them into loyal customers.</p>
            </div>
            <div class="row justify-content-lg-between justify-content-center gy-4 ">
                <div class="col-lg-4 col-md-6">
                    <div class="designer-box">
                        <img src="./images/design1.svg" width="50" alt="">
                        <h3 class="mb-0">Completely Custom <br> Web Design</h3>
                        <p>With us, you'll get a bespoke,
                            conversion-focused, user-centric
                            and engaging web design that
                            sets you and your business apart
                            from the competition.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="designer-box">
                        <img src="./images/design2.svg" width="50" alt="">
                        <h3 class="mb-0">Results-Driven <br> UI/UX</h3>
                        <p>Since we have been in the
                            industry for over a decade, we use
                            tried & tested UI/UX strategies
                            that will give your website a
                            competitive edge.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="designer-box">
                        <img src="./images/design3.svg" width="50" alt="">
                        <h3 class="mb-0">Fully Responsive <br> Design</h3>
                        <p>We create fully responsive designs
                            which means that your web design
                            will automatically change to fit the
                            device your visitors are viewing it
                            on.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials position-relative ">
        <img src="./images/cta-before1.webp" class="d-lg-block d-none img-fluid position-absolute cta-before1" alt="">
        <div class="custom-container container">
            <div class="row gap-lg-0 gap-sm-5 gap-4">
                <div class="col-lg-7 text-lg-start text-center">
                    <img src="./images/test-img.webp" class="img-fluid" alt="">
                    <div class="text-center mt-4">
                        <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme mx-auto" style="max-width:212px">Get started
                            <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                                <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                                <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                            </svg>

                        </button>
                    </div>
                    <div class="d-flex justify-content-center flex-sm-nowrap flex-wrap mt-3 img-bottom gap-1 mb-lg-0 mb-2">
                        <img src="./images/rating-green.svg" width="124" alt="">
                        <span class="font-14 fw-medium text-left" style="color:#8F9196;">Check our web page design customer reviews</span>
                    </div>
                    <p class="font-14 fw-medium text-white text-center ">(4.6 average from 2,355 rating)</p>
                </div>
                <div class="col-lg-5 position-relative ">
                    <img src="./images/cta-after1.webp" class="d-lg-block d-none img-fluid position-absolute cta-after1" alt="">

                    <div class="testimonial-box d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-center justify-content-sm-start  gap-3 position-relative z-3">
                        <div class="testimonial-img">
                            <img src="./images/test-pfp.png" class="img-fluid" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h2 class="fs-5">Complete Satisfaction</h2>
                            <p class="position-relative z-3">I thought I had a nice web site until Diginsy
                                designed one for me. The entire process of signing
                                up and customizing my site was stress free. My
                                website is so robust as well as user friendly. Talk of
                                a solid LEAD GENERATOR!!! Keep up the good work
                                Diginsy!</p>
                            <h3 class="fw-semibold">Triston Jacobs</h3>
                            <div class="test-review-wrap d-sm-block d-flex w-100 justify-content-center  gap-2">
                                <div class="test-review">
                                    <span>7</span>
                                    <span>4</span>
                                    <span class="bottom-test-review font-14">Developers</span>
                                    <span class="bottom-test-review font-14">Designers</span>
                                </div>
                                <img src="./images/quote.webp" class="d-sm-block d-none position-absolute test-quotes" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="custom-container container">
            <div class="section-head mx-auto text-center pb-4" style="max-width:974px">
                <h4 class="sub-heading">How It Works</h4>
                <h2 class="section-heading"> Our Process</h2>
                <p class="font-18">Our websites are designed to function seamlessly, enhance the user experience, and crush your competitors using
                    a tried-and-tested comprehensive process that we've standardized over a decade.
                </p>
            </div>
            <div class="row justify-content-lg-between justify-content-center gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="process-box">
                        <div class="d-flex justify-content-between align-items-start">
                            <img src="./images/process1.svg" width="36" alt="">
                            <p class="light-heading">01</p>
                        </div>
                        <h3>Fill a Short Brief</h3>
                        <p class="pt-1">Our interactive creative brief makes it
                            simple to describe your design needs and
                            set your budget.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 border-start position-relative">
                    <img src="./images/triangle.svg" class="triangle position-absolute top-50 translate-middle" alt="">
                    <div class="process-box">
                        <div class="d-flex justify-content-between align-items-start">
                            <img src="./images/process2.svg" width="36" alt="">
                            <p class="light-heading">02</p>
                        </div>
                        <h3>Get Multiple Concepts</h3>
                        <p class="pt-1">We design different web design concepts
                            for your brand based on the needs of your
                            target audience.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 border-start position-relative">
                    <img src="./images/triangle.svg" class="triangle position-absolute top-50 translate-middle" alt="">
                    <div class="process-box">
                        <div class="d-flex justify-content-between align-items-start">
                            <img src="./images/process3.svg" width="36" alt="">
                            <p class="light-heading">03</p>
                        </div>
                        <h3>Pick Your Favorite</h3>
                        <p class="pt-1">Finally, you select your favorite web design
                            concept and we send you all the final files
                            in the required formats.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-md-5 mt-2">
                <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started
                    <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                        <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                        <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                    </svg>

                </button>
            </div>

        </div>
    </section>

    <section class="budget">
        <div class="custom-container container">
            <div class="section-head mx-auto text-center pb-4" style="max-width:976px">
                <h2 class="section-heading"> Budget-friendly Design Solutions <br> for Everyone</h2>
                <p class="font-18">Whether you're a freelancer or a business owner, Diginsy is uniquely positioned to deliver affordable, strategic, and
                    results-driven web design services for over 50+ industries.
                </p>
            </div>
            <div class="row gy-4 justify-content-lg-between justify-content-center ">
                <div class="col-lg-4 col-sm-6">
                    <div class="budget-box">
                        <img src="./images/budget1.svg" width="54" alt="">
                        <h3>Web Page Design</h3>
                        <p>Increase your conversion rate by getting an
                            engaging web design that grabs your
                            audience's attention and prompts them to
                            take action.</p>
                        <ul class="pt-2">
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Custom Web Page Design (1 Page)</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>User-centric Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Fully Responsive Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Unlimited Revisions</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Dedicated Account Manager</span></li>
                        </ul>
                        <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started free</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 border-start">
                    <div class="budget-box">
                        <img src="./images/budget2.svg" width="55" alt="">
                        <h3>Website Redesign</h3>
                        <p>Your website isn't performing the way you
                            expected it to? Revamp your web design to
                            boost your SEO ranking and increase user
                            engagement instantly.</p>
                        <ul class="pt-2">
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Custom Web Page Design (Up to 10 Pages)</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>User-centric Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Fully Responsive Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Unlimited Revisions</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Dedicated Account Manager</span></li>
                        </ul>
                        <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started free</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 border-start">
                    <div class="budget-box">
                        <img src="./images/budget3.svg" width="69" height="49" alt="">
                        <h3>E-commerce Web Design</h3>
                        <p>Create an enticing landing page design that compels visitors to take action using proven design strategies that skyrockets your conversion rate.</p>
                        <ul class="pt-2">
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Custom Landing Page Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Striking & Compelling CTA button</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Fully Responsive Design</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Unlimited Revisions</span></li>
                            <li class="font-14"><i class="text-theme fa-solid fa-circle-check me-2"></i> <span>Dedicated Account Manager</span></li>
                        </ul>
                        <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started free</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customer position-relative ">
        <div class="position-absolute z-1 w-100 top-0" style="height:60%;background:#F6F4F5"></div>
        <div class="container-fluid px-lg-0 position-relative z-3">
            <div class="section-head mx-auto text-center pb-sm-4" style="max-width:825px">
                <h2 class="section-heading"> Look What Our <br> Customers Say About Us</h2>
                <p class="font-18">We have successfully worked with over 2M+ business owners and helped them grow their brand.
                </p>
                <img src="./images/clutch.webp" class="mx-auto d-sm-block d-none img-fluid my-3" alt="">
            </div>

            <div class="customer-row owl-carousel owl-theme">
                <div class="item customer-box">
                    <div class="customer-profile d-flex justify-content-between align-items-baseline ">
                        <div class="d-flex gap-3 align-items-center w-100" style="max-width:160px">
                            <img src="./images/customer/1.png" class="pfp img-fluid" alt="">
                            <div>
                                <h4 class="font-18">Jessie</h4>
                                <h5>CEO</h5>
                            </div>
                        </div>
                        <img src="./images/quote.webp" width="111" class="me-2 quote" alt="">
                    </div>
                    <p class="mt-2 fs-6 pe-3">"I want to express my gratitude to everyone who contributed to my app's development, especially Sam, my dedicated account manager. His constant updates and dedication ensured that the final product met all my expectations. I couldn't be happier with the result! :)"
                    </p>
                    <div class="rating-row d-flex justify-content-between align-items-center ">
                        <img src="./images/rating-green.svg" width="87" style="max-width: 87px;" alt="">
                        <span>Rated 5.0/5.0</span>
                    </div>
                </div>
                <div class="item customer-box">
                    <div class="customer-profile d-flex justify-content-between align-items-baseline ">
                        <div class="d-flex gap-3 align-items-center w-100" style="max-width:190px">
                            <img src="./images/customer/2.png" class="pfp img-fluid" alt="">
                            <div>
                                <h4 class="font-18">Rocky</h4>
                                <h5>Marketing Manager</h5>
                            </div>
                        </div>
                        <img src="./images/quote.webp" width="111" class="me-2 quote" alt="">
                    </div>
                    <p class="mt-2 fs-6 pe-3">"The team's dedication and exceptional service truly stood out during the development of my company's website. They were incredibly helpful, going above and beyond to ensure that every detail was perfect. I'm absolutely thrilled with the final outcome. Thank you so much!"
                    </p>
                    <div class="rating-row d-flex justify-content-between align-items-center ">
                        <img src="./images/rating-green.svg" width="87" style="max-width: 87px;" alt="">
                        <span>Rated 5.0/5.0</span>
                    </div>
                </div>
                <div class="item customer-box">
                    <div class="customer-profile d-flex justify-content-between align-items-baseline ">
                        <div class="d-flex gap-3 align-items-center w-100" style="max-width:190px">
                            <img src="./images/customer/3.png" class="pfp img-fluid" alt="">
                            <div>
                                <h4 class="font-18">Wout</h4>
                                <h5>Founder & CEO</h5>
                            </div>
                        </div>
                        <img src="./images/quote.webp" width="111" class="me-2 quote" alt="">
                    </div>
                    <p class="mt-2 fs-6 pe-3">"Five star service, I hired them for my company's website and am pleased with how they worked with me throughout the process, communicating effectively, providing timely management, and being available when I needed to speak with them."
                    </p>
                    <div class="rating-row d-flex justify-content-between align-items-center ">
                        <img src="./images/rating-green.svg" width="87" style="max-width: 87px;" alt="">
                        <span>Rated 5.0/5.0</span>
                    </div>
                </div>
                <div class="item customer-box">
                    <div class="customer-profile d-flex justify-content-between align-items-baseline ">
                        <div class="d-flex gap-3 align-items-center w-100" style="max-width:190px">
                            <img src="./images/customer/4.png" class="pfp img-fluid" alt="">
                            <div>
                                <h4 class="font-18">Jonathan</h4>
                                <h5>Manager</h5>
                            </div>
                        </div>
                        <img src="./images/quote.webp" width="111" class="me-2 quote" alt="">
                    </div>
                    <p class="mt-2 fs-6 pe-3">"Extremely Pleased, Re-design of my website has exceeded my expectations. They performed admirably and exceeded our expectations. We are excited to collaborate with them on another project."
                    </p>
                    <div class="rating-row d-flex justify-content-between align-items-center ">
                        <img src="./images/rating-green.svg" width="87" style="max-width: 87px;" alt="">
                        <span>Rated 5.0/5.0</span>
                    </div>
                </div>
                <div class="item customer-box">
                    <div class="customer-profile d-flex justify-content-between align-items-baseline ">
                        <div class="d-flex gap-3 align-items-center w-100" style="max-width:190px">
                            <img src="./images/customer/5.png" class="pfp img-fluid" alt="">
                            <div>
                                <h4 class="font-18">Mark</h4>
                                <h5>Project Manager</h5>
                            </div>
                        </div>
                        <img src="./images/quote.webp" width="111" class="me-2 quote" alt="">
                    </div>
                    <p class="mt-2 fs-6 pe-3">"The team at Digincy provided exceptional service in developing our mobile app. They were attentive to our needs, responsive to feedback, and delivered a final product that exceeded our expectations. Highly recommended!"</p>
                    <div class="rating-row d-flex justify-content-between align-items-center ">
                        <img src="./images/rating-green.svg" width="87" style="max-width: 87px;" alt="">
                        <span>Rated 5.0/5.0</span>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2">
                <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get started
                    <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                        <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                        <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                    </svg>

                </button>
            </div>

        </div>
    </section>

    <section class="faq">
        <div class="custom-container container">
            <h2 class="section-heading text-center">Frequently Asked Questions</h2>
            <div class="mt-4">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Why do I need a website for my business? Is it worth it?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Having a website is a must for most businesses, especially after the pandemic has changed the way people shop. If you don’t have a website, you’ll end up losing a lot of potential customers and clients. <br>
                                Without a website, people may question your legitimacy as a business. Having a website is an opportunity to make a great first impression and give people comfort that you're a real business.<br>
                                Your website presents new opportunities to build credibility, capture more leads, and learn about the shoppers who visit your site.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Why is web design so important?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We’re not exaggerating when we say that web design can make or break your business. Don’t believe us? We’ll let the stats do the talking.<br>
                                a. 75% of consumers say that they make snap judgements of a company’s credibility based on their website design.<br>
                                b. 94% of a website user’s first impressions are design-related. And we all know that first impressions rarely ever change.<br>

                                A professional web design provides a good user experience and helps your website visitors access and navigate your website with ease, making them stay longer on your website longer.<br>
                                It also helps improving your search engine rankings, driving more traffic to your site, acquiring more leads, and converting visitors into loyal customers.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Why should I get my website designed by a professional?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Your website is your most viewed digital profile. It creates your first impression on your clients and all those who visit. It needs to be a professionally designed website to illustrate credibility, communicate well, and deliver the intended brand message to your visitors.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                How is hiring a design agency different from hiring a freelance web designer?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">When working with a freelancer, you are limited to the skills and resources of that person.<br>
                                Designing and building a website is similar to building a house in that it requires a lot of different skill sets. You wouldn’t expect the architect to also do the plumbing nor the construction crew to help with the interior design of the house.<br>
                                In the same way, it’s extremely unlikely that you’ll find one individual who is an expert in web strategy, SEO, UX design, web design, and project management.<br>
                                With an agency, you’ll work with a team on the website project and each member of the team will be a specialist in one of these skills.
                                Web design companies also have high standards for quality control. Designers with high levels of experience are a safer bet within agencies due to the highly competitive nature of the web design workforce.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Why should I choose Diginsy over other design agencies?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">A super creative web design process, that makes us different<br>
                                We, at Diginsy, engage in strategy workshops, user personas, information architecture, pixel-perfect icons, and user interface. We follow every web design process very diligently.<br>
                                Our designs are also data-driven. Powered by behavioral research and user insights, we create amazing user-centric experiences aimed at doing one thing: achieving your business goals.<br>
                                Diginsy designers roll up their sleeves and work hand-in-hand with creative consultants, project managers, marketing strategists, account managers and, most importantly, you. Because that’s how the best experiences are made. We integrate with your marketing team to define goals, research potential solutions, and craft a design that crushes your KPIs.<br>
                                Working together with our brand strategy, creative, and content teams, we deliver beautiful and purposeful branded design experiences across all commerce touch points, including custom applications, websites, retail-connected marketing, and beyond.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                What’s the difference between a template and a fully custom site?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">A website template is a pre-designed layout for a website. A website template gives designers a relatively simple way to plug content into a website without having to build the website from the ground up.<br>
                                While custom websites are built from scratch based on unique business needs without the use of any premade templates.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                Will you listen to my design suggestions, or will you design on any fixed format?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We will create a design strategy for you after discussing all your requirements and goals with you. All the design suggestions provided by you will be taken into consideration while creating your design strategy.<br>
                                Our team will come up with multiple design concepts for you to choose from. You can make any changes you want in your chosen design concept.
                                You can even reject all the design concepts, and we’ll create new mockups for you after having a detailed strategy session about your needs and requirements.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                How do I choose a color palette for my web design?
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">If you’re having a hard time choosing colors for your website, your project manager will help you build a color palette using the color theory.<br>
                                This palette will consist of various focus colors and complementary hues, shades, tones, tints, and neutrals. All these colors will complement each other. However, it will also offer enough variance to differentiate elements and pages in an attractive manner.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                What is responsive design and why it is important?
                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Responsive design allows your website content to flow freely across all screen resolutions and sizes, and renders it to look great on all devices. It ensures that you don’t miss out on the traffic coming from different devices, such as, mobile phones, tabs, iPads etc.<br>
                                It also makes it unnecessary to maintain different versions of your website for mobile and desktop and saves you time, resources and efforts.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                What do you mean by an SEO-friendly web design and why is it important?
                            </button>
                        </h2>
                        <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Making a website SEO-friendly means that Google and other search engines can crawl each page on the website efficiently, interpret the content effectively, and index it in their database. Once indexed, they can then serve the most relevant and valuable web pages to their users based on the topics they search for.<br>
                                SEO web design is about creating websites that both users and search engines love. A website that looks great on desktop but is too slow on mobile will not help you get organic traffic and rankings.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                How many design revisions you allow for?
                            </button>
                        </h2>
                        <div id="flush-collapseEleven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">There is not any fixed number allotted for the design revisions provided by us. It depends on the project as we understand that a customized website may require more design revisions to be done. We will provide unlimited revisions until you are happy and satisfied with the design.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                Who will have the ownership rights of the website design?
                            </button>
                        </h2>
                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We sign an NDA with all our clients before starting a project, which states that we won’t take any credit for the web design we create for you or keep any ownership rights.<br>
                                We transfer the copyright to our clients as soon as we’ve completed the project.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                                What if I am not happy with the website design you created for me?
                            </button>
                        </h2>
                        <div id="flush-collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Customer satisfaction is our utmost priority, which is why we offer unlimited revisions. If you’re still not satisfied with the designers or your project manager after several revisions, we assign your project to another team.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                                How can I get a refund?
                            </button>
                        </h2>
                        <div id="flush-collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We strive to exceed our clients’ expectations, however; we do understand that it’s your project and your money at the end of the day. Even though it’s sad to part ways with you, we’d always prefer to do that over your unhappiness and dissatisfaction.<br>
                                You can request your refund my contacting your account manager.</div>
                        </div>
                    </div>
                    <div class="accordion-item border-bottom ">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                                Do you offer satisfaction guarantee for your services?
                            </button>
                        </h2>
                        <div id="flush-collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we are a result driven agency, and we offer 100% customer satisfaction guarantee for our services. We strive to design the best possible websites and give unmatched support services.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mission">
        <div class="container custom-container">
            <div class="section-head mx-auto text-center pb-4">
                <h2 class="section-heading"> Exceeding Our Clients’ Expectations is Our Mission</h2>
                <p class="font-18">We have generated over $2M+ in revenue for our clients using our high-converting website designs. Let us make millions for you now!
                </p>
            </div>
            <div class="d-flex align-items-center justify-content-lg-between justify-content-center gap-1 mt-md-3 mt-0 gy-4 flex-lg-nowrap flex-wrap">
                <div class="mission-box">
                    <img src="./images/mission/logo-1.svg" style="max-width: 140px;" class="img-fluid" alt="">
                </div>
                <div class="mission-box">
                    <img src="./images/mission/logo-2.svg" style="max-width: 140px;" class="img-fluid" alt="">
                </div>
                <div class="mission-box">
                    <img src="./images/mission/logo-3.svg" style="max-width: 140px;" class="img-fluid" alt="">
                </div>
                <div class="mission-box">

                    <img src="./images/mission/logo-4.svg" style="max-width: 140px;" class="img-fluid" alt="">
                </div>
                <div class="mission-box">
                    <img src="./images/mission/logo-5.svg" style="max-width: 140px;" class="img-fluid" alt="">

                </div>
            </div>
        </div>
    </section>

    <footer class="">
        <div class="custom-container container">
            <div class="d-flex justify-content-md-between justify-content-center gap-3 px-2 align-items-center flex-md-nowrap flex-wrap">
                <img src="./images/trustpilot.webp" class="img-fluid footer-img" alt="">
                <img src="./images/certificate.webp" class="img-fluid footer-img" alt="">
                <button data-bs-toggle="modal" data-bs-target="#form-popup" class="btn-theme">Get in touch
                    <svg class="btn-icon" width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.85131 16.6845C4.31006 16.6845 0.628906 13.0034 0.628906 8.46214C0.628906 3.9209 4.31006 0.239746 8.85131 0.239746C13.3925 0.239746 17.0737 3.9209 17.0737 8.46214C17.0737 13.0034 13.3925 16.6845 8.85131 16.6845ZM8.85131 1.13424C4.82612 1.13424 1.52339 4.43695 1.52339 8.46214C1.52339 12.4873 4.82612 15.7901 8.85131 15.7901C12.8765 15.7901 16.1792 12.4873 16.1792 8.46214C16.1792 4.43695 12.8765 1.13424 8.85131 1.13424Z" fill="none" />
                        <path d="M8.67929 13.1754L8.06003 12.5217L12.0852 8.46214L8.06003 4.40255L8.67929 3.74888L13.3926 8.46214L8.67929 13.1754Z" fill="none" />
                        <path d="M12.7389 8.94379H4.48208V7.9805H12.7389V8.94379Z" fill="none" />
                    </svg>

                </button>
            </div>
        </div>
        <div class="footer-bottom text-center py-2">
            <p class="mb-0">Copyright © 2024 Diginsy All Rights Reserved. <br class="d-lg-none d-block"> <span class="text-white fw-bold"> <a href="#" rel="noopener noreferrer">Privacy Policy</a> | <a href="#" rel="noopener noreferrer">Terms and Conditions</a></span></p>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="form-popup" tabindex="-1" aria-labelledby="form-popupLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="regForm" action="">
                    <div class="tab current step1">
                        <div class="flex-head">
                            <span class="prevBtn"><img src="./images/form/Back.svg" alt=""></span>
                            <span class="close" data-bs-dismiss="modal"><img src="./images/form/Close.svg" alt=""></span>
                        </div>
                        <h2 class="popup-form-heading">What type of website do you have / would you like?</h2>
                        <div class="form-wrap" style="margin-top:20px">
                            <button type="button" class="option-btn website-option next-tab" data-value="E-Commerce Website">E-Commerce Website</button>
                            <button type="button" class="option-btn website-option next-tab" data-value="Business Website">Business Website</button>
                            <button type="button" class="option-btn website-option next-tab" data-value="Personal Website">Personal Website</button>
                            <button type="button" class="option-btn website-option next-tab" data-value="Informational Website">Informational Website</button>
                            <button type="button" class="option-btn website-option next-tab" data-value="Consulting Website">Consulting Website</button>
                            <button type="button" class="option-btn website-option next-tab" data-value="Booking Website">Booking Website</button>
                        </div>
                    </div>
                    <div class="tab step2">
                        <div class="flex-head">
                            <span class="prevBtn">
                                <img src="./images/form/Back.svg" alt="">
                            </span>
                            <span class="close" data-bs-dismiss="modal"><img src="./images/form/Close.svg" alt=""></span>
                        </div>
                        <h2 class="popup-form-heading">Do you already have a website?</h2>
                        <div class="form-wrap">
                            <button type="button" class="option-btn have-web next-tab" data-value="Yes">Yes</button>
                            <button type="button" class="option-btn have-web next-tab" data-value="No">No</button>
                        </div>
                    </div>

                    <div class="tab step3">
                        <div class="flex-head">
                            <span class="prevBtn"><img src="https://diginsy.com/web-design/offer/assets/images/form/Back.svg" alt=""></span>
                            <span class="close" data-bs-dismiss="modal"><img src="https://diginsy.com/web-design/offer/assets/images/form/Close.svg" alt=""></span>
                        </div>
                        <h2 class="popup-form-heading">What's your website URL?</h2>
                        <div class="form-wrap website-field">
                            <div class="poup-form-input">
                                <img src="https://diginsy.com/web-design/offer/assets/images/form/globe.svg" width="25" height="20" class="input-icon" alt="">
                                <input type="text" placeholder="Website Url" id="weburllink" required>
                                <!-- <span class="error-msg" id="WebNameError"></span> -->
                            </div>
                            <button class="option-btn font-22 valid-check" id="">Next</button>
                            <button class="option-btn font-22 next-tab" id="website-submit">Next</button>
                        </div>
                    </div>
                    <div class="tab step4">
                        <div class="flex-head">
                            <span class="prevBtn"><img src="./images/form/Back.svg" alt=""></span>
                            <span class="close" data-bs-dismiss="modal"><img src="./images/form/Close.svg" alt=""></span>
                        </div>
                        <h2 class="popup-form-heading text-lightblack fontw-700">Where should we send our response? <br> <span>We'll never share your personal details.</span></h2>
                        <div class="form-wrap">
                            <div class="poup-form-input">
                                <img src="./images/form/user.svg" width="25" height="20" class="input-icon" alt="">
                                <input type="text" class="only-alpha" id="fullName" placeholder="Full Name" required>
                                <!-- <span class="error-msg" id="fullNameError">please enter full name</span> -->
                            </div>
                            <div class="poup-form-input">
                                <img src="./images/form/email.svg" width="25" height="20" class="input-icon" alt="">
                                <input type="email" id="emailAddress" placeholder="Email Address*" required>
                                <!-- <span class="error-msg" id="emailError">please enter a valid email address</span> -->
                            </div>
                            <div class="poup-form-input">
                                <img src="./images/form/phone.svg" width="25" height="20" class="input-icon" alt="">
                                <input type="tel" class="only-number" id="phoneNumber" placeholder="Phone Number*" required>
                                <!-- <span class="error-msg" id="phoneError">please enter a valid phone number</span> -->
                            </div>
                            <button id="submitButton" class="option-btn font-22" disabled>Submit</button>
                        </div>
                    </div>
                    <div class="popup-form-bottom">
                        <p class="text-lightblack">Experienced Website Design Professionals</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const prevButtons = document.querySelectorAll('.prevBtn');
            const nextButtons = document.querySelectorAll('.next-tab');
            const submitButton = document.getElementById('submitButton'); // Get the submit button

            let currentTab = 0;
            let previousTab = 0; // Keep track of the previous tab

            // Hide all tabs initially
            tabs.forEach(tab => tab.classList.remove('current'));

            // Show the current tab
            tabs[currentTab].classList.add('current');

            // Previous button functionality
            prevButtons.forEach(button => {
                button.addEventListener('click', function() {
                    if (currentTab > 0) {
                        currentTab = previousTab; // Update current tab to previous tab
                        previousTab = currentTab - 1; // Update previous tab
                        showTab(currentTab);
                    }
                });
            });

            // Next button functionality
            nextButtons.forEach(button => {
                button.addEventListener('click', function() {
                    previousTab = currentTab; // Update previous tab before changing current tab
                    currentTab++;
                    if (currentTab < tabs.length) {
                        if (currentTab === 2) { // Check if on the second step
                            const answer = this.textContent.trim();
                            if (answer === 'No') {
                                currentTab = tabs.length - 1; // Go to the last step (4th)
                            } else if (answer === 'Yes') {
                                currentTab = 2; // Go to the website input step (3rd)
                            }
                        }
                        showTab(currentTab);
                    }
                    // if (currentTab === tabs.length - 1) {
                    //     submitButton.style.display = 'block'; // Show the submit button on the last step
                    // } else {
                    //     submitButton.style.display = 'none'; // Hide the submit button on other steps
                    // }
                });
            });

            // Function to show the current tab
            function showTab(n) {
                tabs.forEach(tab => tab.classList.remove('current'));
                tabs[n].classList.add('current');
            }
        });
    </script>
    <script type="text/javascript">
        window.onload = () => {
            let modalOpened = false; // Variable to track if the modal has been opened
            const myModal = new bootstrap.Modal('#form-popup');

            // Function to open the modal if it hasn't been opened yet
            const openModal = () => {
                if (!modalOpened) {
                    myModal.show();
                    modalOpened = true; // Set modalOpened to true to indicate the modal has been opened
                }
            };

            // Call openModal after 20 seconds
            setTimeout(openModal, 20000);
        }
    </script>

</body>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script defer src="https://www.websitedezk.com/lp3/assets/js/scrollable.js"></script>
<script src="./js/cleave.min.js"></script>
<script src="./js/function.js" defer></script>
<script>
    var phoneFields = document.getElementsByClassName("only-number");
    for (var i = 0; i < phoneFields.length; i++) {
        phoneFields[i].addEventListener("input", function(e) {
            var inputValue = e.target.value;
            var regex = /^\d+$/;

            if (!regex.test(inputValue)) {
                e.target.value = inputValue.replace(/\D/g, ""); 
            }
        });
    }
    var cleaveBlocks;
    document.querySelector("#phoneNumber") &&
        (cleaveBlocks = new Cleave("#phoneNumber", {
            delimiters: ["(", ") ", "-"],
            blocks: [0, 3, 3, 4],
        }));
</script>

</html>