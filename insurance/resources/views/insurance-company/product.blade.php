@extends('layouts.app')

@section('content')
    <section id="contact-section" class="contact-section section-bg-white">
        <div class="container">
            <div class="row mb-2">
                <div class="container col-md-8">
                    <a href="{{ route('account.index') }}" class="btn btn-outline-primary btn-sm m-1">
                        <span class="mr-2 ti-arrow-left align-left"></span> Все продукты
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form-wrapper">
                        <form
                            action="{{ !isset($product) ? route('account.product-save') : route('account.product-update', ['product_id' => $product->id]) }}"
                            method="post"
                            novalidate="true">

                            @csrf

                            @isset($product)
                                @method('PUT')
                            @endisset

                            <div class="contact-form">
                                <label for="name">Название продукта*</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Название" value="{{ isset($product) ? $product->name : '' }}"
                                       required="required">
                                <div class="help-block with-errors text-danger">
                                    @if($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </div>
                            </div>
                            <div class="contact-form">
                                <label for="percent">Процентная ставка*</label>
                                <input type="number" class="form-control" id="email" name="percent"
                                       placeholder="Процент" required="required"
                                       value="{{ isset($product) ? $product->percent : null }}">
                                <div class="help-block with-errors text-danger">
                                    @if($errors->has('percent'))
                                        {{ $errors->first('percent') }}
                                    @endif
                                </div>
                            </div>
                            <div class="contact-form">
                                <label for="period">Срок* (в месяцах)</label>
                                <input type="number" class="form-control" id="period" name="period"
                                       placeholder="Срок" required="required"
                                       value="{{ isset($product) ? $product->period : null }}">
                                <div class="help-block with-errors text-danger">
                                    @if($errors->has('period'))
                                        {{ $errors->first('period') }}
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Выберите категорию</label>
                                <select class="form-control" id="category" name="category_id">
                                    @foreach($productCategories as $productCategory)
                                        <option value="{{ $productCategory->id }}"
                                                @if(isset($product) && $product->category_id == $productCategory->id) selected="selected" @endif>
                                            {{ $productCategory->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="help-block with-errors text-danger">
                                    @if($errors->has('category_id'))
                                        {{ $errors->first('category_id') }}
                                    @endif
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
