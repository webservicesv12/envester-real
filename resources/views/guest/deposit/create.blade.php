@extends('layouts.guest.app')

@push('content')

    <form action="{{route('deposits.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-5">

            <div class="tf-container">
                <div class=" accent-box-v2 bg-menuDark">

                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Payment Method:</span>
                    </div>

                    <div class="mt-12 mb-3">
                        <select id="payment_method" name="payment_method" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a payment method</option>
                            @foreach(\App\Models\PaymentMethod::all() as $value)
                                <option value="{{ $value->id }}" data-network="{{ $value->network }}" data-wallet="{{ $value->wallet_address }}">{{ ucwords($value->name) }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
                    </div>

                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Type :</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <input type="text" required name="network" id="network" placeholder="Type"  readonly class="clear-ip ip-style2">
                        <i class="icon-close"></i>
                    </div>
                    <x-input-error :messages="$errors->get('wallet_address')" class="mt-2" />

                    <div class="d-flex mt-3 justify-content-between align-items-center">
                        <span>Deposit To:</span>
                    </div>
                    <div class="mt-12 box-input-field mb-3">
                        <div class="input-group">
                            <input type="text" required name="wallet_address" style="background-color: #222223; border: #fff solid thin; color: #fff" id="wallet_address" placeholder="Wallet Address"  readonly class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" onclick="copy_keyboard()" style="height: 49px;" type="button">Copy</button>
                            </span>
                        </div>


                        <i class="icon-close"></i>
                    </div>
                    <x-input-error :messages="$errors->get('wallet_address')" class="mt-2" />

                    <div class="d-flex justify-content-between align-items-center">
                        <span>Deposit Amount:</span>
                    </div>
                    <div class="mt-12 box-input-field">
                        <input type="text" value="50" required placeholder="Deposit Amount" name="amount" class="clear-ip value_input ip-style2">
                        <i class="icon-close"></i>
                    </div>

                    <x-input-error :messages="$errors->get('amount')" class="mt-2" />

                    <div class="d-flex justify-content-between mt-3 align-items-center">
                        <span>Payment Evidence Receipt:</span>
                    </div>
                    <div class="mt-12">
                        <input type="file" required class="form-control" name="file">
                    </div>
                    <x-input-error :messages="$errors->get('file')" class="mt-2" />
                </div>

                <h5 class="mt-20">Amount Money</h5>
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
                </div>
            </div>
        </div>
    </form>

    <script>

        $('#payment_method').change(function(){
            $("#wallet_address").val($(this).children('option:selected').data('wallet'));
            $("#network").val($(this).children('option:selected').data('network'));
        });

        function copy_keyboard() {
            var copyText = document.getElementById("wallet_address");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Wallet address Copied: " + copyText.value);
        }

    </script>
@endpush
