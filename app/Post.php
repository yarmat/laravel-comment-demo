<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Yarmat\Comment\Contracts\CommentContract;
use Yarmat\Comment\Traits\HasCommentTrait;

class Post extends Model implements CommentContract
{
    use HasCommentTrait;
}
