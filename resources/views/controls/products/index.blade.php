@extends('controls.layouts.app')

@section('content')
    <div class="container mx-auto max-w-screen-
    xl px-2 py-6">
        <div class="lg:flex lg:items-center lg:justify-between py-6">
            <div class="flex-1 min-w-0">
                <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    Products
                </h1>
            </div>
            <div class="mt-5 flex lg:mt-0 lg:ml-4">
                <a href="{{ route('controls.products.create') }}">
                    <x-button type='button'>
                        Create
                    </x-button>
                </a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    image
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    brand
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    subcategory
                                </th>
{{--                                <th scope="col"--}}
{{--                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                    enabled--}}
{{--                                </th>--}}
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    published status
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    product options
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edit / Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($products as $product)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img style='max-width: 120px;'
                                             src='{{ $product->image?asset($product->image):'' }}'/>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ @$product->brand->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ @$product->subcategory->name }}</td>
{{--                                    <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                        <span--}}
{{--                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $product->enabled? 'bg-green-100':'bg-red-300' }}  text-green-800">--}}
{{--                                            {{ $product->enabled? 'Active':'Unactive' }}--}}
{{--                                        </span>--}}
{{--                                    </td>--}}
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $product->publish_status_name() }}</td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            @foreach ($product->product_options as $product_option)
                                                <div class="py-1">
                                                    <x-button type='button' class="{{ ($product_option->enabled ? 'bg-blue-500 hover:bg-blue-700' : 'bg-blue-100 hover:bg-blue-200') }}">
                                                        {{ $product_option->name }}
                                                    </x-button>
                                                </div>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex ">
                                            <p class="p-2.5 text-indigo-600 hover:text-indigo-900">
                                                <a href="{{route('controls.products.edit', $product)}}">
                                                    <button type="button">
                                                        Edit
                                                    </button>
                                                </a>
                                            </p>

                                            <form method="POST"
                                                  action="{{ route('controls.products.destroy', $product) }}"
                                                  class="p-2.5 text-indigo-600 hover:text-indigo-900">
                                                @csrf
                                                @method('DELETE')
                                                <button type='submit'>Delete</button>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
@endsection

@section('inline_js')
    @parent
@endsection
