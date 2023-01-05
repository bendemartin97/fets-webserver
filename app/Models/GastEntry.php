<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $message
 * @property Carbon | null $created_at
 * @property Carbon | null $updated_at
 */
class GastEntry extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'message',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
