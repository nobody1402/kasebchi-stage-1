@extends('layouts.app')

@section('title', 'ثبت محصول جدید')

@section('content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4">ثبت محصول جدید</h2>

      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="title" class="block text-sm font-medium text-gray-700">عنوان محصول</label>
          <input type="text" name="title" id="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-700">توضیحات</label>
          <textarea name="description" id="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
        </div>

        <div class="mb-4">
          <label for="price" class="block text-sm font-medium text-gray-700">قیمت (ریال)</label>
          <input type="number" name="price" id="price" step="any" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="stock" class="block text-sm font-medium text-gray-700">موجودی</label>
          <input type="number" name="stock" id="stock" required min="0" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="image" class="block text-sm font-medium text-gray-700">تصویر محصول</label>
          <input type="file" name="image" id="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">
          ثبت محصول
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
