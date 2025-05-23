<?php

namespace App\Http\Controllers\Pages\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke($category)
    {

        $blog_slug = request()->get('blog');
        $blog = Blog::where('slug', $blog_slug)->first();
        //dd($blog);
        /* Response data */
        $data = [
            "meta" => [
                "title" => $blog->meta_title,
                "robots" => "index, follow",
                "description" => $blog->meta_description,
                "keywords" => $blog->meta_keywords,
                "canonical" => request()->url() . '?blog=' . request()->get('blog'),
                "preloads" => [],
                "prefetches" => [],
                "preconnects" => [],
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('blog.index'),
                    'title' => "Actualité de notre agence de chasseurs d'appartement à Paris et en Ile-de-France",
                    'name' => 'Actualités',
                ],
                [
                    'url' => url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug),
                    'title' => $blog->title,
                    'name' => $blog->title,
                ],
            ],
            'main_preheading' => "",
            'main_heading' => '',
            'main_img' => '',
            'main_reverse' => false,
            'main_full_filter' => false,
            'main_no_filter' => true,
            'main_form' => false,
            'blog' => $blog,
            'selected_blogs' => Blog::where('is_selected', 1)->limit(3)->get(),
            'habitations' => null,
            'habitation_json' => null,
            'departments' => null,
            'categories' => Category::with('blogs')->get(),
        ];
        // dd($data);

        return view('redesign.pages.blog.show', compact('data'));
    }
}
