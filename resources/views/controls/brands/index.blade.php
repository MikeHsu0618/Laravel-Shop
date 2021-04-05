@extends('controls.layouts.app')

@section('content')

    <div class="container mx-auto max-w-screen-xl px-2 py-6">
        <div class="lg:flex lg:items-center lg:justify-between py-6">
            <div class="flex-1 min-w-0">
                <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                    index brands
                </h1>
            </div>
                <div class="mt-5 flex lg:mt-0 lg:ml-4">
                    <a href="{{route('controls.brands.create')}}">
                        <x-button type="button" class="ml-3">
                            Create
                        </x-button>
                    </a>
                </div>
        </div>
        <div class="flex flex-col mt-1">
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
                                    Search Key
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Order index
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Show in list
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Edit / Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach( $brands as $brand)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $brand->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $brand->search_key }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $brand->order_index }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $brand->show_in_list? 'bg-green-100':'bg-red-300' }}  text-green-800">
                                            {{ $brand->show_in_list? 'Active':'Unactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="flex ">
                                            <p class="p-2.5 text-indigo-600 hover:text-indigo-900">
                                                <a href="{{route('controls.brands.edit', $brand)}}">
                                                    <button type="button">
                                                        Edit
                                                    </button>
                                                </a>
                                            </p>

                                            <form method="POST"
                                                  action="{{ route('controls.brands.destroy', $brand) }}"
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
    </div>
@endsection

@section('inline_js')
    @parent
@endsection
