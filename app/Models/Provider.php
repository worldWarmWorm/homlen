<?php

namespace Homelen\Models;

use Homelen\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory, Uuids;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'name',
        'link',
    ];

    public function utilities()
    {
        return $this->hasMany(Utility::class);
    }
}
