<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lisensi
 *
 * @property $id
 * @property $lisensi_key
 * @property $computer_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lisensi extends Model
{
    
    static $rules = [
    'email' => 'required',
		'lisensi_key' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lisensi_key', 'email'];



}
