<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DonationController extends Controller
{
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function show()
    {
        return view('users.donations.show');
    }

    public function destroy($id)
    {
        $this->item->findOrFail($id)->delete();
        return redirect()->route('homepage');
    }

}
