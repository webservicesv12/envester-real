@extends('layouts.backend.app')

@push('content')
    <form action="{{ route('settings.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-1 gap-6">

            <div class="relative">
                @foreach($all_key as $key)

                    <div class="p-3 border-b border-gray-100 dark:border-gray-700">
                        <h5 class="text-lg font-bold">{{ucwords($key)}} </h5>
                    </div>

                    @foreach($all_settings_array[$key] as $settings_key)

                       <div>
                           <label data-tw-merge for="vertical-form-1" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 mt-3  group-[.form-inline]:sm:text-right">
                               {{$settings_key['descr']}}
                           </label>

                           <input  class="form-input mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"  name="{{$settings_key['id']}}" type="{{$settings_key['settings_input_type']}}" id="{{$settings_key['id']}}" value="{{$settings_key['value']}}" placeholder=" {{ $settings_key['descr'] }}" required="">
                       </div>

                    @endforeach

                @endforeach

            </div>
        </div>

        <button data-tw-merge class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-3">Submit</button>

    </form>
@endpush
