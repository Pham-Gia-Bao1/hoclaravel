<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ApiController extends Controller
{
    //
    public function getItems()
    {
        $items = new Item();
    
        return response()->json($items->get_all_video());
    }
}
