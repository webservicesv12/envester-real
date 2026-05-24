@extends('layouts.guest.app')

@push('content')

  


    <div class="pt-45 pb-16">
        <div class="tf-container"><br>
            <h4>{{ $page_title }}</h4>
           
            <ul class="mt-16 pb-12 line-bt">
               
                
                <li>
                    <a href="javascript:void(0);" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">UID</p>
                        <span class="text-secondary d-flex gap-8 align-items-center">{{ auth()->user()->referral_code }}<i class="icon-copy fs-16 text-secondary"></i></span>
                    </a>
                </li>
                <li>
                    <a href="#" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Full Name</p>
                        <span class="text-secondary d-flex gap-8 align-items-center">{{ auth()->user()->name }} <i class="icon-copy fs-16 text-secondary"></i></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:{{ auth()->user()->email }}" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Email</p>
                        <span class="text-secondary d-flex gap-8 align-items-center">{{ auth()->user()->email }}<i class="icon-copy fs-16 text-secondary"></i></span>
                    </a>
                </li>
                <li>
                    <a href="tel:{{ auth()->user()->phone }}" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Phone</p>
                        <span class="text-secondary d-flex gap-8 align-items-center">{{ auth()->user()->phone }}<i class="icon-copy fs-16 text-secondary"></i></span>
                    </a>
                </li>
                
                <li>
                    <a href="tel:{{ auth()->user()->country }}" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Country</p>
                        <span class="text-secondary d-flex gap-8 align-items-center">{{ auth()->user()->country }}<i class="icon-copy fs-16 text-secondary"></i></span>
                    </a>
                </li>
                
                
            </ul>
            <ul class="mt-16 pb-16 line-bt">
                <li>
                    <h5>Password & Profile</h5>
                </li>
                
                 <li>
                    <a href="{{route('profile.index')}}" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Edit Profile</p>
                        <span class="icon-arr-right text-secondary fs-12"></span>
                    </a>
                </li>
                
                <li>
                    <a href="change-password" class="mt-16 d-flex justify-content-between align-items-center">
                        <p class="text-small">Change Password</p>
                        <span class="icon-arr-right text-secondary fs-12"></span>
                    </a>
                </li>
                
              
                
               
               
            </ul>
            <span class="text-button mt-32 d-inline-block text-red fw-6" data-bs-toggle="modal" data-bs-target="#logout">
                Log out
            </span>
        </div>
    </div>
    <!-- modal logout -->
    <div class="modal fade modalCenter" id="logout">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-sm">
                <div class="p-16 line-bt">
                    <h4 class="text-center">Log Out</h4>
                    <p class="mt-12 text-center text-large">Are you sure you want to sign out?</p>
                </div>
                <div class="grid-2">
                   <a href="#" class="line-r text-center text-button fw-6 p-10" data-bs-dismiss="modal">Cancel</a>
                   <a href="{{url('user/logout')}}" class="text-center text-button fw-6 p-10 text-red">Log Out</a>
                </div>
               
            </div>
        </div>
    </div>





  
@endpush
