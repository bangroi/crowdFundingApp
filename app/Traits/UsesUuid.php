<?php

namespace App\Traits;

trait UsesUuid{
    public static function bootUsesUuid()
    {
        static::creating(function($model){
            if(! $model->getkey()){
                $model->{$model->getKeyName()} = (string) str::uuid();
            }
        });
    }
    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
?>