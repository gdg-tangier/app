<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    /**
     * @var $table
     */
    protected $table = 'event_user';

    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * Invitation belongs to user.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
