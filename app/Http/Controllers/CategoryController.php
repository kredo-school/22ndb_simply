<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'name' => 'required|max:255'
        ]);

        // 2. Save new category name

        // $this->category->name = $request->category_name;
        // $this->category->save();

        $category = new Category;
        $category->name = $request->input('name');
        $category->user_id = Auth::user()->id;
        $category->save();

        return redirect()->back();
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
        // return redirect()->route('homepage', ['id' => Auth::user()->id]);


        return redirect()->back();
    }





public function destroy($id)
{
    DB::transaction(function () use ($id) {
        $category = Category::findOrFail($id);
        $othersCategory = Category::firstOrCreate([
                'name' => 'Others',
                'user_id' => auth()->id(),
            ]);

        $updatedRows = Item::where('category_id', $category->id)->update(['category_id' => $othersCategory->id]);

        $category->delete();

    });

    return redirect()->route('homepage');
}



    public function showCategoryItem($id)
    {
        $category_items = Item::where('category_id', $id)->paginate(15);
        $category = Category::find($id);

        return view('users.categories.each_category')
            ->with('category_items', $category_items)
            ->with('category', $category);
    }

}
