<!-- connect child to master -->
@extends('layouts.master')

@section('title')
    Give Me Some Friends
@stop

<!-- insert different css pages -->
@section ('head')

@stop

@section('content')
    <h1>Give Me Some Friends</h1>

    <form method='POST' action='/friend/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Enter number of friends: (limit 10)</label>
           <input
               type='text'
               id='friends'
               name='friends'
               value='{{ old('friends') }}'
           >
           <label>Country</label>
           <input
                type='checkbox'
                id='country'
                name='country'
                value='1'
            >
            <label>email address</label>
            <input
                 type='checkbox'
                 id='email'
                 name='email'
                 value='1'
             >
           <div class='error'>{{ $errors->first('friends') }} </div>
        </div>

        <button type="submit" class="btn btn-primary">Give Me Some Friends</button>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>
    </form>
@stop
