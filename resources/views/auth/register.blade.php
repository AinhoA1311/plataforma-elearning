@extends('layouts.app')

@section('title', 'Registro')

@section('content')
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-semibold mb-4">Registro de usuario</h2>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      {{-- Nombre --}}
      <div class="mb-4">
        <label for="name" class="block text-gray-700">Nombre</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}"
               required autofocus
               class="w-full p-3 border border-gray-300 rounded-md @error('name') border-red-500 @enderror">
        @error('name')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Email --}}
      <div class="mb-4">
        <label for="email" class="block text-gray-700">Correo electrónico</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}"
               required
               class="w-full p-3 border border-gray-300 rounded-md @error('email') border-red-500 @enderror">
        @error('email')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Contraseña --}}
      <div class="mb-4">
        <label for="password" class="block text-gray-700">Contraseña</label>
        <input id="password" type="password" name="password"
               required
               class="w-full p-3 border border-gray-300 rounded-md @error('password') border-red-500 @enderror">
        @error('password')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Confirmar contraseña --}}
      <div class="mb-4">
        <label for="password_confirmation" class="block text-gray-700">Confirmar Contraseña</label>
        <input id="password_confirmation" type="password" name="password_confirmation"
               required
               class="w-full p-3 border border-gray-300 rounded-md">
      </div>

      {{-- Rol --}}
      <div class="mb-4">
        <label for="role" class="block text-gray-700">Rol</label>
        <select name="role" id="role" required
                class="w-full p-3 border border-gray-300 rounded-md @error('role') border-red-500 @enderror">
          <option value="alumno" {{ old('role')=='alumno' ? 'selected':'' }}>Alumno</option>
          <option value="admin"  {{ old('role')=='admin'  ? 'selected':'' }}>Admin</option>
        </select>
        @error('role')
          <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
      </div>

      {{-- Botón --}}
      <div class="mt-6">
        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white p-3 rounded-md">
          Registrarse
        </button>
      </div>
    </form>
  </div>
@endsection


