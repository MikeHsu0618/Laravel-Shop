@extends('layouts.app')

@section('content')
    <div class='px-2 pb-6 grid grid-cols-8 gap-6'>
        <div class="col-span-8 sm:col-span-8 lg:col-span-8">
            <h1 class='px-2 py-4'>Products</h1>
        </div>
        <div class="col-span-8 sm:col-span-8 lg:col-span-2">
            @include('products/components/sidebar')
        </div>
        <div class="col-span-8 sm:col-span-8 lg:col-span-6">

        </div>
    </div>
@endsection

@section('inline_js')
    @parent
@endsection
