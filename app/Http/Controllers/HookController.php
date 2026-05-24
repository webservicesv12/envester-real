<?php

namespace App\Http\Controllers;

use App\Models\Investments;
use Illuminate\Http\Request;

class HookController extends Controller
{
    //

    public function hooks()
    {
        $investment = Investments::where('status','active')->inRandomOrder()->first();

        if ($investment){
            $duration = $investment->duration;
            $duration_interval = $investment->duration_interval;
            $amount = $investment->amount;
            $interest = $investment->package->interest;
            $interest_amount = $amount / 100 * $interest;


            if (time() >= $duration_interval){

                $investment->duration_interval = strtotime("next day");
                $investment->profit+= $interest_amount;

                $investment->user->profit+= $interest_amount;

                $investment->user->save();
                $investment->save();

            }

            if (time() >= $duration){
                $profit = $investment->profit;

                $investment->user->balance+= $amount + $profit;
                $investment->user->investment-= $amount;
                $investment->investment->profit+= $profit;
                $investment->status = "completed";

                $investment->save();
                $investment->user->save();
            }


        }
    }
}
