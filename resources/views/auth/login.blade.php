@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    @if (session('error'))
    <div class="bg-red-100 text-red-700 p-4 mb-4 rounded">
        {{ session('error') }}
    </div>
    @endif
    <p class="text-center">Please login via <a href="http://ecommerce.app.test" class="text-blue-600 hover:underline">Ecommerce App</a>.</p>
</div>
@endsection