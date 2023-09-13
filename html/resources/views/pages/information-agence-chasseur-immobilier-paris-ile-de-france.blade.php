@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs-home')

    <!-- Question Cards -->
    <section class="question__cards">
        <h1 class="section__h2--red" style="font-family:'Times New Roman',serif;font-weight:500;font-size:36px;color:#FF6464;">Toutes les informations que vous pourrez trouver sur notre site web.</h1>
        <div class="container">
            <div class="question__cards--inner">

                <!-- Card #1 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">HOME</h3>
                    </div>
                    <a  href="{{ route('home') }}" 
                        class="question__cards--link small-link"
                        title="Main page"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #2 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSE IMMOBILIERE</h3>
                    </div>
                    <a  href="{{ route('acheterAppartementParisIleDeFrance') }}" 
                        class="question__cards--link small-link"
                        title="CHASSE IMMOBILIERE"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #3 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF</h3>
                    </div>
                    <a  href="{{ route('immobilierNeufIleDeFrance') }}" 
                        class="question__cards--link small-link"
                        title="programme immobilier neuf Ile de France"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #4 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">INVESTISSEMENT LOCATIF</h3>
                    </div>
                    <a  href="{{ route('investissementLocatifParisIleDeFrance') }}" 
                        class="question__cards--link small-link"
                        title="INVESTISSEMENT LOCATIF"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #5 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">DOUBLE PROJET</h3>
                    </div>
                    <a  href="{{ route('vendreAcheterBienImmobilierParisIleDeFrance') }}" 
                        class="question__cards--link small-link"
                        title="DOUBLE PROJET"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #6 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER PARIS</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', 'paris') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER PARIS"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #7 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER 91</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '91-essonne') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER 91"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #8 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER 95</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '95-val-d-oise') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER 95"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #9 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER 77</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '77-seine-et-marne') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER 77"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #10 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER 78</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '78-yvelines') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER 78"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #11 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">CHASSEUR IMMOBILIER IDF</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', 'paris-IDF') }}" 
                        class="question__cards--link small-link"
                        title="CHASSEUR IMMOBILIER IDF"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #12 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF PARIS</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '75-paris') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF PARIS"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #13 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 92</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '92-hauts-de-seine') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 92"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #14 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 93</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '93-seine-st-denis') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 93"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #15 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 94</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '94-val-de-marne') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 94"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #16 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 95</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '95-val-d-oise') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 95"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #17 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 77</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '77-seine-et-marne') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 77"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #18 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 78</h3>
                    </div>
                    <a  href="{{ route('immoneuf.show', '78-yvelines') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 78"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #19 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">GUIDE ACCHAT IMMOBILIER </h3>
                    </div>
                    <a  href="{{ route('immobilierAncienParisIDF') }}" 
                        class="question__cards--link small-link"
                        title="GUIDE ACCHAT IMMOBILIER "
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #20 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">ACTUALITÉS </h3>
                    </div>
                    <a  href="{{ route('informationAgenceChasseurImmobilierParisIleDeFrance') }}" 
                        class="question__cards--link small-link"
                        title="ACTUALITÉS "
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #21 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">TOP 10 ACHAT INVESTISSEMENT 92</h3>
                    </div>
                    <a  href="{{ route('agenceImmobiliereDautsDeSeine92') }}" 
                        class="question__cards--link small-link"
                        title="TOP 10 ACHAT INVESTISSEMENT 92"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection