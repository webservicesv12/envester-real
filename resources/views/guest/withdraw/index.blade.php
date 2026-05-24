@extends('layouts.guest.app')

@push('content')
    <form action="{{route('withdraw.store')}}" method="post">
        @csrf
        <div class="mt-5">

            <div class="tf-container">
                <div class=" accent-box-v2 bg-menuDark">

                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Cryptocurrency Type:</span>
                    </div>

                    <div class="mt-12 mb-3">
                        <select id="payment_method" name="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Select Crypto Type</option>
                            @foreach(\App\Models\PaymentMethod::get() as $value)
                                <option value="{{ $value->id }}" data-network="{{ $value->network }}" data-wallet="{{ $value->wallet_address }}">{{ ucwords($value->name) }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                    </div>
                    
                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Network Type:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <select required id="network" placeholder="Type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                       <option selected>Select networt</option>
                            @foreach(\App\Models\PaymentMethod::get() as $value)
                                <option value="{{ $value->network }}" data-network="{{ $value->network }}" data-wallet="{{ $value->wallet_address }}">{{ ucwords($value->network) }}</option>
                            @endforeach
                    </div>
                    <x-input-error :messages="$errors->get('wallet_address')" class="mt-2" /><br>

                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span><br>Your Wallet Address:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="wallet_address" id="wallet_address" placeholder="Wallet Address"  class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    <x-input-error :messages="$errors->get('wallet_address')" class="mt-2" />

                    <div class="d-flex justify-content-between align-items-center">
                        <span>Withdrawal Amount:</span>
                    </div>
                    <div class="mt-12 box-input-field">
                        <input type="text" value="50" required placeholder="Deposit Amount" name="amount" class="clear-ip value_input ip-style2">
                        <i class="icon-close"></i>
                    </div>

                    <x-input-error :messages="$errors->get('amount')" class="mt-2" />
                </div>

                <h5 class="mt-20">Withdrawal Money</h5>
                <ul class="grid-3 gap-12 mt-16">
                    <li><a href="javascript:void(0);" class="tag-money active text-small">$50</a></li>
                    <li><a href="javascript:void(0);" class="tag-money text-small">$100</a></li>
                    <li><a href="javascript:void(0);" class="tag-money text-small">$200</a></li>
                    <li><a href="javascript:void(0);" class="tag-money text-small">$500</a></li>
                    <li><a href="javascript:void(0);" class="tag-money text-small">$1000</a></li>
                    <li><a href="javascript:void(0);" class="tag-money text-small">$2000</a></li>
                </ul>

                <div class="mt-5">
                    <div class="inner-bar">
                        <button type="submit" class="tf-btn lg primary">Proceed</button>
                    </div>
                </div><br><br>
            </div>
        </div>
    </form>

   
@endpush
