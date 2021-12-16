<?php

namespace App\Http\Controllers;

use App\Models\AreaRange;
use Illuminate\Http\Request;

class AreaRangeController extends Controller
{

    public function range_save(Request $r){

            $range = array();
            $range[0] = $r->lower;
            $range[1] = $r->upper;

            $codes = serialize($range);
            $newr = new AreaRange;
            $newr->area_id = $r->selected_id;
            $newr->code_range = $codes;
            $newr->save();

            alert()->success('Saved...!!!');
            return redirect()->back();
    }

}
