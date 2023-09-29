<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendreAcheterBienImmobilierParisIleDeFranceController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Service Double Projet pour l’Achat et la Vente de votre Bien | Chasseur Immobilier à Paris et Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Le service Double Projet de la Fabrique à Toits est dédié à l’achat d’un nouveau bien et à la vente de votre bien actuel, dans le même temps. Chasseur immobilier en Ile de France et à Paris, nous prenons tout en main pour vous garantir un achat Coup de Coeur et une vente en toute sérénité.",
                "keywords" => "achat appartement, achat maison, vente appartement, vente maison",
                "canonical" => request()->url(),
                "preloads" => [
                    asset('css/app.css'),
                ],
                "prefetches" => [],
                "preconnects" => [],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('vendreAcheterBienImmobilierParisIleDeFrance'),
                    'title' => 'Double projet immobilier',
                    'name' => 'Chasse Immobilière Paris et Ile de France',
                ],
            ],
            'main_preheading' => "",
            'main_heading' => 'Double Projet, double bonheur! Transformez vos rêves immobiliers en réalité, avec style!',
            'main_img' => 'vendre-main.webp',
            'main_reverse' => true,
            'blogs' => null,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
            'investir' => true,
        ];

        return view('redesign.pages.vendre-acheter-bien-immobilier-paris-ile-de-france', compact('data'));
    }
}
