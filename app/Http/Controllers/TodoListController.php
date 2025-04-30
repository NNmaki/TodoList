<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller

{    
    // public function index() {
    //     return view ('App', ['listItems' => ListItem::where('is_completed', '!=', 2)->get()]);
    //     }
    
    
    public function index() {
        return view ('Home', ['listItems' => ListItem::where('is_completed', 0)->get()]);
    }

    public function markComplete($id) {
        $listItem = ListItem::find($id);
        $listItem->is_completed = 1;
        $listItem->save();
        return redirect('/');
    }

    public function saveItem(Request $request) {
        $validated = $request->validate(['listItem' => 'required|string|max:255',]);

        $newListItem = new ListItem;

        // $newListItem->name = $request->listItem;

        $newListItem->name = $validated['listItem'];

        $newListItem->is_completed = 0;
        $newListItem->save();
        return redirect('/');
    }

    public function hideTask($id) {
        $listItem = ListItem::find($id);
        $listItem->is_completed = 2; 
        $listItem->save();
        return redirect('/');
}


}
