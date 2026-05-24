@extends('layouts.backend.app')

@push('content')
    <div class="overflow-x-auto ">
        <table class="table-auto border-separate border w-full">
            <tr>
                <td class="border w-1/4 p-3 font-bold">Id</td>
                <td class="border w-1/4 p-3">{{ $investment->id }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Amount</td>
                <td class="border w-1/4 p-3">${{ number_format($investment->amount,2) }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Package</td>
                <td class="border w-1/4 p-3">{{ $investment->package->name }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Method</td>
                <td class="border w-1/4 p-3">{{ InvestmentMethod($investment->method) }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Client Details</td>
                <td class="border w-1/4 p-3">{{ $investment->user->name }} - {{ $investment->user->email }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Reference</td>
                <td class="border w-1/4 p-3">{{ $investment->reference  }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Status</td>
                <td class="border w-1/4 p-3">{{ ucwords($investment->status) }}</td>
            </tr>

            <tr>
                <td class="border w-1/4 p-3 font-bold">Date</td>
                <td class="border w-1/4 p-3">{{ $investment->updated_at }}</td>
            </tr>
        </table>


    </div>
@endpush
