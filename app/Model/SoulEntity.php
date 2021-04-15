<?php

declare (strict_types=1);
namespace App\Model;

/**
 * Class SoulEntity
 * @package App\Model
 * @property int $id
 * @property string $title
 * @property string $hits
 */
class SoulEntity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'soul_entity';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}