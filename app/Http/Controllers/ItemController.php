<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function myItemPage()
    {
        return view('users.items.my_item');
    }

    public function show()
    {
        return view('users.items.show');
    }

    public function add()
    {
        $all_categories = Category::all();
        return view('users.items.add')
                ->with('all_categories', $all_categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required|max:30',
            'description' => 'max:1000',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $this->item->category    = $request->category;
        $this->item->name        = $request->name;
        $this->item->description = $request->description;
        $this->item->image       = 'data:image/'.$request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        $this->item->save();

        return redirect()->route('homepage');
    }

    public function edit($id)
    {
        $all_categories = Category::all();
        $item = $this->item->findOrFail($id);
        if(Auth::user()->id != $item->user->id) {
            return redirect()->back();
        }

        return view('users.items.edit')
                ->with('all_categories', $all_categories)
                ->with('item', $item);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required|max:30',
            'description' => 'required|max:1000',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $item = $this->item->findOrFail($id);

        $item->category    = $request->category;
        $item->name        = $request->name;
        $item->description = $request->description;
        if($request->image) {
            $item->image =  'data:image/'.$request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        }
        $item->save();

        return redirect()->route('my_item');
    }

    public function destroy($id)
    {
        $item = $this->item->findOrFail($id);
        $item->delete();
        return redirect()->route('homepage');
    }
}
