@extends('layouts.guest.app')

@push('content')

    <div class="tf-container mt-3 mb-3">

        <h5 class="bottom pb-3">{{ $page_title }}</h5>

      

            <form action="{{route('profile.update',auth()->id())}}" method="post">
                @csrf
                @method('PATCH')
                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Old Password:</span>
                </div>
                <div class="mt-12 box-input-field mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password"  placeholder="Password"/>
                </div>
                <x-input-error :messages="$errors->get('old_password')" class="mt-2" />

                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Old Password:</span>
                </div>
                <div class="mt-12 box-input-field mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="new_password"
                                  required autocomplete="current-password"  placeholder="New Password"/>
                </div>
                <x-input-error :messages="$errors->get('old_password')" class="mt-2" />

                <div class="d-flex mt-3 justify-content-between align-items-center">
                    <span>Confirm New Password:</span>
                </div>
                <div class="mt-12  mb-3">
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="confirm_new_password"
                                  required autocomplete="current-password"  placeholder="Confirm New Password"/>
                </div>
                <x-input-error :messages="$errors->get('confirm_new_password')" class="mt-2" />

                <div class="mt-5">
                    <div class="inner-bar">
                        <button type="submit" class="tf-btn lg primary">Update</button>
                    </div>
                </div>
            </form>

    </div>
@endpush
