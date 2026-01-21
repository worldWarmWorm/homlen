<?php

namespace Homelen;

use Illuminate\Support\Str;

trait Uuids
{
    protected static function bootUuids(): void
    {
        static::creating(function ($model) {
            if (!$model->{$model->getKeyName()}) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    public function getIncrementing(): bool
    {
        return false;
    }
}
