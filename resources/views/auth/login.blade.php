@extends('layouts.app')

@section('title', 'Iniciar Sesión - SMS-EDUCOL')

@section('content')
<div class="w-full max-w-md">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-800">SMS-EDUCOL</h1>
            <p class="text-gray-600 mt-2">Sistema de Gestión Escolar</p>
        </div>

        @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('error'))
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Correo Electrónico
                </label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                    placeholder="correo@institucion.edu"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Contraseña
                </label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('password') border-red-500 @enderror"
                    placeholder="••••••••"
                >
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                    <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                </label>
                {{-- <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:text-blue-800">
                    ¿Olvidó su contraseña?
                </a> --}}
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium transition"
            >
                Iniciar Sesión
            </button>
        </form>
    </div>
</div>
@endsection
