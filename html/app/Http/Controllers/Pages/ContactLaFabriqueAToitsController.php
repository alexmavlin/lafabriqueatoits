<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactLaFabriqueAToitsController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Contact | Agence de chasseur immobilier à Paris et en Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Contacter La Fabrique à Toits, agence de chasseur immobilier à Paris et en Ile de France. Nous sommes à vos côtés pour trouver votre maison ou appartement en Ile de France. Vous souhaitez réaliser un investissement locatif ou investir dans l'immobilier neuf ? Nos experts trouverons le bien qui correspondra à vos critères !",
                "keywords" => "chasseur immobilier, immobilier neuf, investissement locatif",
                "canonical" => request()->url(),
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [
                    'https://fonts.googleapis.com',
                    'https://fonts.gstatic.com',
                ],
                "links" => [],
                "scripts" => [
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyDN_S_KXNE6iq_EsSGra9jmM_raRWoNswk&libraries=places",
                ],
            ],
            'breadcrumbs' => [],
            'main_preheading' => "",
            'main_heading' => 'Vous souhaitez<br>acheter, investir ou<br>vendre votre bien?<br>Contactez Nous!',
            'main_img' => 'contact_page_main.webp',
            'main_afterheading' => 'Prenez contact avec nous pour discuter de votre projet immobilier!',
            'main_reverse' => false,
            'main_full_filter' => true,
            'main_no_filter' => false,
            'main_form' => false,
            'blogs' => null,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
        ];

        return view('redesign.pages.contact-la-fabrique-a-toits', compact('data'));
    }
}
