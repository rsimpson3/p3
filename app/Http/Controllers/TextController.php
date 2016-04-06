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
            'paranum' => 'required|numeric|max:99',
        ]);

        // get number from request object
        $data = $request->input('paranum');
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
