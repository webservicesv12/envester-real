@extends('layouts.guest.app')

@push('content')
    <div class="pt-20 pb-80">
        <div class="tf-container">

            <h5 class="bottom pb-3">{{ __('Referral Link') }}</h5>

            <div class="mt-12  mb-3">
                <x-text-input id="copy" class="block mt-1 w-full"
                              type="text"
                              name="copy"
                              required autocomplete="current-password"  placeholder="Referral Link" value="{{ url('/referral/'.auth()->user()->referral_code) }}"/>
            </div>
        </div>
    </div>

@endpush
