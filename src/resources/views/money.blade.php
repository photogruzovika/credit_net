

@extends('layouts.app')

@section('content')
    <section class="money">
        <div class="wrapper">
            <h1 class="money__headline">Деньги в вашем городе!!</h1>
        </div>

    </section>
    <div id="app">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection
