<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dt_blog extends Model
{
    protected $table = 'dt_blog';
    protected $fillable = ['dt_blog_type', 'dt_blog_date_event', 'dt_blog_title', 'dt_blog_text', 'dt_blog_for', 'dt_blog_by', 'dt_blog_create_by', 'dt_blog_update_by', 'dt_blog_delete_by'];
}
