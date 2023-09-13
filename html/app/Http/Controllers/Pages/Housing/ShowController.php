<?php

namespace App\Http\Controllers\Pages\Housing;

use App\Http\Controllers\Controller;
use App\Models\Habitation;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($dpt_slug)
    {
        $slug = request()->get('programme');
        $habitation = Habitation::where('slug', $slug)->
                                    with('images')->
                                    with('lots')->
                                    first();
        //dd($habitation);
        /* Response data */
        $data = [
            "meta" => [
                "title" => $habitation->meta_title,
                "robots" => "index, follow",
                "description" => $habitation->meta_description,
                "keywords" => $habitation->meta_keywords,
                "canonical" => request()->url() . '?programme=' . request()->get('programme') . '&ville=' . request()->get('ville'),
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [
                    'https://fonts.googleapis.com',
                    'https://fonts.gstatic.com',
                ],
                "links" => [
                    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'
                ],
                "scripts" => [
                    'https://code.jquery.com/jquery-3.7.1.min.js',
                    'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'
                ],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('immobilierNeufIleDeFrance'),
                    'title' => 'Liste de tous nos programmes neuf en Ile de France',
                    'name' => 'Immobilier Neuf en Ile de France',
                ],  
                [
                    'url' => request()->url() . '?programme=' . request()->get('programme') . '&ville=' . request()->get('ville'),
                    'title' => $habitation->title,
                    'name' => $habitation->title,
                ],
            ],
            'main_preheading' => "",
            'main_heading' => '',
            'main_img' => 'single_listing_main.webp',
            'main_afterheading' => '',
            'main_reverse' => false,
            'main_full_filter' => false,
            'main_no_filter' => true,
            'main_form' => false,
            'main_slider' => true,
            'blogs' => null,
            'habitation' => $habitation,
            'habitation_json' => null,
            'departments' => null,
            'categories' => null,
        ];

        // dd($data);

        return view('redesign.pages.listing.show', compact('data'));
    }
}
