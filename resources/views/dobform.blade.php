@extends('layouts.default')

@section('title', 'Dob Form')

@section('content')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'
          rel='stylesheet' type='text/css'>


    <div class="container">
        <div id="app">

            <form action="done.html" @submit.prevent="handleIt">
             <button type="submit">Submit Me</button>
            </form>
            <pre> @{{ $data | json }} </pre>
        </div>
    </div>
@stop