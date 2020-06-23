<?php

namespace App;

use App\Category;
use App\Services\PostService;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';
    
    /**
     * constants 
     * 1. approved posts
     * 2. not approved posts 
     * 3. get detailed date like ()
     */
    protected $_TRUE = 1;
    protected $_FALES = 0;
    
    /**
     * Get the category of the post.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    /**
     * Get the reg user (Author) of the post.
     */
    public function regUser()
    {
        return $this->belongsTo('App\RegUser');
    }

    /**
     * Get the last 6 posts with category
     */
    public function home()
    {
        $postService = new PostService; 
        return $postService->getReadableCreatedAt(self::where('approved', $this->_TRUE)->latest()->take(6)->get());
    }

    /**
     * Get the most viewed posts
     */
    public function mostViewed()
    {   

    }

    /**
     * Get posts by categories
     */
    public function categories()
    {

    }

    
}
