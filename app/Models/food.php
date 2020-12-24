<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;

    public function presetPrice () {
        // dd($this->asDollars($this->price));
        return $this->asDollars($this->price);

    }

    public function asDollars($value) {
        if ($value<0) return "-".asDollars(-$value);
        return '₦' . number_format($value, 2);
    } 

    public function scopeMightLike($query) {

        return $query->inRandomOrder()->take(4);

    }
}
