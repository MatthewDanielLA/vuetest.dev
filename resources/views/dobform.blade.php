@extends('layouts.default')

@section('title', 'Dob Form')

@section('content')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700'
          rel='stylesheet' type='text/css'>



        <div id="app">
            <counter subject="test1"> </counter>

            <counter subject="test2"></counter>
  </div>


        <template id="counter-template">
            <div>
        <h1>@{{ subject }}</h1>
        <button @click="count += 1">@{{ count }}</button>
            </div>
    </template>










@stop