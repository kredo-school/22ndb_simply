<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\DonationItem;

class ItemController extends Controller
{
    private $item; 
    private $donation_item;

    public function __construct(Item $item, DonationItem $donation_item)
    {
        $this->item = $item;
        $this->donation_item = $donation_item;
    }

    public function show()
    {
        return view('users.items.show');
    }
   
    
    public function myItemPage($id)
    {
       $item = Item::find($id);

        return view('users.items.my_item')
                ->with('item', $item);
    }

     
    public function otherItemPage($id)
    {
        Item::onlyTrashed()->whereNotNull('id')->restore();
        $otherItem = Item::onlyTrashed()->get();

        return view('users.items.other_items')
                ->with('otherItem', $otherItem);
    }


    public function add(Request $request)
    {
        $all_categories = Category::all();
        $category = $request->query('category', null);

        return view('users.items.add')
                ->with('all_categories', $all_categories)
                ->with('selected_category', $category);
    }

    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required',
            'name' => 'required|max:30',
            'description' => 'max:1000',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $this->item->name        = $request->name;
        $this->item->description = $request->description;
        $this->item->image       = 'data:image/'.$request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        $this->item->user_id     = Auth::id();
        $this->item->category_id = $request->category;
        $this->item->save();

        if ($request->has('donation')) {
            $this->donation_item->user_id = Auth::id();
            $this->donation_item->item_id = $this->item->id;
            $this->donation_item->save();
        }

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
            'description' => 'max:1000',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $item = $this->item->findOrFail($id);

        $item->name        = $request->name;
        $item->description = $request->description;
        if($request->image) {
            $item->image =  'data:image/'.$request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        }
        $item->user_id     = Auth::id();
        $item->category_id = $request->category;
        $item->save();

        if ($request->has('donation')) {
            $this->donation_item->user_id = Auth::id();
            $this->donation_item->item_id = $this->item->id;
            $this->donation_item->save();
        }

        return redirect()->route('my_item');
    }

    public function destroy($id)
    {
        $this->item->findOrFail($id)->delete();

        return redirect()->route('homepage');
    }

}
