<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class documentsController extends Controller
{
    public function show($id)
    {
        return response()->json(Document::find($id), 200);
    }
    public function update(Request $request, Document $document)
    {
        $document->update($request->all());
        return response()->json($document, 200);
    }
    public function store(Request $request)
    {
        $document = Document::create($request->all());
        return response()->json($document, 201);
    }

}
