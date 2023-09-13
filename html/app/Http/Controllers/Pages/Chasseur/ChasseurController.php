<?php

namespace App\Http\Controllers\Pages\Chasseur;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Chasseur\Chasseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ChasseurController extends Controller
{
    public function __invoke($url_index)
    {
        $content = Chasseur::where('url_index', $url_index)->with('cards')->with('faqs')->first();
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
                    'url' => $url_index != 'paris-IDF' ? route('immobilierAncienParisIDF') : '',
                    'title' => 'Notre service de chasseur immobilier en Ile de France',
                    'name' => 'Chasseur Immobilier IDF',
                ],
                [
                    'url' => route('chasseur.show', $content->url_index),
                    'title' => $content->breadcrumbs_title,
                    'name' => $content->breadcrumbs_name,
                ],
            ],
            'main_heading' => $content->page_title,
            'main_img' => 'chasseur-immobilier-paris-75-min.webp',
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'content' => $content,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
        ];

        return view('pages.chasseur.show', compact('data'));
    }
}
