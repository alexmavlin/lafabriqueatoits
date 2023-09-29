<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\StoreRequest;
use App\Http\Requests\Admin\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $storeData;
    private $storeValidatedData;

    private $updateData;
    private $updateValidatedData;
    private $blog;


    public function index() {
        $data = [
            'blogs' => Blog::with('category')->paginate(10),
        ];
        //dd($data);
        return view('admin.blog.index', compact('data'));
    }
    public function create() {
        $data = [
            'categories' => Category::all(),
        ];
        return view('admin.blog.create', compact('data'));
    }

    
    /* Store Blog Functions */
    public function store(StoreRequest $request) {

        $this->storeValidatedData = $request->validated();

        $this->buildStoreData();
        $this->uploadContentImages();
        // dd($this->storeData);

        $blog = Blog::create($this->storeData);

        if(!empty($this->storeValidatedData['categorie'])) {
            $blog->category()->attach($this->storeValidatedData['categorie']);
        }

        return redirect()->route('amdin.blog.index')->with('success', "L'article a été créee avec succès");
    }

    private function buildStoreData()
    {
        $this->storeData = [
            'h2_title_cards' => isset($this->storeValidatedData['h2_title_cards']) ? $this->storeValidatedData['h2_title_cards'] : '',
            'en_savoir_cards' => isset($this->storeValidatedData['en_savoir_cards']) ? $this->storeValidatedData['en_savoir_cards'] : '',
            'description_cards' => isset($this->storeValidatedData['description_cards']) ? $this->storeValidatedData['description_cards'] : '',
            'slug' => Str::slug($this->storeValidatedData['url']),
            'title' => isset($this->storeValidatedData['title']) ? $this->storeValidatedData['title'] : '',
            'meta_description' => isset($this->storeValidatedData['meta_description']) ? $this->storeValidatedData['meta_description'] : '',
            'meta_keywords' => isset($this->storeValidatedData['meta_keywords']) ? $this->storeValidatedData['meta_keywords'] : '',
            'meta_title' => isset($this->storeValidatedData['meta_title']) ? $this->storeValidatedData['meta_title'] : '',
            'alt' => isset($this->storeValidatedData['alt']) ? $this->storeValidatedData['alt'] : '',
            'h1_title' => isset($this->storeValidatedData['h1_title']) ? $this->storeValidatedData['h1_title'] : '',
            'date' => isset($this->storeValidatedData['date']) ? $this->storeValidatedData['date'] : date('Y-m-d', time()),
            'author' => isset($this->storeValidatedData['author']) ? $this->storeValidatedData['author'] : '',
            'categorie' => 1,
            'h2_title' => isset($this->storeValidatedData['h2_title']) ? $this->storeValidatedData['h2_title'] : '',
            'h3_title' => isset($this->storeValidatedData['h3_title']) ? $this->storeValidatedData['h3_title'] : '',
            'content' => isset($this->storeValidatedData['content']) ? $this->storeValidatedData['content'] : '',
            'alt_content' => isset($this->storeValidatedData['alt_content']) ? $this->storeValidatedData['alt_content'] : '',
            'is_selected' => isset($this->storeValidatedData['is_selected']) ? 1 : 0,
        ];

        
        for($i = 2; $i <= 15; $i++) {
            $this->storeData['h3_title_' . $i] = isset($this->storeValidatedData['h3_title_' . $i]) ? $this->storeValidatedData['h3_title_' . $i] : '';
            $this->storeData['content_' . $i] = isset($this->storeValidatedData['content_' . $i]) ?$this->storeValidatedData['content_' . $i] : '';
        }
    }

    private function uploadContentImages()
    {
        if(isset($this->storeValidatedData['image'])) {
            $file_name = time() . '_' . $this->storeValidatedData['image']->getClientOriginalName();
            $this->storeValidatedData['image']->move(public_path('images/content/blog'), $file_name);
            $this->storeData['image'] = $file_name;
        }
        if(isset($this->storeValidatedData['img_content'])) {
            $file_name = time() . '_' . $this->storeValidatedData['img_content']->getClientOriginalName();
            $this->storeValidatedData['img_content']->move(public_path('images/content/blog'), $file_name);
            $this->storeData['img_content'] = $file_name;
        }

        for ($i = 2; $i <= 15; $i++)
        {
            if (isset($this->storeValidatedData['img_content_' . $i]))
            {
                $file_name = time() . '_' . $this->storeValidatedData['img_content_' . $i]->getClientOriginalName();
                $this->storeValidatedData['img_content_' . $i]->move(public_path('images/content/blog'), $file_name);
                $this->storeData['img_content_' . $i] = $file_name;
            }
            if (isset($this->storeValidatedData['img_alt_' . $i]))
            {
                $this->storeData['img_alt_' . $i] = $this->storeValidatedData['img_alt_' . $i];
            }
        }
    }
    /* // Store Blog Functions */

    /* Editing Functions */
    public function edit(Blog $blog) {
        // dd(public_path() . '/images/content/blog/' . $blog->image);
        $data = [
            'blog' => $blog,
            'categories' => Category::all(),
        ];
        return view('admin.blog.edit', compact('data'));
    }

    /* Update Blog */
    public function update(Blog $blog, UpdateRequest $request) {

        $this->blog = $blog;
        $this->updateValidatedData = $request->validated();

        $this->buildUpdateData();
        $this->updateImages();

        // Uploading images

        $blog->update($this->updateData);

        if(!empty($this->updateValidatedData['categorie'])) {
            $blog->category()->sync($this->updateValidatedData['categorie']);
        }

        return redirect()->route('amdin.blog.edit', $blog->id)->with('success', 'Successfully edited');
    }

    private function buildUpdateData()
    {
        $this->updateData = [
            'h2_title_cards' => isset($this->updateValidatedData['h2_title_cards']) ? $this->updateValidatedData['h2_title_cards'] : '',
            'en_savoir_cards' => isset($this->updateValidatedData['en_savoir_cards']) ? $this->updateValidatedData['en_savoir_cards'] : '',
            'description_cards' => isset($this->updateValidatedData['description_cards']) ? $this->updateValidatedData['description_cards'] : '',
            'slug' => Str::slug($this->updateValidatedData['url']),
            'title' => isset($this->updateValidatedData['title']) ? $this->updateValidatedData['title'] : '',
            'meta_description' => isset($this->updateValidatedData['meta_description']) ? $this->updateValidatedData['meta_description'] : '',
            'meta_keywords' => isset($this->updateValidatedData['meta_keywords']) ? $this->updateValidatedData['meta_keywords'] : '',
            'meta_title' => isset($this->updateValidatedData['meta_title']) ? $this->updateValidatedData['meta_title'] : '',
            'alt' => isset($this->updateValidatedData['alt']) ? $this->updateValidatedData['alt'] : '',
            'h1_title' => isset($this->updateValidatedData['h1_title']) ? $this->updateValidatedData['h1_title'] : '',
            'date' => isset($this->updateValidatedData['date']) ? $this->updateValidatedData['date'] : '',
            'author' => isset($this->updateValidatedData['author']) ? $this->updateValidatedData['author'] : '',
            'categorie' => 1,
            'h2_title' => isset($this->updateValidatedData['h2_title']) ? $this->updateValidatedData['h2_title'] : '',
            'h3_title' => isset($this->updateValidatedData['h3_title']) ? $this->updateValidatedData['h3_title'] : '',
            'content' => isset($this->updateValidatedData['content']) ? $this->updateValidatedData['content'] : '',
            'alt_content' => isset($this->updateValidatedData['alt_content']) ? $this->updateValidatedData['alt_content'] : '',
            'is_selected' => isset($this->updateValidatedData['is_selected']) ? 1 : 0,
        ];
        for($i = 2; $i <= 15; $i++) {
            $this->updateData['h3_title_' . $i] = isset($this->updateValidatedData['h3_title_' . $i]) ? $this->updateValidatedData['h3_title_' . $i] : '';
            $this->updateData['content_' . $i] = isset($this->updateValidatedData['content_' . $i]) ?$this->updateValidatedData['content_' . $i] : '';
        }
    }

    private function updateImages()
    {
        if(isset($this->updateValidatedData['image'])) {
            if($this->blog->image) {
                if(file_exists(public_path() . '/images/content/blog/' . $this->blog->image)) {
                    unlink(public_path() . '/images/content/blog/' . $this->blog->image);
                }
            }
            $file_name = time() . '_' . $this->updateValidatedData['image']->getClientOriginalName();
            $this->updateValidatedData['image']->move(public_path('images/content/blog'), $file_name);
            $this->updateData['image'] = $file_name;
        }
        if(isset($this->updateValidatedData['img_content'])) {
            if($this->blog->img_content) {
                if(file_exists(public_path() . '/images/content/blog/' . $this->blog->img_content)) {
                    unlink(public_path() . '/images/content/blog/' . $this->blog->img_content);
                }
            }
            $file_name = time() . '_' . $this->updateValidatedData['img_content']->getClientOriginalName();
            $this->updateValidatedData['img_content']->move(public_path('images/content/blog'), $file_name);
            $this->updateData['img_content'] = $file_name;
        }
        for ($i = 2; $i <= 15; $i++)
        {
            if (isset($this->updateValidatedData['img_content_' . $i]))
            {
                if ($this->blog['img_content_' . $i])
                {
                    if (file_exists(public_path() . '/images/content/blog/' . $this->blog['img_content_' . $i]))
                    {
                        unlink(public_path() . '/images/content/blog/' . $this->blog['img_content_' . $i]);
                    }
                }
                $file_name = time() . '_' . $this->updateValidatedData['img_content_' . $i]->getClientOriginalName();
                $this->updateValidatedData['img_content_' . $i]->move(public_path('images/content/blog'), $file_name);
                $this->updateData['img_content_' . $i] = $file_name;
            }
            if (isset($this->updateValidatedData['img_alt_' . $i]))
            {
                $this->updateData['img_alt_' . $i] = $this->updateValidatedData['img_alt_' . $i];
            }
        }
    }








    public function delete(Blog $blog) {

        $this->blog = $blog;

        if($this->blog->image) {
            if(file_exists(public_path() . '/images/content/blog/' . $this->blog->image)) {
                unlink(public_path() . '/images/content/blog/' . $this->blog->image);
            }
        }
        if($this->blog->img_content) {
            if(file_exists(public_path() . '/images/content/blog/' . $this->blog->img_content)) {
                unlink(public_path() . '/images/content/blog/' . $this->blog->img_content);
            }
        }
        for ($i = 2; $i <= 15; $i++)
        {
            if ($this->blog['img_content_' . $i])
            {
                if (file_exists(public_path() . '/images/content/blog/' . $this->blog['img_content_' . $i]))
                {
                    unlink(public_path() . '/images/content/blog/' . $this->blog['img_content_' . $i]);
                }
            }
        }
        $blog->category()->detach();
        $blog->delete();
        return redirect()->route('amdin.blog.index')->with('success', 'Blog article was deleted');
    }
}
