@extends('layouts.guest.app')

@push('content')

    <div class="bg-menuDark tf-container">
        <div class="pt-12 pb-12 mt-4 mb-3">
            <div class="wrap-filter-swiper">
                <h5><a href="#" class="cryptex-rating">{{ $page_title }}</a></h5>
                <!-- </div> -->
            </div>
            <div class="tab-content mt-8">
                <div class="tab-pane fade show active" id="favorites" role="tabpanel">
                    <div class="d-flex justify-content-between">
                        
                        <p class="d-flex gap-8">
                            <!--<span>Amount</span>-->
                            <span>Status</span>
                        </p>
                    </div>
                    <ul class="mt-16">
                        @foreach($investments as $value)
                        <li class="mt-8">
                                <a href="{{route('investment.show',base64_encode($value->id))}}" class="coin-item style-1 gap-12 bg-surface">
                                    
                                    
                                     <img src="{{static_asset('coin/coin-2.jpg.png')}}" alt="img" class="img">
                                     
                                    
                                     
                                    <div class="content">
                                        <div class="title">
                                            <p class="mb-4 text-large">{{ ucwords($value->package->name) }} - {{ ucwords(auth()->user()->acct_currency) }}{{ number_format($value->amount,2) }}</p>
                                            <span class="text-secondary">{{ date('d-m-Y H:i:s:a',strtotime($value->updated_at)) }}</span>
                                        </div>
                                        <div class="box-price">
                                            
                                        
                                           <span class="text-small">{{ $value->reference }}</span>
                                            <span class="coin-btn decrease">{{ ucwords($value->status) }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        
                           
                        @endforeach
                    </ul>

                     {{ $investments->links() }}
                </div>
            </div>
        </div>
    </div>
    
    
   
@endpush
