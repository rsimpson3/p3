<!-- connect child to master -->
@extends('layouts.master')

@section('title')
    Give Me Friends
@stop

@section('content')

    @if(count ($friend_num) > 0)
        <h1>Here are some friends</h1>
        <?php
        for ($i=0; $i < $friend_num; $i++) {
          echo $faker->name, "\n";
          if ($country == 1) {
              echo $faker->country, "\n";
          }
          if ($email == 1) {
             echo $faker->safeEmail ;
          }
          echo "<br>";
        }
        ?>
    @else
        <p>How many friends would you like? Enter a number.  </p>
    @endif
@stop
