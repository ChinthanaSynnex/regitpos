<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    protected $fillable = [
        'ShopName',
        'ShopContact1',
        'ShopContact2',
        'ShopAddressOne',
        'ShopAddressTwo',
        'ShopLogo',
        'ShopReceipt',
        'ShopStat',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
