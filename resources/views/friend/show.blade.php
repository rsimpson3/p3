<!-- connect child to master -->
@extends('layouts.master')

@section('title')
    Give Me Friends
@stop

@section('content')

@if(isset($friend_Array))
    @if(count ($friend_Num) > 0)
        <h1>Here are some friends</h1>
        <table class="friendtable">
            <tr>
                <th>Names</th>
            </tr>
            @foreach ($friend_Array as $friend )
                <tr> <td> {{ $friend['name'] }} </td>
                @if ($country != 0)
                    <td> {{ $friend['country'] }} </td>
                @endif
                @if ($email != 0 )
                    <td> {{ $friend['email'] }} </td>
                @endif
            @endforeach
            </tr>
        </table>

    @else
        <p>How many friends would you like? Enter a number.  </p>
    @endif
@endif
@stop
