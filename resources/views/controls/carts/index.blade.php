@extends('controls.layouts.app')

@section('content')

    <div class="container mx-xl px-2 py-6">
        <h1>index Carts</h1>
        <a href="{{route('controls.carts.index')}}">
            <div class="flex items-center my-4">
                <x-button type="button" class="ml-3">
                    Create
                </x-button>
            </div>
        </a>
    </div>
@endsection

@section('inline_js')
    @parent
@endsection
