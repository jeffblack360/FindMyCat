<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobMarker extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'job_markers';

    protected $fillable = array('name', 'address', 'lat', 'lng');

    public function job()
    {
        return $this->belongsTo('App\Job');
    }
}
