<?php

namespace App\Http\Controllers\Pages\Chasseur;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Chasseur\Chasseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ChasseurController extends Controller
{
    private $url_index;

    public function __invoke($url_index)
    {
        $this->url_index = $url_index;
        
        $data = $this->builResponseData();
        //dd($data);

        return view('redesign.pages.chasseur-immobilier', compact('data'));
    }
    
    private function builResponseData()
    {
        $content = Chasseur::where('url_index', $this->url_index)->with('cards')->with('faqs')->first();
        return [
            "meta" => [
                "title" => $content->meta_title,
                "robots" => "index, follow",
                "description" => $content->meta_description,
                "keywords" => $content->meta_keywords,
                "canonical" => request()->url(),
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => $this->url_index != 'paris-IDF' ? route('immobilierAncienParisIDF') : '',
                    'title' => 'Notre service de chasseur immobilier en Ile de France',
                    'name' => 'Chasseur Immobilier IDF',
                ],
                [
                    'url' => route('chasseur.show', $content->url_index),
                    'title' => $content->breadcrumbs_title,
                    'name' => $content->breadcrumbs_name,
                ],
            ],
            'main_preheading' => "",
            'main_heading' => $content->page_title,
            'main_img' => 'chasseur-immobilier-paris.png',
            'main_reverse' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'content' => $content,
            'habitations' => null,
            'departments' => null,
            'categories' => null,
        ];
    }
}
