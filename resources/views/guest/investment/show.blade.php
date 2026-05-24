@extends('layouts.guest.app')

@push('content')
    <div class="pt-20 pb-80">
        <div class="tf-container">
            <div class="accent-box-v5 bg-menuDark mb-3 active">
                <h4 class="mb-3 text-center">{{ ucwords($investment->package->name) }}</h4>
                <table class="table table-bordered text-white">
                    <tr>
                        <td>Amount : </td>
                        <td>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format($investment->amount,2) }}</td>
                    </tr>
                    <tr>
                        <td>Profit : </td>
                        <td>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format($investment->profit,2) }}</td>
                     </tr>
                    <tr>
                        <td>Status : </td>
                        <td>{{ ucwords($investment->status) }}</td>
                    </tr>
                    <tr>
                        <td>Reference : </td>
                        <td>{{ $investment->reference }}</td>
                    </tr>
                    <tr>
                        <td>Method : </td>
                        <td>{{ InvestmentMethod($investment->method) }}</td>
                    </tr>
                   <tr>
                        <td>Expiry Date : </td>
                        <td>{{ date('Y-m-d',$investment->duration) }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
@endpush
