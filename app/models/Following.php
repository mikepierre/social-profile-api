<?php
namespace App\Models;

use Eloquent;
use DB; 

class Following extends Eloquent{ 

    protected $table = 'following';
    public $timestamps = false;

}
?>