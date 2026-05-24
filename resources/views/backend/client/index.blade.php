@extends('layouts.backend.app')

@push('content')
    <div class="overflow-x-auto">
        <table data-tw-merge class="w-full text-left">
            <thead data-tw-merge class="">
            <tr data-tw-merge class="">
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Name</th>
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Email Address</th>
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Phone Number</th>
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Account Type</th>
                <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
            </tr>
            </thead>
            <tfoot>
                <tr>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Name</th>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Email Address</th>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Phone Number</th>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Account Type</th>
                    <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                </tr>
            </tfoot>
            <tbody>
            @php($sn =1)
            @foreach($users as $value)
                <tr data-tw-merge class="">
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $sn++ }}</td>
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ ucwords($value->name) }}</td>
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->email }}</td>
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->phone }}</td>
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->role_type }}</td>
                    <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                        <a href="{{route('clients.show',$value->id)}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">Profile</a>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
@endpush
