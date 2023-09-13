<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipeChasseurMaisonAppartementIleDeFranceController extends Controller
{
    public function __invoke()
    {

        /* Response data */
        $data = [
            "meta" => [
                "title" => "Notre Réseau de Chasseur d’Appartement et Maison | Chasseur Immobilier à Paris et Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Acheter votre futur bien ou réaliser un investissement locatif est une opération qui demande du temps, de la réactivité et surtout le Réseau adéquat. En tant que chasseur d’appartement et de maison à Paris et en Ile de France, la Fabrique à Toits vous propose de bénéficier de son réseau de Courtiers, Entrepreneurs ou Architectes pour mener à bien votre projet immobilier.",
                "keywords" => "réseau immobilier, agence immobilière, chasseur immobilier, investissement locatif",
                "canonical" => request()->url(),
                "preloads" => [],
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
                    'url' => route('equipeChasseurMaisonAppartementIleDeFrance'),
                    'title' => 'Notre réseau de chasseur de maison et appartement en Ile de France',
                    'name' => 'Notre Réseau',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => 'Transformez vos rêves immobiliers en réalité',
            'main_img' => 'a_propos_main.webp',
            'main_reverse' => true,
            'blogs' => null,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
        ];

        return view('redesign.pages.equipe-chasseur-maison-appartement-ile-de-france', compact('data'));
    }
}
