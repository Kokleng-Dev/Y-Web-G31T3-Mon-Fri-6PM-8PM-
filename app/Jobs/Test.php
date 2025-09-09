<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use App\Models\CustomerType;

class Test implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // insert 1,000,000 rows custmer type
        for($i=0; $i<10000; $i++){
            $new_customer_type = new CustomerType;
            $new_customer_type->name = 'Customer Type '.$i;
            $new_customer_type->save();
        }
    }
}





