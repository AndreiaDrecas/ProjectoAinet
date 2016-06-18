<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'media';

    protected $fillable = ['photo_path'];

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }
}
