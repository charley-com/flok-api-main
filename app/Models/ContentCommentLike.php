<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class ContentCommentLike extends Model
{
    use HasFactory;
    use Uuid;

     /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $guard_name = 'api';

    public function contentComment()
    {
        return $this->belongsTo(ContentComment::class, 'content_comment_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
