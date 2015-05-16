<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'breeds';

    public $timestamps = false;

    public function cats() {
        return $this->hasMany('App\Cat');
    }
}
