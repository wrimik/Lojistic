<div class="entry-meta">
    <span class="meta-prep meta-prep-author">Author:</span>
    <span class="author vcard">
        @if($post->post_author == 10)
            <a class="url fn n" href="/about-the-author-steve-minard"
               title="View all posts by Steve Minard"
               rel="nofollow">
                Steve M.
            </a>
        @elseif($post->post_author == 5)
            <a class="url fn n" href="/blog/author/tylerg/" title="View all posts by tylerg"
               rel="nofollow">
               TylerG
            </a>
        @else
            {{ get_the_author_meta('display_name', $post->post_author) }}
        @endif
    </span>
    <span class="meta-sep">|</span>
    <span class="entry-date">
        {{ date('F d, Y', strtotime($post->post_date)) }}
    </span>
</div><!-- .entry-meta -->
