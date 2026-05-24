@extends('layouts.guest.app')

@push('content')


 <div class="pt-45 pb-16">
        <div class="tf-container">
            <h4 class="mt-4">Withdrawal Type</h4>
            <ul class="mt-20">
                <li class="tf-list-item-v2 mt-20 bg-menuDark" style="cursor: pointer;" onclick="window.location='{{url('user/withdraw')}}';">
                    <a href="{{url('user/withdraw')}}" class="text-button text-white" >Crypto Withdrawal</a>

                </li>
                <li  class="tf-list-item-v2 mt-20 bg-menuDark" style="cursor: pointer;" onclick="window.location='{{url('user/bank')}}';">
                    <a href="{{url('user/bank')}}" class="text-button text-white" >Bank Transfer</a>
                </li>
               
            </ul>
        </div>
    </div>



@endpush
