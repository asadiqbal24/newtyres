<?php

namespace App\Http\Controllers;

use App\GlobalNotes;
use Illuminate\Http\Request;

class GlobalNotesController extends Controller
{

    public function global_notes_save(Request $request)
    {
           $new=GlobalNotes::first();
           if(empty($new)){
               $new->global_notes=$request->global_notes;
               $new->user_notes=$request->user_notes;            
           }


           $new->save();
           alert()->success("Data Saved SuccessFully");
           return redirect()->back();
    }

}
