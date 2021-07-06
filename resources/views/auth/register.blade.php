@extends('layouts.app')

@section('content');
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg" >
            <form action="{{ route('register') }}" method="post">
               @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('name') border-red-500
                    @enderror value="{{ old('name') }}">
                    @error('name') 
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                
                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('name') border-red-500
                    @enderror value="{{ old('username')}}">
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('email') border-red-500
                    @enderror value="{{ old('email')}}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose A Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('password') border-red-500
                    @enderror value="{{ old('password')}}">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>  
                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg" @error('confirm_password') border-red-500
                    @enderror value="">
                    @error('confirm_password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message}}
                    </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 routnded
                    font-medium w-full">Rigester</button>
                </div>                
            </form>
        </div>
    </div>
@endsection