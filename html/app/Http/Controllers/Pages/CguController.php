<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Habitation;
use Illuminate\Http\Request;

class CguController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Chasseur Immobilier Ancien et Neuf à Paris et en Ile de France | Résidence et Investissement locatif | La Fabrique à Toits | CGU",
                "robots" => "index, follow",
                "description" => "La Fabrique à Toits est l'Agence de référence pour trouver votre bien immobilier, ancien ou neuf, à Paris et en Ile de France. Chasseur d’appartement et de maison, nous sommes à vos côtés pour vous aider à trouver le lieu idéal pour vivre ou investir. Nous pouvons aussi vous accompagner pour la vente de votre bien via notre service Double Projet ! | CGU",
                "keywords" => "Chasseur Immobilier, immobilier neuf, programme immobilier neuf, investissement locatif",
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
            'breadcrumbs' => false,
            'main_heading' => "Découvrez une nouvelle dimension de l'immobilier avec notre Agence sur-mesure",
            'main_img' => 'chasseur-immobilier-Paris-Ile-de-France-min.webp',
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => Habitation::orderBy('id', 'DESC')->limit(3)->get(),
            'departments' => null,
            'categories' => null,
        ];

        return view('pages.cgu', compact('data'));
    }
}
