<?php

namespace App\Http\Controllers\Pages\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function __invoke()
    {
        /* Response data */
        $data = [
            "meta" => [
                "title" => "La Fabrique à Toits | Actualités Agence Immobilière et chasseur d'appartement à Paris et en Ile de France",
                "robots" => "index, follow",
                "description" => "Actualités de notre agence de chasseur immobilier à Paris et en Ile de France",
                "keywords" => "Agence immobilière, chasseur immobilier Paris",
                "canonical" => request()->url(),
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [
                    'https://fonts.googleapis.com',
                    'https://fonts.gstatic.com',
                ],
                "links" => [
                    'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                ],
                "scripts" => [
                    'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('immobilierNeufIleDeFrance'),
                    'title' => "Actualité de notre agence de chasseurs d'appartement à Paris et en Ile-de-France",
                    'name' => 'Actualités',
                ],  
            ],
            'main_heading' => 'Actualités de notre agence immobilière à Paris et Ile de France  ',
            'main_img' => 'immobilier-neuf-ile-de-france-min.webp',
            'blogs' => Blog::orderBy('id', 'DESC')->paginate(10),
            'selected_blogs' => Blog::where('is_selected', 1)->limit(2)->get(),
            'habitations' => null,
            'habitation_json' => null,
            'departments' => null,
            'categories' => Category::with('blogs')->get(),
        ];
        // dd($data);

        return view('pages.blog.index', compact('data'));
    }
}
