@extends('layouts.guest.app')

@push('content')

    <div class="tf-container mt-3 mb-3">

        <h5 class="bottom pb-3">{{ $page_title }}</h5>

        <form action="{{route('profile.store')}}" method="post">
            @csrf
            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Full Name:</span>
            </div>
            <div class="mt-12 box-input-field mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="text"
                              name="name"
                              required autocomplete="current-password" value="{{ auth()->user()->name }}"  placeholder="Full Name"/>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Phone Number:</span>
            </div>
            <div class="mt-12 box-input-field mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="text"
                              name="phone"
                              required autocomplete="current-password" value="{{ auth()->user()->phone }}"  placeholder="Phone Number"/>
            </div>
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            <div class="d-flex mt-3 justify-content-between align-items-center">
                <span>Email Address :</span>
            </div>
            <div class="mt-12  mb-3">
                <x-text-input id="password" class="block mt-1 w-full"
                              type="email"
                              name="confirm_password"
                              required autocomplete="current-password" value="{{ auth()->user()->email }}" readonly placeholder="Email Address"/>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <span class="text-danger">Email cannot be changed</span>

            <div class="mt-3 mb-3">
                <div class="inner-bar">
                    <button type="submit" class="tf-btn lg primary">Update</button>
                </div>
            </div>
        </form>

    </div>

@endpush
