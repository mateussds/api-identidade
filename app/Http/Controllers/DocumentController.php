<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function create(Request $request){
        $document = new Document;
        $document->people_id = $request->people_id;
        $document->rg_number = $request->rg_number;
        $document->dispatch_date = $request->dispatch_date;
        $document->dispatch_organ = $request->dispatch_organ;
        $document->digital = $request->digital;
        $document->photo = $request->photo;
        $document->signature = $request->signature;
        $document->save();
    }
}
