<?php

namespace App\Http\Controllers\Pages\Chasseur;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Chasseur\Item;
use Illuminate\Http\Request;

class ChasseurItemController extends Controller
{
    public function __invoke($url_index)
    {
        // dd($url_index);
        $content = Item::where('url_index', $url_index)->with('faqs')->first();
        // dd($content);
        /* Response data */
        $data = [
            "meta" => [
                "title" => $content->meta_title,
                "robots" => "index, follow",
                "description" => $content->meta_description,
                "keywords" => $content->meta_keywords,
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
                    'url' => route('immobilierAncienParisIDF'),
                    'title' => 'Notre service de chasseur immobilier en Ile de France',
                    'name' => 'Chasseur Immobilier IDF',
                ],
                [
                    'url' => route('chasseur.item.show', $content->url_index),
                    'title' => $content->breadcrumbs_title,
                    'name' => $content->breadcrumbs_name,
                ],
            ],
            'main_heading' => $content->main_title,
            'main_img' => 'chasseur-immobilier-paris-75-min.webp',
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'content' => $content,
            'habitations' => null,
            'departments' => null,
            'categories' => null, 
        ];

        return view('pages.chasseur.itemshow', compact('data'));
    }
}
