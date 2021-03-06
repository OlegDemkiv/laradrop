<?php
namespace Jasekz\Laradrop\Models;

use Baum\Node;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Node { 

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'laradrop_files';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filename', 'parent_id', 'type', 'system_resource_path', 'public_resource_url', 'meta', 'alias', 'has_thumbnail', 
    ];

}
