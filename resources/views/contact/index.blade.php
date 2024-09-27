@extends('layouts.app')
@section('title','contact page')
@section('content')
<h1>contact section</h1>

{{ "this is a blade format" }}
@php
$foods = ['pizza','shawrma','chesse'];
$color = 'red';
@endphp
<ul>
    @foreach ($foods as $food)
    <li>
        {{ $food }}
    </li>
    @endforeach
</ul>
@if ($color == 'red')
<h1 style="color: red;">This is a red text</h1>
@elseif($color == 'green')
<h1 style="color: green;">This is a green text</h1>
@else
<h1>This is a default text</h1>
@endif

@endsection
@push('scripts')
<script>
    alert('this is contact page')

</script>
@endpush
