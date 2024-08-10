<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\DonationItem;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


class DonationController extends Controller
{
    protected $donationItem;
    protected $category;
    protected $user;
    protected $item;

    public function __construct(DonationItem $donationItem)
    {
        $this->donationItem = $donationItem;

    }

    public function indexDonatedItems() {
        $donationItems = DonationItem::with('item')->paginate(15);
        return view('donated-items.index', [
            'donationItems' => $donationItems
        ]);
    }


    public function showDonatedItem($id) {
        $donationItem = DonationItem::with('user', 'item')
        ->findOrFail($id);

        $user = $donationItem->user;

        return view('donated-items.donated_item', [
        'donationItem' => $donationItem,
        'user' => $user,
        ]);

    }

    public function edit($id)
    {
        $all_categories = Category::all();
        $donationItem = DonationItem::findOrFail($id);

        $isDonated = DonationItem::where('item_id', $donationItem->item->id)->exists();

        if(Auth::user()->id != $donationItem->user->id) {
            return redirect()->back();
        }

        return view('donated-items.edit', [
            'all_categories' => $all_categories,
            'donationItem' => $donationItem,
            'isDonated' => $isDonated
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:30',
            'description' => 'nullable|max:1000',
            'category' => 'required|exists:categories,id',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $item = Item::findOrFail($id);

        $item->name = $request->name;
        $item->description = $request->description;
        $item->category_id = $request->category;
        $item->user_id     = Auth::id();

        if($request->image) {
            $item->image =  'data:image/'.$request->image->extension().';base64,'.base64_encode(file_get_contents($request->image));
        }

        $item->save();

        $donationItem = DonationItem::where('item_id', $item->id)->first();

    if ($request->has('donation')) {
        if (!$donationItem) {
            $donationItem = new DonationItem();
            $donationItem->item_id = $item->id;
        }
        $donationItem->user_id = Auth::id();
        $donationItem->save();
    } else {

        if ($donationItem) {
            $donationItem->delete();
        }
    }

        return redirect()->route('donated.items.index');

    }


    public function destroy($id)
    {
        $donationItem = $this->donationItem->findOrFail($id);
        $donationItem->delete();

        if ($donationItem->item) {
            $donationItem->item->delete();
        }

        return redirect()->route('donated.items.index');
    }

    //Myitems page (donated items)
    public function donated(){
        $user = Auth::user();
        $donatedItems = $this->donationItem
                        ->where('user_id',$user->id)
                        ->with('item')
                        ->paginate(15);

        return view('users.profile.myitems.donated', ['donatedItems' => $donatedItems]);
    }

}

