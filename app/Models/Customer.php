<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// invoices nghĩa là hóa đơn 
class Customer extends Model
{
    use HasFactory;

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
