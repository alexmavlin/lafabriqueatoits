<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Habitation;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        /* Response data */
        $data = [
            "meta" => [
                "title" => "Chasseur Immobilier Ancien et Neuf à Paris et en Ile de France | Résidence et Investissement locatif | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "La Fabrique à Toits est l'Agence de référence pour trouver votre bien immobilier, ancien ou neuf, à Paris et en Ile de France. Chasseur d’appartement et de maison, nous sommes à vos côtés pour vous aider à trouver le lieu idéal pour vivre ou investir. Nous pouvons aussi vous accompagner pour la vente de votre bien via notre service Double Projet !",
                "keywords" => "Chasseur Immobilier, immobilier neuf, programme immobilier neuf, investissement locatif",
                "canonical" => 'https://lfat.triaconst.cz/',
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => false,
            'main_preheading' => "À vos côtés depuis 2015",
            'main_heading' => "Optez pour une expérience immobilière clés en main!",
            'main_img' => 'AdobeStock_565791700.webp',
            'main_reverse' => false,
            'main_arrow' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => Habitation::   orderBy('id', 'DESC')->
                                            limit(3)->
                                            get(),
            'departments' => null,
            'categories' => null,
        ];

         //dd($data['habitations'][0]->images[0]->src);
        //dd($data);
        return view('index', compact('data'));
    }
}
