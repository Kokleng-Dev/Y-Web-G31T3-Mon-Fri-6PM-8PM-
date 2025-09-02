<?php

namespace App\Imports;

use App\Models\Customer;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportsCustomer implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach($rows as $i => $row){
            if ($i == 0) continue;

            $customer = new Customer();
            $customer->full_name = $row[1];
            $customer->save();
        }

        return true;
    }
}
