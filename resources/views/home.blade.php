@extends('layouts.app')

@section('content')
    @php
    $message = 'message123'
    @endphp
    <x-home-title for="Home" :value="__('Home')" :test="$message">  123</x-home-title>
    <x-label for="Home" :value="__('Label')">  123</x-label>

@endsection

@section('inline_js')
    @parent
@endsection
