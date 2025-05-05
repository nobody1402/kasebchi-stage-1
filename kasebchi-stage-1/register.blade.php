@extends('layouts.app')

@section('title', 'ثبت نام در KasebChi')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">ثبت نام در KasebChi</h2>
    </div>
    <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
      @csrf
      <input type="hidden" name="remember" value="true">
      <div class="rounded-md shadow-sm -space-y-px">
        <div>
          <label for="name" class="sr-only">نام</label>
          <input id="name" name="name" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="نام">
        </div>
        <div>
          <label for="email" class="sr-only">آدرس ایمیل</label>
          <input id="email" name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="ایمیل">
        </div>
        <div>
          <label for="password" class="sr-only">رمز عبور</label>
          <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="رمز عبور">
        </div>
        <div>
          <label for="password_confirmation" class="sr-only">تکرار رمز عبور</label>
          <input id="password_confirmation" name="password_confirmation" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="تکرار رمز عبور">
        </div>
        <div>
          <label for="role" class="block text-sm font-medium text-gray-700 mt-4">نوع کسب و کار</label>
          <select id="role" name="role" required class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
            <option value="">انتخاب کنید...</option>
            <option value="wholesaler">عمده‌فروش</option>
            <option value="retailer">خرده‌فروش</option>
          </select>
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700 mt-4">شماره تماس</label>
          <input id="phone" name="phone" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="09123456789">
        </div>
        <div>
          <label for="address" class="block text-sm font-medium text-gray-700 mt-4">آدرس</label>
          <textarea id="address" name="address" required rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
      </div>

      <div class="flex items-center justify-between">
        <div class="text-sm">
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">قوانین و مقررات</a>
        </div>
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
          ثبت نام
        </button>
      </div>
    </form>
    <p class="mt-2 text-center text-sm text-gray-600">
      حساب دارید؟ <a href="{{ route('login.form') }}" class="font-medium text-indigo-600 hover:text-indigo-500">وارد شوید</a>
    </p>
  </div>
</div>
@endsection