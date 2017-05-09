@extends('layouts.default')

@section('title', 'Dob Form')

@section('content')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'
          rel='stylesheet' type='text/css'>


    <div class="container">
        <div id="app">

                <button type="submit" @click="updateCount">
                    Incremenet Counter: @{{ count }}
                </button>
            <pre> @{{ $data | json }} </pre>
        </div>
    </div>
@stop