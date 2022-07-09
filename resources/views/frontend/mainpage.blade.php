
@extends('frontend.layout')

@section('title','Main Page')


@section('mainpage')
    <section class=" slider_section position-relative">
        <div class="container">
            <div
                id="carouselExampleControls"
                class="carousel slide"
                data-ride="carousel"
            >
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="slider_item-detail">
                                    <h1>
                                        PROVIDES TO MAKE BETTER SOFTWARE
                                    </h1>
                                    <p>
                                        Marketers/advertisers usually focus their efforts on the
                                        people responsible for making the purchase.
                                    </p>
                                    <div>
                                        <a href="">
                                            Download
                                        </a>
                                    </div>
                                </div>
                                <div class="slider_item-imgbox">
                                    <img src="/frontend/images/pc-banner.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="slider_item-detail">
                                    <h1>
                                        PROVIDES TO MAKE BETTER SOFTWARE
                                    </h1>
                                    <p>
                                        Marketers/advertisers usually focus their efforts on the
                                        people responsible for making the purchase.
                                    </p>
                                    <div>
                                        <a href="">
                                            Download
                                        </a>
                                    </div>
                                </div>
                                <div class="slider_item-imgbox">
                                    <img src="/frontend/images/pc-banner.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="slider_item-box">
                            <div class="slider_item-container">
                                <div class="slider_item-detail">
                                    <h1>
                                        PROVIDES TO MAKE BETTER SOFTWARE
                                    </h1>
                                    <p>
                                        Marketers/advertisers usually focus their efforts on the
                                        people responsible for making the purchase.
                                    </p>
                                    <div>
                                        <a href="">
                                            Download
                                        </a>
                                    </div>
                                </div>
                                <div class="slider_item-imgbox">
                                    <img src="/frontend/images/pc-banner.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
        >
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
        >
            <span class="sr-only">Next</span>
        </a>
    </section>
@endsection


