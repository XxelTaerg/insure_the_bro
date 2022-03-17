@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя отправителя</th>
                    <th scope="col">Email</th>
                    <th scope="col">Продукт</th>
                    <th scope="col">Комментарий</th>
                    <th scope="col">Доставлено на почту?</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($feedbacks as $key=>$feedback)
                    <tr>
                        <th scope="row">{{  ($feedbacks->currentpage()-1) * $feedbacks->perpage() + $key + 1 }}</th>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>
                            <a href="{{ route('account.product-update-form', ['product_id' => $feedback->product->id]) }}">
                                {{ $feedback->product->name }}
                            </a>
                        </td>
                        <td>{{ $feedback->comment }}</td>
                        <td>
                            @if($feedback->is_sent)
                                <span>Да</span>
                            @else
                                <span class="text-danger">Нет</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Нет откликов</td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            {{ $feedbacks->links('vendor.pagination.custom') }}

        </div>
    </div>

@endsection
