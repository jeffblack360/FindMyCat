<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cats';

    protected $fillable = array('name', 'date_of_birth', 'breed_id');

    public function breed() {
        return $this->belongsTo('App\Breed');
    }
}
