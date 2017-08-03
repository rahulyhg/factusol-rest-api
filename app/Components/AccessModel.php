<?php

namespace App\Components;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Components\AccessModel
 *
 * @mixin \Eloquent
 */
class AccessModel extends Model
{
    // integer, real, float, double,
    // string,
    // boolean,
    // date, , and timestamp

    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'access';
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * {@inheritdoc}
     */
    public function save(array $options = [])
    {
        if($this->getIncrementing() === false && $this->getKey() === null && $this->getKeyType() === 'int') {
            $object = $this->orderBy($this->getKeyName(), 'desc')->first([$this->getKeyName()]);
            $row = $object->toArray();
            $next = $row[$this->getKeyName()] + 1;
            $this->setAttribute($this->getKeyName(), $next);
        }

        return parent::save($options);
    }
}