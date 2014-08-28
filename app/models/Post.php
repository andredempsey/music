<?php

class Post extends BaseModel {
		//The db table this model realtes to
    protected $table = 'posts';

    protected $imgDir = 'img-upload';

    //Validation rules for our model properties
    static public $rules = [
    	'title'=>'required|max:100',
    	'body'=>'required|max:10000'
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
    * allows retrieval of categories from the Post model
    * syntax $post->categories
    */
    public function categories()
    {
        return $this->belongsToMany('Category');
    }

    public function addUploadedImage ($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';    
        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
        
        $inputFile = public_path() . $this->img_path;
        $outputFile = public_path() . $this->img_path;
        
        $maxHeight = 400;
        $maxWidth = 600;

        $newHeight = 0;
        $newWidth = 0;

        // load the image to be manipulated
        $image = new Imagick($inputFile);

        // get the current image dimensions

        $currentWidth = $image->getImageWidth(); 
        $currentHeight = $image->getImageHeight();

        // determine what the new height and width should be based on the type of photo
        if ($currentWidth > $currentHeight)
        {
            // landscape photo
            // width should be resized to max and height should be resized proportionally
            $newWidth = $maxWidth;
            $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
        }
        else if ($currentHeight > $currentWidth)
        {
            // portrait photo
            // height should be resized to max and width should be resized proportionally
            $newHeight = $maxHeight;
            $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
        }
        else
        {
            // square photo
            // resize image to max dimensions
            $newHeight = $newWidth = $maxHeight;
        }

        // perform the image resize
        $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);  

        // write out the new image
        $image->writeImage($outputFile);

        // clear memory resources
        $image->clear(); 
        $image->destroy();
	}

    public function renderBody()
    {
        // Convert the post body from markdown to HTML using parsedown.
        $dirtyHTML = Parsedown::instance()->parse($this->body);
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($dirtyHTML);
        
    }
    public function setSlugAttribute($value)
    {
        $value = str_replace(' ', '-', trim($value));
        $this->attributes['slug'] = strtolower($value);
    }
    public static function findBySlug($slug)
    {
        $post = self::where('slug', $slug)->first();
        return ($post == null) ? App::abort(404) : $post;

    }

    // Post::recentPosts();
    public static function recentPosts()
    {
        return self::with('user')->take(4)->orderBy('created_at', 'desc')->get();
    }

    public static function filteredPosts($searchTitle = null)
    {
        return self::with('user')->where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->paginate(4);
    }

    public static function countPosts($searchTitle = null)
    {
        return count(self::where('title', 'LIKE', '%' . $searchTitle . '%')->orderBy('created_at', 'desc')->get());
    }
}