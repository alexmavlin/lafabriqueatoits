<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AgenceImmobiliereDautsDeSeine92Controller extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "TOP 10 des villes du 92 où il fait bon vivre et investir  | Chasseur Immobilier Hauts-de-Seine et Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Découvrez les 10 villes où il fait bon vivre et investir dans le 92 au 1er semestre 2021 (janvier à juin 2021). Spécialiste de l’immobilier francilien, notre agence immobilière basée au cœur des Hauts-de-Seine (92) vous conseil et vous accompagne pour l’achat et la vente de votre appartement ou maison à Asnières-sur-Seine, Clamart, Nanterre, Colombes, Bois-Colombes, Bagneux, Gennevilliers, Courbevoie, Meudon, Rueil-Malmaison. Parlons investissement immobilier, prix du mètre carré, tendance immobilière et rentabilité afin que votre prochaine acquisition soit couronnée de succès.",
                "keywords" => "investissement 92, achat immobilier 92",
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
                    'url' => route('agenceImmobiliereDautsDeSeine92'),
                    'title' => 'achat et investissement immobilier 92',
                    'name' => 'Top 10 Villes du 92',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => 'Votre succès immobilier dans les Hauts-de-Seine!',
            'main_img' => 'top92_main.webp',
            'main_reverse' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => null,
            'departments' => null,
            'categories' => null,
            'investir' => true,
        ];
        return view('redesign.pages.agence-immobiliere-hauts-de-seine-92', compact('data'));
    }
}
