<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class topic extends Model
{
	protected $primaryKey='id';
	protected $table='topics';
	protected $fillable=['topicname','created_at','updared_at'];
	protected $rules=['topicname'=>['required','max:100','unique']];
}
