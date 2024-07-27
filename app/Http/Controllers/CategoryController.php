<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private $category;
    private $item;

    public function __construct(Category $category, Item $item){
        $this->category = $category;
        $this->item = $item;
    }

    public function eachCategory($id)
    {

        $categories = Category::all();
       
        return view('users.categories.each_category', ['categories' => $categories]);
    
    }

    public function createCategory(Request $request)
    {  
       
         // 1. Validate new category name
        $request->validate([
            'name' => 'required|max:255|unique:categories,name'
        ]);

        // 2. Save new category name
        
        $category = new Category;
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('homepage', ['id' => Auth::user()->id]);
    }

    public function editCategory(Request $request)
    {
        
       // Validate the request data
        $request->validate([
        'edit_category_name' => 'required|max:255',
    ]);

        $category = $this->category->findOrFail($request->id);  
        $category->name = $request->input('edit_category_name');
        $category->save();

        // Redirect to homepage
        return redirect()->route('homepage', ['id' => Auth::user()->id]);
    }
    
    public function deleteCategory($id)
    {
       $category = Category::findOrFail($id);
       $category->delete();

        return redirect()->back();
    }

    public function showCategoryItem($id)
    {
        $category_items = Category::find($id)->item;
        $category = Category::find($id);
    
        return view('users.categories.each_category')
                ->with('category_items', $category_items)
                ->with('category', $category);
    
    }


}