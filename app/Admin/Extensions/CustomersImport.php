<?php

namespace App\Admin\Extensions;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomersImport implements ToModel
{

    /**
     * @param array $row
     *
     * @return Customer|null
     */
    public function model(array $row)
    {
        return new Customer([
            'full_name' => $row[0],
            'simple_name' => $row[1],
            'full_name2' => $row[2],
            'simple_name2' => $row[3],
            'own_industry' => $row[4],
            'enterprise_grade' => $row[5],
            'enterprise_type' => $row[6],
            'enterprise_type2' => $row[7],
            'subdividing_area' => $row[8],
            'subdividing_area2' => $row[9],
            'company_website' => $row[10],
            'company_phone' => $row[11],
            'company_introduction' => $row[12],
            'special_marker' => $row[13],
            'contact_grade' => $row[14],
            'name' => $row[15],
            'name2' => $row[16],
            'nickname' => $row[17],
            'gender' => $row[18],
            'department' => $row[19],
            'department2' => $row[20],
            'position' => $row[21],
            'position2' => $row[22],
            'email' => $row[23],
            'email2' => $row[24],
            'cellphone' => $row[25],
            'telephone' => $row[26],
            'function_distribution' => $row[27],
            'we_chat' => $row[28],
            'qq' => $row[29],
            'other_contact' => $row[30],
            'resource' => $row[31],
            'address' => $row[32],
            'remark' => $row[33]
        ]);
    }

}
