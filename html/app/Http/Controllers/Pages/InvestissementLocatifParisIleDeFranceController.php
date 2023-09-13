<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class InvestissementLocatifParisIleDeFranceController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Investissement locatif clé en main Paris et Ile de France | Chasseur Immobilier | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Vous souhaitez investir dans une maison ou un appartement à Paris ou en Ile de France ? La Fabrique à Toits vous propose un service dédié à l'investissement locatif clé en main. Nos chasseurs immobiliers vous accompagnent de A à Z pour optimiser et concrétiser votre projet d’investissement.",
                "keywords" => "investissement locatif ile de France, investissement locatif paris, investissement locatif clé en main, investissement locatif rentable",
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
                    'url' => route('investissementLocatifParisIleDeFrance'),
                    'title' => 'Investissement Locatif clé en Main à Paris et en Ile de France',
                    'name' => 'Investissement locatif à Paris et en Ile de France',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => 'Envie de réussir votre projet? Faites-nous confiance pour investissement locatif!',
            'main_img' => 'inestissiment_main.webp',
            'main_reverse' => true,
            'blogs' => null,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
            'investir' => true,
        ];

        return view('redesign.pages.investissement-locatif-paris-ile-de-france', compact('data'));
    }
}
