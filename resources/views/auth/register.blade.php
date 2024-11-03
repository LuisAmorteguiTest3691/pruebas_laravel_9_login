@extends('layouts.app')

@section('titulo')
    Régistrate en LuisAmortegui
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:items-center">
        {{-- formulario --}}
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl border border-sky-500">
            <form action="{{ route('register') }}" method="POST">
                {{-- csrf metodo de seguridad para formularios con token --}}
                @csrf
                {{-- nombre --}}
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input 
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Tu nombre"
                        class="border border-sky-500 p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <p class="bg-red-300 my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- username --}}
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input 
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Tu Nombre de Usuario"
                        class="border border-sky-500 p-3 w-full rounded-lg @error('username')
                            border-red-500
                        @enderror"
                        value="{{ old('username') }}"
                    />
                </div>
                @error('username')
                    <p class="bg-red-300 my-2 rounded-lg text-sm p-2 text-center">
                        {{ $message }}
                    </p>
                @enderror
                {{-- email --}}
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input 
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Tu Email de Usuario"
                        class="border border-sky-500 p-3 w-full rounded-lg @error('email')
                            border-red-500
                        @enderror"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                        <p class="bg-red-300 my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- password --}}
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password
                    </label>
                    <input 
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Tu Password de Usuario"
                        class="border border-sky-500 p-3 w-full rounded-lg @error('password')
                            border-red-500
                        @enderror"
                    />
                    @error('password')
                        <p class="bg-red-300 my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- password confirmation --}}
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Password Confirmación
                    </label>
                    <input 
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        placeholder="Repite tu Password"
                        class="border border-sky-500 p-3 w-full rounded-lg @error('password_confirmation')
                            border-red-500
                        @enderror"
                    />
                    @error('password_confirmation')
                        <p class="bg-red-300 my-2 rounded-lg text-sm p-2 text-center">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- boton de envio --}}
                <input 
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection