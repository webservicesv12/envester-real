@extends('layouts.guest.app')

@push('content')
    <div class="pt-20 pb-80">
        <div class="tf-container">
            <div class="accent-box-v5 bg-menuDark mb-3 active">
                <h4 class="mb-3 text-center">{{ ucwords($package->name) }}</h4>
                <table class="table table-bordered text-white">
                    <tr>
                        <td>Minimum Amount : </td>
                        <td>${{ number_format($package->min_deposit,2) }}</td>
                    </tr>
                    <tr>
                        <td>Maximum Amount : </td>
                        <td>${{ number_format($package->max_deposit,2) }}</td>
                    </tr>
                    <tr>
                        <td>Percentage : </td>
                        <td>{{ $package->interest }}%</td>
                    </tr>
                    <tr>
                        <td>Duration : </td>
                        <td>{{ $package->duration }}</td>
                    </tr>
                    <tr>
                        <td>Referral Percentage : </td>
                        <td>{{ $package->referral_percentage }}%</td>
                    </tr>
                </table>
            </div>

            <form action="{{route('investment.update',$package->id)}}" method="post">
                @csrf
                @method('PATCH')
               

                <div class="d-flex justify-content-between align-items-center">
                    <span>Amount:</span>
                </div>
                <div class="mt-12 box-input-field">
                    <input type="text" value="50" required placeholder="Deposit Amount" name="amount" class="clear-ip value_input ip-style2">
                    <i class="icon-close"></i>
                </div>

                <x-input-error :messages="$errors->get('amount')" class="mt-2" />

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
            </form>
        </div>
    </div>
@endpush
