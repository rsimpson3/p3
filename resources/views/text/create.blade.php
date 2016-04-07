<!-- connect child to master -->
@extends('layouts.master')

@section('title')
    Generate Lorem Ipsum text
@stop

<!-- insert different css pages -->
@section ('head')

@stop

@section('content')
    <h1>Lorem Ipsum Text</h1>

    <form method='POST' action='/text/create'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>* Enter number of paragraphs: (limit 99)</label>
           <input
               type='text'
               id='paragraph_number'
               name='paragraph_number'
               value='{{ old('paragraph_number') }}'
           >
           <div class='error'>{{ $errors->first('paragraph_number') }} </div>
        </div>

        <button type="submit" class="btn btn-primary">Generate Lorem Ipsum</button>

        {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>
    </form>
@stop
