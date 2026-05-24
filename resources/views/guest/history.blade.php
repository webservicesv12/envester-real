@extends('layouts.guest.app')

@push('content')


 <div class="pt-45 pb-16">
        <div class="tf-container">
            <h4 class="mt-4">Select {{ $page_title }}</h4>
            <ul class="mt-20">
                <li class="tf-list-item-v2 mt-20 bg-menuDark" style="cursor: pointer;" onclick="window.location='{{route('investment.index')}}';">
                    <a href="{{route('investment.index')}}" class="text-button text-white" >Investment History</a>

                </li>
                <li  class="tf-list-item-v2 mt-20 bg-menuDark" style="cursor: pointer;" onclick="window.location='{{route('deposits.index')}}';">
                    <a href="{{route('deposits.index')}}" class="text-button text-white" >Deposit Transactions</a>
                </li>
                <li  class="tf-list-item-v2 mt-20 bg-menuDark" style="cursor: pointer;" onclick="window.location='{{url('user/withdraw-history')}}';">
                    <a href="{{url('user/withdraw-history')}}" class="text-button text-white" >Withdrawal Transactions</a>
                </li>
                
            </ul>
        </div>
    </div>



@endpush
