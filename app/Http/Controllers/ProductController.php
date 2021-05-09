<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // クエリを組み立てる
        $query = Product::with('category');
        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }
        if ($request->price_min) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->price_max) {
            $query->where('price', '<=', $request->price_max);
        }
        if ($request->keyword) {
            $query->where('name', 'LIKE', '%' . $request->keyword. '%');
        }
        // 商品検索結果を取得
        $products = $query->orderBy('created_at')->paginate(10);
        // カテゴリ一覧を取得
        $categories = Category::withCount('products')->get();

        return view('top', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
