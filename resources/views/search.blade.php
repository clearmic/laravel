<dl>
    <dt>カテゴリ</dt>
    <dd>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}"{{ request('category_id')==$category->id?'selected':''}}>
                {{ $category->name }}（{{ $category->products_count }}）
            </option>
            @endforeach
        </select>
    </dd>
    <dt>価格</dt>
    <dd>
        <input type="number" name="price_min" value="{{ request('price_min') }}" placeholder="円">
        〜
        <input type="number" name="price_max" value="{{ request('price_max') }}" placeholder="円">
    </dd>
    <dt>キーワード</dt>
    <dd>
        <input type="text" name="keyword" value="{{ request('keyword') }}" placeholder="キーワード">
    </dd>
</dl>
