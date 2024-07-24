<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{
    private $category;

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

        return redirect()->route('homepage', ['id' => $user->id]);
    }

    public function editCategory(Request $request, $id)
    {
        // 1. Validate the data from the form
        $request->validate([
            'name' => 'required|array|max:255'
        ]);

        // 2. Update the category name
        $category = $this->category->findOrFail($id);
        $category->name = $request->edit_category_name;

        // 3. Save the new category name
            $category->save();

        // 4. Redirect to homepage
        return redirect()->route('homepage');
    }
    
}
