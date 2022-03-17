@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="container col-md-9">
            <a href="{{ route('index') }}" class="btn btn-primary btn-sm m-1">
                <span class="mr-2 ti-arrow-left align-left"></span> На главную
            </a>
        </div>
    </div>

    <section id="contact-section" class="contact-section section-bg-white">
        <div class="section-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title-wrapper mb-5 text-center">
                            <h2 class="section-title text-uppercase">Оформление заявки</h2>
                            <span class="section-title-seperator"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">

                    <div class="mb-5">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Название</th>
                                <th scope="col">Процент страхования</th>
                                <th scope="col">Срок страхования</th>
                                <th scope="col">Компания</th>
                                <th scope="col">Категория</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->percent }}</td>
                                <td>{{ $product->period}}</td>
                                <td>{{ $product->insuranceCompany->name}}</td>
                                <td>{{ $product->category->name}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    @if(isset($isSend))
                        <div class="container">
                            <div class="row justify-content-center mb-2">
                                @if($isSend)
                                    <div class="text-success">Успешно отправлено!</div>
                                @else
                                    <div class="text-danger">Не отправлено!</div>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-6 col-md-6">
                        <div class="contact-form-wrapper">

                            <form id="ajax-contact"
                                  action="{{ route('feedback.send', ['product_id' => $product->id]) }}" method="post"
                                  novalidate="true">
                                @csrf

                                <div class="contact-form">
                                    <label for="name">Ваше имя*</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Имя"
                                           required="required" value="{{ old('name') }}">
                                    <div class="help-block with-errors text-danger">
                                        @if($errors->has('name'))
                                            {{ $errors->first('name') }}
                                        @endif
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <label for="email">Email*</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="Email" required="required" value="{{ old('email') }}">
                                    <div class="help-block with-errors text-danger">
                                        @if($errors->has('email'))
                                            {{ $errors->first('email') }}
                                        @endif
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <label for="comment">Сообщение</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="4"
                                              placeholder="Сообщение">{{ old('comment') }}</textarea>
                                    <div class="help-block with-errors text-danger">
                                        @if($errors->has('comment'))
                                            {{ $errors->first('comment') }}
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-3">Оставить заявку</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

