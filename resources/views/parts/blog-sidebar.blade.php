<?php $recentPosts = \App\Http\Controllers\BlogController::latestPosts(5) ?>

<aside id="sidebar">
    <aside id="recent-posts-2" class="widget widget_recent_entries">
        <span class="widget-title fs-36">Recent Posts</span>
        <ul class="ul">
            @foreach ($recentPosts as $post)
            <li>
                <a rel="nofollow" href="/blog/{{ $post->post_name }}" title="Permalink to {{ $post->post_title }}" rel="bookmark">
                    {!! $post->post_title !!}
                </a>
            </li>
            @endforeach
        </ul>
    </aside>
    <br>
    <aside id="categories-2" class="widget widget_categories">
        <span class="widget-title fs-36">Categories</span>
        <ul class="ul">
            <li>
                <a rel="nofollow" href="/blog/category/compare-ups-and-fedex">
                    Compare UPS and FedEx
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/corporate-responsibility"
                   >Corporate Responsibility
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/fedex-and-ups-rates">
                    FedEx and UPS Rates
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/fedex-and-ups-service">
                    FedEx and UPS Service
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/freight-management-solutions">
                    Freight Management Solutions
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/freight-shipping">
                    Freight Shipping
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/how-to-reduce-shipping-costs">
                    How to Reduce Shipping Costs
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/parcel-and-freight-discounts">
                    Parcel and Freight Discounts
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/small-parcel-information">
                    Small Parcel Information
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/uncategorized">
                    Uncategorized
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/ups-and-fedex">
                    UPS and FedEx
                </a>
            </li>
            <li>
                <a rel="nofollow" href="/blog/category/ups-and-fedex-discounts">
                    UPS and FedEx Discounts
                </a>
            </li>
        </ul>
    </aside>
    </aside> <!-- end of sidebar -->
