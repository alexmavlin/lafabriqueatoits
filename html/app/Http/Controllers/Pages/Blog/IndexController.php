<?php

namespace App\Http\Controllers\Pages\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    private $category;
    private $period;
    private $blogs;

    public function __invoke()
    {
        $this->category = request()->get('category');
        $this->period = request()->get('period');
        $this->blogs = Blog::query();

        $this->filterBlogsByCategory();
        $this->filterBlogsByPeriod();

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
                "links" => [],
                "scripts" => [],
            ],
            'breadcrumbs' => [
                [
                    'url' => route('immobilierNeufIleDeFrance'),
                    'title' => "Actualité de notre agence de chasseurs d'appartement à Paris et en Ile-de-France",
                    'name' => 'Actualités',
                ],  
            ],
            'main_preheading' => "",
            'main_heading' => 'Naviguer sur le marché immobilier Parisien et Francilien',
            'main_img' => 'blog_index.webp',
            'main_reverse' => false,
            'main_full_filter' => false,
            'main_no_filter' => true,
            'main_form' => false,
            'blogs' => $this->respondWithBlogs(),
            'habitations' => null,
            'habitation_json' => null,
            'departments' => null,
            'categories' => Category::all(),
        ];
        // dd($data);

        return view('redesign.pages.blog.index', compact('data'));
    }

    private function respondWithBlogs()
    {
        return $this->blogs->orderBy('id', 'DESC')->paginate(9);
    }

    private function filterBlogsByCategory()
    {
        if ($this->category)
        {
            $filterValue = $this->category;
            $this->blogs->whereHas('category', function($q) use ($filterValue){
                $q->where('slug_name', $filterValue);
            });
        }
    }

    private function filterBlogsByPeriod()
    {
        if ($this->period)
        {
            $filterValue = date('Y-m-d\TH:i:s', (time() - $this->period * 24 * 60 * 60));
            $this->blogs->where('created_at', '>', $filterValue);
        }
    }
}
