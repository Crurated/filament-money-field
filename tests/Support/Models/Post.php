<?php

namespace Crurated\FilamentMoneyField\Tests\Support\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Crurated\FilamentMoneyField\Casts\CurrencyCast;
use Crurated\FilamentMoneyField\Casts\MoneyCast;
use Crurated\FilamentMoneyField\Tests\Support\Database\Factories\PostFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'is_published'    => 'boolean',
        'tags'            => 'array',
        'price'           => MoneyCast::class,
        'price_currency'  => CurrencyCast::class,
        'amount'          => MoneyCast::class,
        'amount_currency' => CurrencyCast::class,
    ];

    protected $guarded = [];

    /*
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
    */

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
