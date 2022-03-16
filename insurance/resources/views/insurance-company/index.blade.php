@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container text-right mb-2">
            <a href="{{ route('account.product-save-form') }}" class="btn btn-success btn-md m-1">
                Добавить продукт
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Процент страхования</th>
                    <th scope="col">Срок страхования</th>
                    <th scope="col">Категория</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($products as $key=>$product)
                    <tr>
                        <th scope="row">{{  ($products->currentpage()-1) * $products->perpage() + $key + 1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->percent }}</td>
                        <td>{{ $product->period}}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('account.product-update-form', ['product_id' => $product->id]) }}"
                                   class="btn btn-secondary mr-1">Редактировать</a>

                                <form
                                    action="{{ route('account.product-delete', ['product_id' => $product->id]) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit">Удалить</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Пусто</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{ $products->links('vendor.pagination.custom') }}

        </div>
    </div>

@endsection
