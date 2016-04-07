<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LoremIpsum;

class TextController extends Controller {

    /**
     * Responds to requests to GET /text/create
     */
    public function getCreate() {
        return view('text.create');
    }

    /**
     * EDIT Responds to requests to POST /text/create
     */
    public function postCreate (Request $request) {
        // dd($request);
        // validate numeric input
        $this->validate($request,[
            'paragraph_number' => 'required|numeric|min:1|max:99',
        ]);

        // get number from request object
        $data = $request->input('paragraph_number');
        // check that integer pulled from request object
        // pass to LoremIpsum package
        $generator = new LoremIpsum();
        $paragraphs = $generator->getParagraphs($data);

        // send LoremIpsum output to show view
        return view('text.show')->with([
            'data' => $data,
            'paragraphs' => $paragraphs,
        ]);
    }
} #end of class
