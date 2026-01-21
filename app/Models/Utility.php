<?php

namespace Homelen\Models;

use Homelen\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory, Uuids;

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'provider_id',
        'name',
        'tax',
        'measure',
        'measure_description',
        'html_selector',
        'is_actual',
    ];

    public function providers()
    {
        return $this->belongsTo(Provider::class);
    }
}
