@extends('layouts.backend.app')
@push('main')
    <div class="-mb-5 -mt-px ">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6 pb-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12">
                    <div class="intro-y mt-12 sm:mt-4">
                        <div class="box box--stacked grid grid-cols-12 gap-0 divide-x divide-y divide-dashed divide-slate-200 py-0 dark:divide-white/5 xl:divide-y-0 xl:py-5">
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/20 text-theme-1">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${!! number_format($user->balance,2) !!}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Balance</div>
                                </div>
                            </div>

                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 sm:!border-t-0 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-pending/20 bg-pending/20 text-pending">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${{ number_format($user->deposits->sum('amount'), 2) }}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Deposit</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-warning/20 bg-warning/20 text-warning">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>

                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${{ number_format($user->investments->sum('amount'), 2) }}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Active Investment</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-success/20 bg-success/20 text-success">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${{ number_format($user->withdrawals->sum('amount'), 2) }}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Withdrawn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
@endpush

@push('content')
    <div>
        <ul data-tw-merge role="tablist" class="border-b border-slate-200 dark:border-darkmode-400 w-full flex">
            <li id="example-1-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-1" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent active w-full py-2"
                >Investment</button>
            </li>
            <li id="example-2-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-2" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent w-full py-2"
                >Deposit</button>
            </li>

            <li id="example-3-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-3" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent w-full py-2"
                >Withdrawal</button>
            </li>

            <li id="example-4-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-4" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent w-full py-2"
                >TopUp Account</button>
            </li>

            <li id="example-5-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-5" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent w-full py-2"
                >Account Information</button>
            </li>
        </ul>
        <div
            class="tab-content border-b border-l border-r">
            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150"  data-leave-from="visible opacity-100"  data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1" role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active p-5 leading-relaxed">

                <div class="overflow-x-auto">
                    <table data-tw-merge class="w-full text-left">
                        <thead data-tw-merge class="">
                        <tr data-tw-merge class="">
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Package</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Package</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($investments as $value)
                            <tr data-tw-merge class="">
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $sn++ }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">${{ number_format($value->amount,2) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->package->name }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->reference }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ ucwords($value->status) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->updated_at }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                                    <a href="{{route('investments.show',$value->id)}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">View</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $investments->links() }}
                </div>
            </div>

            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2" role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane p-5 leading-relaxed">

                <div class="overflow-x-auto">
                    <table data-tw-merge class="w-full text-left">
                        <thead data-tw-merge class="">
                        <tr data-tw-merge class="">
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Payment Method</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Payment Method</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($deposits as $value)
                            <tr data-tw-merge class="">
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $sn++ }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">${{ number_format($value->amount,2) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->payment_method->name }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->reference }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ ucwords($value->status) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->updated_at }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                                    <a href="{{route('deposit.show',$value->id)}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">View</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $deposits->links() }}
                </div>

            </div>

            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-3" role="tabpanel" aria-labelledby="example-3-tab" class="tab-pane p-5 leading-relaxed">

                <div class="overflow-x-auto">
                    <table data-tw-merge class="w-full text-left">
                        <thead data-tw-merge class="">
                        <tr data-tw-merge class="">
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Withdrawal Method</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">SN</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Amount</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Withdrawal Method</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Reference</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Status</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Date</th>
                            <th data-tw-merge class="font-medium px-5 py-3 border-b-2 dark:border-darkmode-300 whitespace-nowrap">Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @php($sn =1)
                        @foreach($withdrawal as $value)
                            <tr data-tw-merge class="">
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $sn++ }}</td>

                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">${{ number_format($value->amount,2) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->payment_method }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->reference }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ ucwords($value->status) }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">{{ $value->updated_at }}</td>
                                <td data-tw-merge class="px-5 py-3 border-b dark:border-darkmode-300">
                                    <a href="{{route('withdrawals.show',$value->id)}}" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary">View</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $withdrawal->links() }}
                </div>


            </div>

            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-4" role="tabpanel" aria-labelledby="example-4-tab" class="tab-pane p-5 leading-relaxed">

                <form action="{{route('clients.store')}}" method="post">
                    @csrf
                    <div>
                        <label data-tw-merge for="vertical-form-1" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                            Balance
                        </label>
                        <input data-tw-merge id="vertical-form-1" type="text" placeholder="Package Name" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" name="balance" value="{{ $user->balance }}" required>
                        <x-input-error :messages="$errors->get('balance')" class="mt-2" />
                    </div>

                   
                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <button data-tw-merge class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-3">TopUp</button>
                </form>

            </div>

            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-5" role="tabpanel" aria-labelledby="example-5-tab" class="tab-pane p-5 leading-relaxed">

                <div class="overflow-x-auto ">
                    <table class="table-auto border-separate border w-full">
                        <tr>
                            <td class="border w-1/4 p-3 font-bold">Email Address</td>
                            <td class="border w-1/4 p-3">{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td class="border w-1/4 p-3 font-bold">Full Name</td>
                            <td class="border w-1/4 p-3">{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td class="border w-1/4 p-3 font-bold">Phone Number</td>
                            <td class="border w-1/4 p-3">{{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <td class="border w-1/4 p-3 font-bold">Status</td>
                            <td class="border w-1/4 p-3">{{ AccountStatus($user->status) }}</td>
                        </tr>

                    </table>

                    <form action="{{route('clients.update',$user->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="mt-12 mb-3">
                            <input type="text" placeholder="Full Name" name="name" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mt-12 mb-3">
                            <input type="text" placeholder="Email Address" name="email" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                         <div class="mt-12 mb-3">
                            <input type="text" placeholder="Reset Password" name="password" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div class="mt-12 mb-3">
                            <select id="status" name="status" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected value="">Select</option>
                                @foreach(array(1,0) as $value)
                                    <option value="{{ $value }}">{{ AccountStatus($value) }}</option>
                                @endforeach
                            </select>

                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <button data-tw-merge class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-3">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endpush
