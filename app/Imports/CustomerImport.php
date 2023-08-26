<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Debugbar;

class CustomerImport implements ToModel, WithStartRow, WithUpserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $user;

    public function __construct($user){
        $this->user = $user;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function uniqueBy()
    {
        return 'iduser';
    }

    public function upsert(array $row)
    {
        return [
            'full_name' => $row[1], 
            'address'=> $row[2], 
            'country'=> $row[3], 
            'phone'=> $row[4], 
            'mt4_id'=> $row[5], 
            'deposit'=> $row[6], 
            'lots'=> $row[7], 
            'update_by' => auth()->user()->getAuthIdentifier()       
        ];
    }

    public function model(array $row)
    {
        if ($this->shouldImportRow($row)) {
            $iduser = $this->user->where('email', $row[0])->first();
            $customercheck = new Customer();
            Debugbar::info($customercheck);
            return new Customer([
                'iduser'=> $iduser->id,
                'full_name' => $row[1], 
                'address'=> $row[2], 
                'country'=> $row[3], 
                'phone'=> $row[4], 
                'mt4_id'=> $row[5], 
                'deposit'=> $row[6], 
                'lots'=> $row[7], 
                'update_by' => auth()->user()->getAuthIdentifier()
            ]);
        }
    }

    protected function shouldImportRow(array $row)
    {
        // Implement your logic here to determine if the row should be imported
        // based on data from the ReferenceModel
        // Example:
        $iduser = $this->user->where('email', $row[0])->first();
        if(empty($iduser)){
            return false;
        }
        Debugbar::info($iduser->id);
        return true;

        // Return true to import all rows for now
        // return true;
    }
}
