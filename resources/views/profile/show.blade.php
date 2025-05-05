@extends('layouts.app')

@section('title', 'پروفایل من')

@section('content')
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
      <h2 class="text-2xl font-bold mb-4">پروفایل من</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <p><strong>نام:</strong> {{ auth()->user()->name }}</p>
          <p><strong>ایمیل:</strong> {{ auth()->user()->email }}</p>
          <p><strong>نقش:</strong> 
            @if(auth()->user()->role === 'wholesaler')
              عمده‌فروش
            @else
              خرده‌فروش
            @endif
          </p>
          <p><strong>تلفن:</strong> {{ auth()->user()->phone ?? 'ثبت نشده' }}</p>
          <p><strong>آدرس:</strong> {{ auth()->user()->address ?? 'ثبت نشده' }}</p>
          <p><strong>وضعیت تایید:</strong>
            @if(auth()->user()->is_verified)
              <span class="text-green-600">تایید شده ✅</span>
            @else
              <span class="text-yellow-600">تایید نشده ⚠️</span>
            @endif
          </p>
        </div>

        <div class="flex justify-end items-end">
          <a href="{{ route('profile.edit') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
            ویرایش پروفایل
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
