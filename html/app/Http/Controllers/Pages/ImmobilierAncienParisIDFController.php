<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class ImmobilierAncienParisIDFController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "Comment acheter un bien immobilier, Conseil Achat Immobilier  | Chasseur Immobilier à Paris et Ile de France | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Comment acheter un bien immobilier ? Découvrez tous les conseils achat immobilier de La Fabrique à Toits, chasseur d'appartement maison à Paris et en Ile de France (95 Val D'Oise, 92 Hauts de Seine, 94 Val de Marne, 91 Essonne, 77 Seine-et-Marne, 78 Yvelines) notre équipe de chasseur immobilier vous partagent leurs avis !",
                "keywords" => "Comment acheter un bien immobilier, Conseil Achat Immobilier",
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
                    'url' => route('immobilierAncienParisIDF'),
                    'title' => 'Conseils achat immobilier',
                    'name' => 'Comment acheter un bien immobilier ?',
                ],
            ],
            'main_heading' => 'Découvrez notre guide pour acheter en toute sérénité',
            'main_img' => 'chasse-immobiliere-min.webp',
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => null,
            'departments' => null,
            'categories' => null,
            'investir' => true,
        ];

        return view('pages.immobilier-ancien-paris-idf', compact('data'));
    }
}
