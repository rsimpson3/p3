<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class FriendController extends Controller {

    /**
     * Responds to requests to GET /friend/create
     */
    public function getCreate() {
        return view('friend.create');
    }

    /**
     * EDIT Responds to requests to POST /text/create
     */
    public function postCreate (Request $request) {
        // dd($request);
        // validate numeric input
        $this->validate($request,[
            'friends' => 'required|numeric|max:10',
        ]);

        // extract values from $request object
        $friend_num = $request->input('friends');
        $country = $request->input('country');
        $email = $request->input('email');

        // call faker method
        $faker = Faker::create();

        // send user inputs & faker object to show view
        return view('friend.show')->with([
            'friend_num' => $friend_num,
            'country' => $country,
            'email' => $email,
            'faker'=> $faker,
        ]);
    }
} #end of class
