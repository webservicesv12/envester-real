@extends('layouts.guest.app')

@push('content')

@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif

    <!-- account -->
    <div class="modal fade " id="accountWallet">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title"></span>
                    <span class="icon-cancel" data-bs-dismiss="modal"></span>
                </div>
                <div class="mt-20 pl-20 pr-10  pb-16">
                    <form action="#" method="post">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Amount To Invest (USD)</span>
                        </div>
                        <div class="mt-12 box-input-field">
                            <input type="text" required placeholder="Amount" name="amount" id="amount" class="clear-ip ip-style2">
                            <i class="icon-close"></i>
                        </div>
                        <input type="hidden" name="interest" id="interest">
                        <input type="hidden" name="duration" id="duration">
                        <input type="hidden" name="min_deposit" id="min_deposit">
                        <input type="hidden" name="max_deposit" id="max_deposit">

                        <button type="button" class="tf-btn lg primary calculate-rio mt-3 mb-3">Calculate</button>
                    </form>
                </div>
            </div>

        </div>
    </div>


        <div class="pt-20 pb-80">
            <div class="tf-container">
            <div class="row">
                @foreach($packages as $value)
                    <div class="col-sm-6">
                        <div class="accent-box-v5 bg-menuDark mb-3 active">
                            <div class="mt-12">
                                <h4 class="mb-3 text-center">{{ ucwords($value->name) }}</h4>
                                <table class="table table-bordered text-white">
                                    <tr>
                                        <td>Minimum Amount : </td>
                                        <td>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format($value->min_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Amount : </td>
                                        <td>{{ ucwords(auth()->user()->acct_currency) }}{{ number_format($value->max_deposit,2) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Percentage : </td>
                                        <td>{{ $value->interest }}%</td>
                                    </tr>
                                    <tr>
                                        <td>Duration : </td>
                                        <td>{{ $value->duration }}</td>
                                    </tr>
                                    <tr>
                                        <td>Referral Percentage : </td>
                                        <td>{{ $value->referral_percentage }}%</td>
                                    </tr>
                                </table>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="{{route('investment.edit',base64_encode($value->id))}}" class="tf-btn lg primary mb-3">Invest Now</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#accountWallet" data-interest="{{ $value->interest }}" data-title="{{ ucwords($value->name) }}" data-min-deposit="{{ $value->min_deposit }}" data-max-deposit="{{ $value->max_deposit }}" data-duration="{{ ExtractDays($value->duration) }}" class="tf-btn calculate lg primary">Calculate RIO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <script>

        function toast(msg,type){
            if (type == "success"){
                $(document).ready(function () {
                    swal({
                        title: "Success",
                        text: msg,
                        icon: "success",
                    });
                });
            }else {
                $(document).ready(function () {
                    swal({
                        title: "Error",
                        text: msg,
                        icon: "error",
                    });
                });
            }
        }

        $(function (){

            $(".calculate").click(function (e) {
                e.preventDefault();

                $(".title").html("Calculate RIO - "+$(this).data('title'));

                $("#interest").val($(this).data('interest'));
                $("#duration").val($(this).data('duration'));

                $("#min_deposit").val($(this).data('min-deposit'));
                $("#max_deposit").val($(this).data('max-deposit'));

                $("#amount").val("");
            });

            $(".calculate-rio").click(function (e){
                e.preventDefault();

                var amount = parseFloat($("#amount").val());
                var min_deposit = parseFloat($("#min_deposit").val());
                var max_deposit = parseFloat($("#max_deposit").val());
                var duration = parseInt($("#duration").val());
                var interest = parseFloat($("#interest").val());

                if(isNaN(amount)){
                    toast("Amount is required");
                    return;
                }

                if(amount < min_deposit || amount > max_deposit){
                    toast("The minimum amount and the maximum amount of the plan you selected should be between $"+min_deposit+" - $"+max_deposit);
                    return;
                }

                var profit = parseFloat((amount / 100 * interest) * duration + amount);

                toast('Your investment profit would be $'+profit+ ' in '+duration+' days.','success');

            });
        });
    </script>
@endpush
