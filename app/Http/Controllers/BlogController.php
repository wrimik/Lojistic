<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    private $postsPerPage = 5;
    private $currentPage;
    public $postId;

    function __construct()
    {
        // Import wordpress functions
        define('WP_USE_THEMES', false);
        require base_path('wordpress/wp-blog-header.php');
    }

    public static function latestPosts($count)
    {
        return get_posts("numberposts=$count&order=DESC&orderby=date");
    }

    public static function getPostsByPage($page, $count)
    {
        $offset = (($page - 1) * 5);

        return get_posts(['numberposts' => $count, 'order' => 'DESC', 'orderby' => 'date', 'offset' => $offset]);
    }


    public function getPost($postid)
    {
        $post = get_posts("name=$postid");
        if(isset($post[0]->post_content))
        {
            $this->postId = $post[0]->ID;
            $post[0]->post_content = $this->fixFormatting($post[0]->post_content);
        }

        return $post;
    }

    public function fixFormatting($content)
    {
        if(!str_contains($content, '<p class="p1"'))
        {
            $content = str_replace("\n", "<br/>", $content);
        }
        $content = str_replace("\n\n", "\n<br/>\n", $content); //bug fix
        $content = str_replace('sourceconsulting.com', 'lojistic.com', $content);
        $content = str_replace('http://http://', 'http://', $content); //weird bug from wp db transfer
        return $content;
    }

    public function getPostsByCategory($catName)
    {
        return get_posts("category_name=$catName&posts_per_page=-1");
    }

    public function postsPerPage($posts = 0)
    {
        return $this->postsPerPage = $posts > 0 ? $posts : $this->postsPerPage;
    }

    public function totalPostCount()
    {
        return wp_count_posts()->publish;
    }

    public function totalPages()
    {
        return ceil($this->totalPostCount() / $this->postsPerPage);
    }

    public function getMetaDescription()
    {
        return \DB::table('wp_postmeta')
            ->select('meta_value')
            ->where('post_id', $this->postId)
            ->where('meta_key', 'description')
            ->first();
    }

    public function getMetaKeywords()
    {
        $defaultKeywords = 'freight audit,Lojistic, freight contracts, freight auditing'
            . ', freight audit services, freight auditing companies, freight audit companies';
        $kw = \DB::table('wp_postmeta')
            ->select('meta_value')
            ->where('post_id', $this->postId)
            ->where('meta_key', 'keywords')
            ->get();

        if(count($kw) > 0)
        {
            $keywords = [];
            foreach($kw as $k)
            {
                $keywords[] = $k->meta_value;
            }

            return implode(', ', $keywords);
        } else
        {
            return $defaultKeywords;
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
