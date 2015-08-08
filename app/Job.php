<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'jobs';

    protected $fillable = array('name', 'desc', 'start_date');
    
    public function marker()
    {
        return $this->hasOne('App\JobMarker');
    }

}
