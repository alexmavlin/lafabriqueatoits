@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    <section class="main no-form" data-scrollax-parent="true">
        <div    class="main__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/' . $data['main_img']) }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h1 class="main__heading playfair_font">{{ $data['main_heading']}}</h1>
    </section>

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Question Cards -->
    <section class="question__cards" style="padding-top:unset">
        <div class="container">
            <h2>N'hésitez pas à nous contacter</h2><br/><br/>
            <div class="question__cards--inner">

                <!-- Card #1 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-envelope"></i>
                        <h3 class="question__cards--card__heading">Email <span>01</span></h3>
                    </div>
                    <a  href="mailto:projet@lafabriqueatoits.com" 
                        class="question__cards--link"
                        title="Contact Email"
                        style="text-transform:uppercase;">
                        projet@lafabriqueatoits.com
                    </a>
                </div>

                <!-- Card #2 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-phone-rotary"></i>
                        <h3 class="question__cards--card__heading">Téléphone<span>02</span></h3>
                    </div>
                    <a  href="tel:+33 (0) 7 82 09 05 95"
                        class="question__cards--link"
                        title="Contact Phone"
                        style="text-transform:uppercase;">
                        +33 (0) 7 82 09 05 95
                    </a>
                </div>

                <!-- Card #3 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-map-marked"></i>
                        <h3 class="question__cards--card__heading">Adresse <span>03</span></h3>
                    </div>
                    <a  href="https://www.google.com/maps/place/La+Fabrique+%C3%A0+Toits/@48.8774806,2.2921965,15z/data=!4m2!3m1!1s0x0:0x86160fe4f9dc969f?sa=X&amp;ved=2ahUKEwj8-rWgv-b4AhWI04UKHcpZDxgQ_BJ6BAhGEAU" 
                        target="_blank"
                        class="question__cards--link"
                        title="Contact Map"
                        style="text-transform:uppercase;">
                        6 Rue d'Armaillé, 75017 Paris
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact Social -->
    <section class="contact__social">
        <div class="container">
            <div class="contact__social--inner">
                <div class="contact__social--buttons">
                    <button class="btn-primary contact_btn">
                        Envoyez-nous un message
                    </button>
                    <div class="contact__social--notifer">Ou visitez notre 
                        <a  href="{{ route('informationAgenceChasseurImmobilierParisIleDeFrance') }}" 
                            title="information chasseur immobilier Paris et Ile de france"
                            style="text-transform:uppercase;">  
                            page d'information
                        </a>
                    </div>
                </div>

                <div class="contact__social--links">
                    <span class="contact__social--title">Suivez nous !</span>
                    <ul>
                        <li><a href="https://www.facebook.com/LaFabriqueAToits/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/lafabriqueatoits/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact Map -->
    <section class="box-widget fl-wrap contact__map" id="contact-map">
        <div class="map-widget contacts-map fl-wrap container">
        <h3 class="contact__map--heading">Nous serons ravis de vous rencontrer !</h3>
            <div class="map-container mapC_vis contact__map--wrapper">
                <div class="contact__map--singleMap" id="singleMap" data-latitude="48.8774425" data-longitude="2.2920513"   data-infotitle="Notre agence à Paris" data-infotext="6 Rue d'Armaillé, 75017 Paris"></div>
                <div class="scrollContorl"></div>
            </div>
        </div>
    </section>
    
</main>
@endsection