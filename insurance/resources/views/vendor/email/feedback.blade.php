<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h2>Новый отклик для компании {{ $product->insuranceCompany->name }}</h2>
</div>
<div>
    <h3>Отклик на продукт: {{ $product->name }}</h3>
    <ul>
        <li>Процент страхования: {{ $product->percent }}%</li>
        <li>Срок страхования: {{ $product->period }} мес</li>
        <li>Категория: {{ $product->category->name }}</li>
    </ul>
</div>
<div>
    <h3>Заявка от пользователя: {{ $feedback->name }}</h3>
    <ul>
        <li>Email: {{ $feedback->email }}</li>
        @if ($feedback->comment != '')
            <li>Комментарий: {{ $feedback->comment }}</li>
        @endif
    </ul>
</div>
</body>
</html>
