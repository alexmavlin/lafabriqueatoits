<?php

namespace App\Http\Controllers\Pages;

use App\Helpers\Search\Filter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\SearchRequest;
use App\Models\Blog;
use App\Models\Department;
use App\Models\Habitation;
use Illuminate\Http\Request;

class ImmobilierNeufIleDeFranceController extends Controller
{
    public function __invoke(SearchRequest $searchRequest)
    {
        $searchRequest->validated();
        // dd($searchRequest->type);
        $habiatation_instance = new Habitation();

        /* Filter */
        $filter = new Filter($habiatation_instance, $searchRequest, 5);
        $habitations = $filter->find();

        /* Response data */
        $data = [
            "meta" => [
                "title" => "Immobilier Neuf en Ile de France | Programme immobilier Maison et Appartement neuf | La Fabrique à Toits",
                "robots" => "index, follow",
                "description" => "Spécialiste de l’achat en immobilier neuf en Ile de France, nous avons sélectionné les meilleurs programmes d’appartement et de maison neuve en région Francilienne. Notre Solution dédiée à l’immobilier neuf vous permettra de trouver le bien de vos rêves ainsi que de sécuriser votre investissement.",
                "keywords" => "appartement neuf ile de France, immobilier neuf ile de France, programme immobilier neuf ile de France",
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
                    'url' => route('immobilierNeufIleDeFrance'),
                    'title' => 'Liste de tous nos programmes neuf en Ile de France',
                    'name' => 'Immobilier Neuf en Ile de France',
                ],  
            ],
            'main_preheading' => "",
            'main_heading' => 'Tout savoir sur<br>l’investissem<br>ent immobilier<br>neuf en IDF',
            'main_img' => 'real_estate_search_main.webp',
            'main_afterheading' => '',
            'main_reverse' => true,
            'main_full_filter' => false,
            'main_no_filter' => false,
            'main_form' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'habitations' => $habitations,
            'habitation_json' => json_encode($habitations),
            'departments' => Department::select('id', 'name')->get(),
            'categories' => null,
        ];

        // dd($data);

        return view('redesign.pages.immobilier-neuf-ile-de-france', compact('data'));
    }
}
