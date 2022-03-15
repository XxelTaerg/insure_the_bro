@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container col-md-9 text-right mb-2">
            <a href="{{ route('account.insert-product') }}" class="btn btn-outline-success btn-md m-1">
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
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->percent }}</td>
                        <td>{{ $product->period}}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>
                            <a href="#"
                               class="btn btn-secondary">Редактировать</a>

                            <form action="#" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="text-center">Пусто</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
