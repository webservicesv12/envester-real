@extends('layouts.backend.app')

@push('content')
    <div class="overflow-x-auto ">
        <table class="table-auto border-separate border w-full">
            <tr>
                <td class="border w-1/4 p-3 font-bold">Id</td>
                <td class="border w-1/4 p-3">{{ $deposit->id }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Amount</td>
                <td class="border w-1/4 p-3">${{ number_format($deposit->amount,2) }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Payment Method</td>
                <td class="border w-1/4 p-3">{{ $deposit->payment_method->name }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Wallet Send To</td>
                <td class="border w-1/4 p-3">{{ $deposit->wallet_address }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Client Details</td>
                <td class="border w-1/4 p-3">{{ $deposit->user->name }} - {{ $deposit->user->email }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Reference</td>
                <td class="border w-1/4 p-3">{{ $deposit->reference  }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Status</td>
                <td class="border w-1/4 p-3">{{ ucwords($deposit->status) }}</td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Evidence Of Payment</td>
                <td class="border w-1/4 p-3"><img src="{{ static_asset($deposit->image) }}"></td>
            </tr>
            <tr>
                <td class="border w-1/4 p-3 font-bold">Date</td>
                <td class="border w-1/4 p-3">{{ $deposit->updated_at }}</td>
            </tr>
        </table>

        @if(in_array($deposit->status,array('processing')))
            <h1 class="font-bold mt-5 text-2xl">Payment Status</h1>
            <form action="{{route('deposit.update',$deposit->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="mt-12 mb-3">
                    <select id="status" name="status" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Select</option>
                        @foreach(array('processing','completed','cancelled','pending') as $value)
                            <option value="{{ $value }}">{{ ucwords($value) }}</option>
                        @endforeach
                    </select>

                    <x-input-error :messages="$errors->get('status')" class="mt-2" />
                </div>

                <button data-tw-merge class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-3">Submit</button>
            </form>
        @endif
    </div>
@endpush
