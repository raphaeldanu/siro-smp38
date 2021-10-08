<?php

namespace App\Imports;

use App\Models\StudentUn;
use Maatwebsite\Excel\Concerns\ToModel;

class UnImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StudentUn([
            //
        ]);
    }
}
