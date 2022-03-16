@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container col-md-9">
            <a href="{{ route('account.index') }}" class="btn btn-outline-primary btn-sm m-1">
                <span class="mr-2 ti-arrow-left align-left"></span> Все продукты
            </a>
        </div>
    </div>

    <section id="contact-section" class="contact-section section-bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form-wrapper">
                        <form action="{{ !isset($product) ? route('account.product-add') : route('account.product-update', ['product_id' => $product->id]) }}" method="post"
                              novalidate="true">
                            @isset($product)
                                @method('PUT')
                            @endisset
                            <div class="contact-form">
                                <label for="name">Название продукта*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Название" value="{{ $product->name ?? '' }}"
                                       required="required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="contact-form">
                                <label for="percent">Процентная ставка*</label>
                                <input type="number" class="form-control" id="email" name="percent"
                                       placeholder="Процент" required="required"
                                       value="{{ $product->percent ?? null }}">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="contact-form">
                                <label for="period">Срок* (в месяцах)</label>
                                <input type="number" class="form-control" id="period" name="period"
                                       placeholder="Срок" required="required" value="{{ $product->period ?? null }}">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="category">Выберите категорию</label>
                                <select class="form-control" id="category">
                                    @foreach($productCategories as $productCategory)
                                        <option value="{{ $productCategory->id }}"
                                                @if($product->category_id === $productCategory->id) selected="selected" @endif>
                                            {{ $productCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Оставить заявку</button>
                            <div class="messages"></div>
                        </form>
                    </div><!-- .contact-form-wrapper -->
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection