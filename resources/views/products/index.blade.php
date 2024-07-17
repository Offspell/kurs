@extends('layouts.app')
@section('content')
    <div class="container mx-auto ">
        <div class="row">
            <div class="col-6">
                <h1 style="font-size:30px;">Lista produktów</h1>
            </div>
            <div class="col-6">
                <a class="float-right" href="{{ route('products.create') }}">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        Dodaj
                    </button>
                </a>
            </div>
        </div>
        <div class="row">


            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nazwa</th>
                        <th class="text-center">Opis</th>
                        <th class="text-center">Ilość</th>
                        <th class="text-center">Cena</th>
                        <th class="text-center">Kategoria</th>
                        <th class="text-center">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th class="text-center">{{ $product->id }}</th>
                            <td class="text-center">{{ $product->name }}</td>
                            <td class="text-center">{{ $product->description }}</td>
                            <td class="text-center">{{ $product->amount }}</td>
                            <td class="text-center">{{ $product->price }}</td>
                            <td class="text-center">
                                @if ($product->hasCategory())
                                    {{ $product->category->name }}
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('products.show', $product->id) }}">
                                    <button class="btn btn-danger btn-sm">
                                        P
                                    </button>
                                </a>
                                <a href="{{ route('products.edit', $product->id) }}">
                                    <button class="btn btn-primary btn-sm">
                                        E
                                    </button>
                                </a>
                                <button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                                    X
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
@section('javascript')
    $(function() {
    $('.delete').click(function() {
    axios.delete("http://kurs.local/products/" + $(this).data("id")).then(response => {
    });
    });
    });
@endsection
