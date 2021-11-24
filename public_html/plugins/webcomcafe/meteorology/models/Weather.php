<?php namespace Webcomcafe\Meteorology\Models;

use Model;

/**
 * Weather Model
 */
class Weather extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table associated with the model
     */
    public $table = 'webcomcafe_meteorology_weather';

    /**
     * @var array guarded attributes aren't mass assignable
     */
    protected $guarded = ['*'];

    /**
     * @var array fillable attributes are mass assignable
     */
    protected $fillable = [];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array jsonable attribute names that are json encoded and decoded from the database
     */
    protected $jsonable = [];

    /**
     * @var array appends attributes to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array hidden attributes removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array dates attributes that should be mutated to dates
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array hasOne and other relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /**
     * Recupera a previsão de hoje
     *
     * @return static
     */
    public static function today()
    {
        if( !$weather = static::where('when', date('Y-m-d'))->first() ) {
            $weather = static::getWeatherToday();
        }

        return $weather;
    }

    /**
     * Busca pela previsãode hoje
     *
     * @return static
     */
    public static function getWeatherToday()
    {
        $model = new static;
        $model->when = date('Y-m-d');
        $model->local = 'Goianira - Goiás / Brazil';
        $model->coordinates = '-16.5001973,-49.4254788';
        $model->period = 'Afternoon';
        $model->max = 33;
        $model->min = 24;
        $model->save();
        return $model;
    }
}
