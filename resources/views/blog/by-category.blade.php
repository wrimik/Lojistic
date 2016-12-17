@extends('layouts.flat')
@section('styles')
    {!!  Html::style('/css/pages/blog.css?v='.v())  !!}
@stop
@section('scripts')
    <script>
        blogInit();
        buildSocialMediaLinks();
    </script>
@stop
@section('content')


    <section id="blog">
        <div class="container">
            <br>
            <h2>Blog Categories</h2>
            <div class="col-xs-6 ">
                <ul class="ul">
                    <li><a href="/blog/category/compare-ups-and-fedex"><p class="uppercase">Compare UPS and FedEx</p></a>
                    <li><a href="/blog/category/corporate-responsibility"><p class="uppercase">Corporate Responsibility</p></a></li>
                    <li><a href="/blog/category/fedex-and-ups-rates"><p class="uppercase">Fedex and UPS Rates</p></a></li>
                    <li><a href="/blog/category/fedex-and-ups-service"><p class="uppercase">Fedex and UPS Service</a></li>
                    <li><a href="/blog/category/freight-management-solutions"><p class="uppercase">Freight Management Solutions</p></a></li>
                    <li><a href="/blog/category/freight-shipping"><p class="uppercase">Freight Shipping</p></a></li>
                    <li><a href="/blog/category/how-to-reduce-shipping-costs"><p class="uppercase">How to Reduce Shipping Costs</p></a></li>
                </ul>
            </div>
            <div class="col-xs-6 ">
                <ul class="ul">
                    <li><a href="/blog/category/parcel-and-freight-auditing"><p class="uppercase">Parcel and Freight Auditing</p></a></li>
                    <li><a href="/blog/category/parcel-and-freight-discounts"><p class="uppercase"> Parcel and Freight Discounts</p></a></li>
                    <li><a href="/blog/category/small-parcel-information"><p class="uppercase">Small Parcel Information</p></a></li>
                    <li><a href="/blog/category/uncategorized"><p class="uppercase">Uncategorized</p></a></li>
                    <li><a href="/blog/category/ups-and-fedex"><p class="uppercase">UPS and FedEx</p></a></li>
                    <li><a href="/blog/category/ups-and-fedex-discounts"><p class="uppercase">UPS and FedEx Discounts</p></a></li>
                </ul>
            </div>
        </div>
    </section>



@stop
