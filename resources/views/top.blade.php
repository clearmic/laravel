<!DOCTYPE html>
<html lang="ja" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>商品検索</title>
        <link rel="stylesheet" href="/css/main.css">
    <body>
        <form action="{{ route('top') }}" method="get">
            @include('search')
            <button type="submit">検索</button>
        </form>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品名</th>
                    <th>カテゴリ</th>
                    <th>価格</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }} 円</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->appends(Request::all())->links() }}
    </body>
</html>
