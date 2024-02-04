<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book1()
    {
        return $this->belongsTo(Book::class, 'book_1_id');
    }

    public function book2()
    {
        return $this->belongsTo(Book::class, 'book_2_id');
    }

    public function book3()
    {
        return $this->belongsTo(Book::class, 'book_3_id');
    }

    public function book4()
    {
        return $this->belongsTo(Book::class, 'book_4_id');
    }

    public function book5()
    {
        return $this->belongsTo(Book::class, 'book_5_id');
    }

}
