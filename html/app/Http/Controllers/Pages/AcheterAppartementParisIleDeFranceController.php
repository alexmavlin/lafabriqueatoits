<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AcheterAppartementParisIleDeFranceController extends Controller
{
    public function __invoke()
    {

        /* Response data */
        $data = [
            "meta" => [
                "title" => "Service Chasse Immobilière pour l’achat d’Appartement ou Maison | Chasseur Immobilier à Paris et Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Vous souhaitez acheter une maison ou un appartement à Paris ou en Ile de France ? La Fabrique à Toits vous propose un service de chasse immobilière afin de vous accompagner pour l'achat de votre résidence principale. Notre expertise et expérience en immobilier vous permettra d’acheter en toute sérénité et au meilleur prix !",
                "keywords" => "chasseur immobilier, chasseur d’appartement, chasseur de maison",
                "canonical" => request()->url(),
                "preloads" => [
                    asset('css/app.css')
                ],
                "prefetches" => [],
                "preconnects" => [
                    'https://fonts.googleapis.com',
                    'https://fonts.gstatic.com',
                ],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('acheterAppartementParisIleDeFrance'),
                    'title' => 'Chasse appartement et maison Ile de France et Paris',
                    'name' => 'Chasse Immobilière Paris et Ile de France',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => "Votre<br> partenaire pour une chasse immobilière personnalisée et agréable!",
            'main_img' => 'acheter-appartement-paris-ile-de-france.webp',
            'main_reverse' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => null,
            'departments' => null,
            'categories' => null,
            'investir' => true,
        ];

        return view('redesign.pages.acheter-appartement-paris-ile-de-france', compact('data'));
    }
}
