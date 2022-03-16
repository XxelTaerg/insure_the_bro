@extends('layouts.app')

@section('content')
    <section class="vector-featurebox-section">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Процент страхования</th>
                            <th scope="col">Срок страхования</th>
                            <th scope="col">Компания</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $key=>$product)
                            <tr>
                                <th scope="row">{{ ($products->currentpage()-1) * $products->perpage() + $key + 1 }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->percent }}</td>
                                <td>{{ $product->period}}</td>
                                <td>{{ $product->insuranceCompany->name}}</td>
                                <td>{{ $product->category->name}}</td>
                                <td><a href="{{ route('feedback.show', ['product_id'=>$product->id]) }}"
                                       class="btn btn-success">Оформить</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center"></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $products->appends(request()->query())->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </section>

@endsection
