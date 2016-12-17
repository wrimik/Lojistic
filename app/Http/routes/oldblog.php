<?php

// Blog related routes
use App\Http\Controllers\BlogController;

Route::get('blog/wp-admin', function ()
{
    return redirect('http://blogadmin.lojistic.com/blog/wp-admin');
});
Route::get('wp-admin', function ()
{
    return redirect('http://blogadmin.lojistic.com/blog/wp-admin');
});
Route::get('/blog/category/ups-and-fedex/compare-ups-and-fedex', function()
{
    return redirect('/blog/category/compare-ups-and-fedex');
});

Route::get('/blog/category/{catName}', function ($catName)
{
    $BlogController = new BlogController();
    $posts = $BlogController->getPostsByCategory($catName);

    $data = array(
        'title'       => 'Lojistic Blog - '.ucwords(str_replace('-', ' ', $catName)),
        'description' => 'Lojistic Blog Category: '.ucwords(str_replace('-', ' ', $catName)).' Lojistic offers freight audit services, negotiation of carrier shipping contracts, transportation software, and more to clients across the country. We can help reduce shipping costs, perform parcel audits, and more.',
        'bodyClass'   => 'home single',
        'legacy'      => false,
        'h1'          => ucwords(str_replace('-', ' ', $catName)),
        'blogContent' => $posts
    );

    return view('blog/home')->with($data);
});
Route::get('/blog/author/tylerg', function ()
{
    $data = array(
        'title'       => 'Lojistic - About The Author Tyler Glassman',
        'description' => 'Lojistic - About The Author Tyler Glassman',
        'keywords'    => 'Lojistic - About The Author Tyler Glassman',
        'bodyClass'   => 'about-the-author-tyler-glassman',
        'legacy'      => true
    );

    return view('articles/about-the-author-tyler-glassman')->with($data);
});


Route::get('blog', function ()
{
    $BlogController = new BlogController();
    $totalPages = $BlogController->totalPages();
    $pagination = [
        'page'       => 1,
        'perPage'    => 5,
        'totalPages' => $totalPages,
        'pagesLeft'  => $totalPages - 1,
        'prev'       => '#',
        'next'       => url('blog/page/2')
    ];
    $data = array(
        'title'       => 'Lojistic Blog',
        'description' => 'Lojistic offers freight and parcel audit services, negotiation of carrier shipping contracts, transportation software, and more to clients across the country. We can help reduce shipping costs, perform parcel audits, and more.',
        'bodyClass'   => 'home single',
        'legacy'      => false,
        'h1'          => 'Lojistic Blog',
        'blogContent' => $BlogController->latestPosts(5),
        'pagination'  => $pagination
    );

    return view('blog/home')->with($data);
});

Route::get('blog/page/{page?}', function ($page = 1)
{
    $BlogController = new BlogController();
    $posts = $BlogController->getPostsByPage($page, 5);
    if($page > $BlogController->totalPages() || $page < 1) return redirect('/blog',301 );
    $pagination = [
        'page'       => $page,
        'perPage'    => 5,
        'totalPages' => $BlogController->totalPages(),
        'pagesLeft'  => $BlogController->totalPages() - $page,
        'prev'       => $page == 1 ? '#' : url('blog/page/' . ($page - 1)),
        'next'       => $page == $BlogController->totalPages() ? '#' : url('blog/page/' . ($page + 1))
    ];
    $data = array(
        'h1'          => 'Lojistic Blog',
        'blogContent' => $posts,
        'pagination'  => $pagination,
        'title'       => 'Lojistic Blog - Page '.$pagination['page'],
        'description' => 'Blog Page '.$pagination['page'].'. Lojistic offers freight and parcel audit services, negotiation of carrier shipping contracts, transportation software, and more to clients across the country. We can help reduce shipping costs, perform parcel audits, and more.',
    );

    return view('blog/home')->with($data);
});

Route::get('/blog/{postID}', function ($postID)
{
    $BlogController = new BlogController();
    $post = $BlogController->getPost($postID);
    //Need ->getPost() before the meta descriptions so they can use the same post id
    $description = $BlogController->getMetaDescription();
    $data = array(
        'title'       => strip_tags($post[0]->post_title),
        'description' => is_null($description) ? substr(strip_tags($post[0]->post_content), 0, 120) : $description->meta_value,
        'keywords'    => $BlogController->getMetaKeywords(),
        'bodyClass'   => 'home single',
        'legacy'      => false,
        'post'        => $post[0]
    );

    return view('blog/post')->with($data);
});