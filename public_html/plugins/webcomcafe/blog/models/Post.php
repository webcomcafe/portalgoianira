<?php namespace Webcomcafe\Blog\Models;

use Backend\Models\User;
use Cms\Classes\Layout;
use Cms\Classes\Theme;
use Model;
use System\Models\File;
use Webcomcafe\Blog\Classes\Backend\PostLayout;
use Webcomcafe\Blog\Classes\Posts\Format;

/**
 * Post Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'webcomcafe_blog_posts';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Validation rules for attributes
     */
    public $rules = [
        'title'   => 'required',
        'slug'   => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:webcomcafe_blog_posts'],
        'content' => ['required'],
        'excerpt' => ['required'],
        'layout' => ['required'],
        'tags' => ['required'],
        'categories' => ['required'],
        'authors' => ['required'],
    ];

    public $customMessages = [
        'content.required' => 'Escreva algo'
    ];

    /**
     * @var array Attributes to be cast to native types
     */
    protected $casts = [];

    /**
     * @var array Attributes to be cast to JSON
     */
    protected $jsonable = [];

    /**
     * @var array Attributes to be appended to the API representation of the model (ex. toArray())
     */
    protected $appends = [];

    /**
     * @var array Attributes to be removed from the API representation of the model (ex. toArray())
     */
    protected $hidden = [];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'comments' => [Comment::class]
    ];
    public $hasOneThrough = [];
    public $hasManyThrough = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'categories' => [
            'Webcomcafe\Blog\Models\Category',
            'table' => 'webcomcafe_blog_category_post',
            'conditions' => 'published = 1'
        ],
        'authors' => [
            'Backend\Models\User',
            'table' => 'webcomcafe_blog_author_post',
            'conditions' => 'role_id not in (2,8)',
        ],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [
        'images' => [File::class]
    ];


    /**
     * Retorna lista de layouts
     *
     * @return string[]
     */
    public function getLayoutOptions(): array
    {
        $layouts = PostLayout::all()->lists('description', 'name');

        return array_filter($layouts);
    }


    /**
     * Filtra posts por formato/layout
     *
     * @param $query
     * @param $values
     * @return mixed
     */
    public function scopeFormat($query, $values)
    {
        return $query->whereIn('layout', $values);
    }


    /**
     * Retorna posts publicados
     *
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }


    /**
     * Filtra posts por categorias
     *
     * @param $query
     * @param $ids
     */
    public function scopeFilterCategories($query, $ids)
    {
        $query->whereHas('categories', function($query) use ($ids) {
            return $query->whereIn('id', $ids);
        });
    }
}
