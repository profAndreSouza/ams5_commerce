<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categories = null;
        return view('product.index', compact('categories'));
    }

    public function showCategory($slug)
    {
        $category = Category::with('parent')->where("slug", "=", $slug)->first();
        $categories = $this->parentCategories($category);

        return view('product.index', compact('categories'));
    }
    
    // Função para retornar os "pais" recursivamente
    private function parentCategories($category) {
        if (!$category)
            return null;
        
        $parent = $this->parentCategories($category->parent);
        
        return array_merge(
            $parent ?? [],
            [
                [
                    'id' => $category->id,
                    'name' => $category->name,
                    'slug' => $category->slug
                ]
            ]
        );

        
    }
}
