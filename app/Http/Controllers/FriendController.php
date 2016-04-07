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
        // get user input for # of friends
        $friend_Num = $request->input('friends');
        // get user input for country checkbox
        $country = $request->input('country');
        // get user input for email checkbox
        $email = $request->input('email');

        // call faker method
        $faker = Faker::create();

        // create array and add values
        $p = 0;
        $friend_Array = [];
        while($p < $friend_Num) {
          $friend_Array[$p]['name'] = $faker->name;
              if ($country == 1) {
                  $friend_Array[$p]['country'] = $faker->country;
              }
              else {
                  $country == 0;
              }
              if ($email == 1) {
                  $friend_Array[$p]['email'] = $faker->email;
              }
              else {
                  $email == 0;
              }
          $p++;
        }
        // dd($friend_Array);

        // send user inputs & friend array to show view
        return view('friend.show')->with([
            'friend_Num' => $friend_Num,
            'friend_Array'=> $friend_Array,
            'country' => $country,
            'email' => $email,
        ]);


    }
} #end of class
