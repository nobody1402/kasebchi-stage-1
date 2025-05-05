@extends('layouts.app')

@section('title', 'ویرایش پروفایل')

@section('content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4">ویرایش پروفایل</h2>

      <form action="{{ route('profile.update') }}" method="POST">
        @csrf
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-700">نام</label>
          <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">ایمیل</label>
          <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="phone" class="block text-sm font-medium text-gray-700">تلفن</label>
          <input type="text" name="phone" id="phone" value="{{ old('phone', auth()->user()->phone) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
          <label for="address" class="block text-sm font-medium text-gray-700">آدرس</label>
          <textarea name="address" id="address" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('address', auth()->user()->address) }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">
          ذخیره تغییرات
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
