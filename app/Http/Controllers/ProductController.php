<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        // فقط عمده‌فروش‌ها می‌تونن استفاده کنن
        if (auth()->user()->role !== 'wholesaler') {
            abort(403, 'دسترسی غیرمجاز.');
        }

        return view('products.create');
    }

    public function store(Request $request)
    {
        // فقط عمده‌فروش‌ها می‌تونن استفاده کنن
        if (auth()->user()->role !== 'wholesaler') {
            abort(403, 'دسترسی غیرمجاز.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $productData = $request->only(['title', 'description', 'price', 'stock']);

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/products'), $imageName);
            $productData['image'] = 'images/products/'.$imageName;
        }

        $productData['user_id'] = auth()->id();

        Product::create($productData);

        return redirect()->route('profile.show')->with('success', 'محصول با موفقیت ثبت شد.');
    }

    public function index()
    {
        $products = Product::where('user_id', auth()->id())->get();
        return view('products.index', compact('products'));
    }
}
