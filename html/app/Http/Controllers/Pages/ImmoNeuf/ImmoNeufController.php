<?php

namespace App\Http\Controllers\Pages\ImmoNeuf;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Department;
use App\Models\Habitation;
use App\Models\ImmoNeuf\ImmoNeuf;
use Illuminate\Http\Request;

class ImmoNeufController extends Controller
{
    public function __invoke($url_index)
    {
        $content = ImmoNeuf::where('url_index', $url_index)->first();
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
                "preconnects" => [],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('immobilierNeufIleDeFrance'),
                    'title' => 'Listing de tous nos programmes neuf en Ile de France',
                    'name' => 'Programme immobilier neuf en Ile de France',
                ],
                [
                    'url' => route('immoneuf.show', $content->url_index),
                    'title' => $content->breadcrumbs_title,
                    'name' => $content->breadcrumbs_name,
                ],
            ],
            'main_preheading' => "",
            'main_heading' => $content->page_title,
            'main_img' => $content->img_main,
            'main_reverse' => true,
            'blogs' => Blog::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'content' => $content,
            'habitations' => Habitation::where('is_selected', 1)->orderBy('id', 'DESC')->limit(3)->get(),
            'departments' => Department::where('num', explode('-', $url_index)[0])->
                                            with(['habitations' => function($q) {
                                                $q->with('lots');
                                            }])->first(),
            'categories' => null, 
            'acceder' => true,
        ];

        // dd($data);

        return view('redesign.pages.immo-neuf', compact('data'));
    }
}
