@extends('layouts.app')

@section('title', 'لیست محصولات من')

@section('content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4">لیست محصولات من</h2>

      @if($products->isEmpty())
        <p>هنوز محصولی ثبت نکرده‌اید.</p>
      @else
        <ul class="divide-y divide-gray-200">
          @foreach($products as $product)
            <li class="py-4 flex items-center justify-between">
              <div>
                <h3 class="font-semibold">{{ $product->title }}</h3>
                <p class="text-sm text-gray-600">قیمت: {{ number_format($product->price) }} ریال | موجودی: {{ $product->stock }}</p>
              </div>
              <a href="#" class="text-blue-600 hover:text-blue-800">جزئیات</a>
            </li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
</div>
@endsection
