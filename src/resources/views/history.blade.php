

@extends('layouts.app')

@section('content')
    <section class="history">
        <div class="wrapper">
            <h1 class="history__headline">Плохая кредитная история!</h1>

        </div>

    </section>
    <div id="app">
        <reviews rews="{{$reviews}}"></reviews>
    </div>
@endsection
