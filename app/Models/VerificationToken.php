<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationToken extends Model
{
    /**
     * The primary key.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token'
    ];

    /**
     * The owner of this verification token.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Relation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
