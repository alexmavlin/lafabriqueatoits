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
    public function store(StoreRequest $request) {
        $validated_data = $request->validated();
        //dd($validated_data);

        $store_data = [
            'h2_title_cards' => isset($validated_data['h2_title_cards']) ? $validated_data['h2_title_cards'] : '',
            'en_savoir_cards' => isset($validated_data['en_savoir_cards']) ? $validated_data['en_savoir_cards'] : '',
            'description_cards' => isset($validated_data['description_cards']) ? $validated_data['description_cards'] : '',
            'slug' => Str::slug($validated_data['url']),
            'title' => isset($validated_data['title']) ? $validated_data['title'] : '',
            'meta_description' => isset($validated_data['meta_description']) ? $validated_data['meta_description'] : '',
            'meta_keywords' => isset($validated_data['meta_keywords']) ? $validated_data['meta_keywords'] : '',
            'meta_title' => isset($validated_data['meta_title']) ? $validated_data['meta_title'] : '',
            'image' => "/uploads/images/blog/" . $validated_data['image']->getClientOriginalName(),
            'alt' => isset($validated_data['alt']) ? $validated_data['alt'] : '',
            'h1_title' => isset($validated_data['h1_title']) ? $validated_data['h1_title'] : '',
            'date' => isset($validated_data['date']) ? $validated_data['date'] : '',
            'author' => isset($validated_data['author']) ? $validated_data['author'] : '',
            'categorie' => 1,
            'h2_title' => isset($validated_data['h2_title']) ? $validated_data['h2_title'] : '',
            'h3_title' => isset($validated_data['h3_title']) ? $validated_data['h3_title'] : '',
            'content' => isset($validated_data['content']) ? $validated_data['content'] : '',
            'img_content' => isset($validated_data['img_content']) ? "/uploads/images/blog/" . $validated_data['img_content']->getClientOriginalName() : '',
            'alt_content' => isset($validated_data['alt_content']) ? $validated_data['alt_content'] : '',
            'is_selected' => isset($validated_data['is_selected']) ? 1 : 0,
        ];
        for($i = 2; $i <= 15; $i++) {
            $store_data['h3_title_' . $i] = isset($validated_data['h3_title_' . $i]) ? $validated_data['h3_title_' . $i] : '';
            $store_data['content_' . $i] = isset($validated_data['content_' . $i]) ?$validated_data['content_' . $i] : '';
        }
        //dd($store_data);
        // Uploading images
        if(isset($validated_data['image'])) {
            $file_name = $validated_data['image']->getClientOriginalName();
            $validated_data['image']->move(public_path('uploads/images/blog'), $file_name);
        }
        if(isset($validated_data['img_content'])) {
            $file_name = $validated_data['img_content']->getClientOriginalName();
            $validated_data['img_content']->move(public_path('uploads/images/blog'), $file_name);
        }

        $blog = Blog::create($store_data);

        if(!empty($validated_data['categorie'])) {
            $blog->category()->attach($validated_data['categorie']);
        }
        return redirect()->route('amdin.blog.index')->with('success', "L'article a été créee avec succès");
    }
    public function edit(Blog $blog) {
        $data = [
            'blog' => $blog,
            'categories' => Category::all(),
        ];
        return view('admin.blog.edit', compact('data'));
    }
    public function update(Blog $blog, UpdateRequest $request) {
        $validated_data = $request->validated();

        $update_data = [
            'h2_title_cards' => isset($validated_data['h2_title_cards']) ? $validated_data['h2_title_cards'] : '',
            'en_savoir_cards' => isset($validated_data['en_savoir_cards']) ? $validated_data['en_savoir_cards'] : '',
            'description_cards' => isset($validated_data['description_cards']) ? $validated_data['description_cards'] : '',
            'slug' => Str::slug($validated_data['url']),
            'title' => isset($validated_data['title']) ? $validated_data['title'] : '',
            'meta_description' => isset($validated_data['meta_description']) ? $validated_data['meta_description'] : '',
            'meta_keywords' => isset($validated_data['meta_keywords']) ? $validated_data['meta_keywords'] : '',
            'meta_title' => isset($validated_data['meta_title']) ? $validated_data['meta_title'] : '',
            'image' => isset($validated_data['image']) ? "/uploads/images/blog/" . $validated_data['image']->getClientOriginalName() : $blog->image,
            'alt' => isset($validated_data['alt']) ? $validated_data['alt'] : '',
            'h1_title' => isset($validated_data['h1_title']) ? $validated_data['h1_title'] : '',
            'date' => isset($validated_data['date']) ? $validated_data['date'] : '',
            'author' => isset($validated_data['author']) ? $validated_data['author'] : '',
            'categorie' => 1,
            'h2_title' => isset($validated_data['h2_title']) ? $validated_data['h2_title'] : '',
            'h3_title' => isset($validated_data['h3_title']) ? $validated_data['h3_title'] : '',
            'content' => isset($validated_data['content']) ? $validated_data['content'] : '',
            'img_content' => isset($validated_data['img_content']) ? "/uploads/images/blog/" . $validated_data['img_content']->getClientOriginalName() : '',
            'alt_content' => isset($validated_data['alt_content']) ? $validated_data['alt_content'] : '',
            'is_selected' => isset($validated_data['is_selected']) ? 1 : 0,
        ];
        for($i = 2; $i <= 15; $i++) {
            $update_data['h3_title_' . $i] = isset($validated_data['h3_title_' . $i]) ? $validated_data['h3_title_' . $i] : '';
            $update_data['content_' . $i] = isset($validated_data['content_' . $i]) ?$validated_data['content_' . $i] : '';
        }

        // Uploading images
        if(isset($validated_data['image'])) {
            if($blog->image) {
                if(file_exists(public_path() . $blog->image)) {
                    unlink(public_path() . $blog->image);
                }
            }
            $file_name = $validated_data['image']->getClientOriginalName();
            $validated_data['image']->move(public_path('uploads/images/blog'), $file_name);
        }
        if(isset($validated_data['img_content'])) {
            if($blog->img_content) {
                if(file_exists(public_path() . $blog->img_content)) {
                    unlink(public_path() . $blog->img_content);
                }
            }
            $file_name = $validated_data['img_content']->getClientOriginalName();
            $validated_data['img_content']->move(public_path('uploads/images/blog'), $file_name);
        }

        $blog->update($update_data);

        if(!empty($validated_data['categorie'])) {
            $blog->category()->sync($validated_data['categorie']);
        }

        return redirect()->route('amdin.blog.edit', $blog->id)->with('success', 'Successfully edited');
    }
    public function delete(Blog $blog) {
        if($blog->image) {
            if(file_exists(public_path() . $blog->image)) {
                unlink(public_path() . $blog->image);
            }
        }
        if($blog->img_content) {
            if(file_exists(public_path() . $blog->img_content)) {
                unlink(public_path() . $blog->img_content);
            }
        }
        $blog->category()->detach();
        $blog->delete();
        return redirect()->route('amdin.blog.index')->with('success', 'Blog article was deleted');
    }
}
