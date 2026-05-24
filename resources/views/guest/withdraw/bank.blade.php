@extends('layouts.guest.app')

@push('content')
    <form action="{{route('bank.store')}}" method="post">
        @csrf
        <div class="mt-5">

            <div class="tf-container">
                <div class=" accent-box-v2 bg-menuDark">

                  
                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Bank Name:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="bank_name" id="bank_name" placeholder="Bank Name"  class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    
                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Account Number:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="account_number" id="account_number" placeholder="Account Number"  class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    
                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Romote Code:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="remote_code" id="remote_code" placeholder="Remote Code"  class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    
                    <div class="mt-12 mb-3">
                        <select id="id_type" name="id_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Document Type</option>
                                <option value="Personal ID">Personal ID</option>
                                 <option value="Driver License">Driver License</option>
                                  <option value="National ID">National ID</option>
                                   <option value="Worker ID">Worker ID</option>
                        </select>

                    </div>
                    
                    
                    
                    
                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>ID Number:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="id_number" id="id_number" placeholder="ID Number"  class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    
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
