<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationAgenceChasseurImmobilierParisIleDeFranceController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Informations | Résidence et Investissement locatif | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Centre information sur l'achat d'appartement ou de maison en Ile de France, l'investissement locatif à Paris et en IDF et nos programmes immobilier neuf.",
                "keywords" => "",
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
                    'url' => route('informationAgenceChasseurImmobilierParisIleDeFrance'),
                    'title' => 'Informations à Propos de La Fabrique à Toits',
                    'name' => 'Informations',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => "Le chemin vers votre chez-vous de rêve commence ici!",
            'main_img' => 'informations_main.webp',
            'main_reverse' => true,
            'blogs' => null,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
        ];

        return view('redesign.pages.information-agence-chasseur-immobilier-paris-ile-de-france', compact('data'));
    }
}
