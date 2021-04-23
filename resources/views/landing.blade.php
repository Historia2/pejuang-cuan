@extends('navbar')
@section('content')
@parent
<div class="row">
    <div class="col-lg-12 text-center">
        <h1 class="mt-5">A Bootstrap 4 Starter Template</h1>
        @if ($datum['nama'] === 'tandang')
        <p class="lead">Hello, {{$datum['nama']}} </p>
        @else
        <p class="lead">Hei hei, {{$datum['nama']}} </p>
        @endif
        <ul class="list-unstyled">
            <li>Bootstrap 4.5.3</li>
            <li>jQuery 3.5.1</li>
            {!! $datum['list'] !!}
        </ul>
    </div>
</div>
@endsection