
<!--  Tools n stuff  -->
<section class="white">
    <div class="container">
        <h2 class="navy">
            Tools n&rsquo;
            <br class="visible-xs"/>
            Reports n&rsquo; Stuff
        </h2>
        @include('parts.snippets.flag', array(
            'flagTitle' => 'Informative<br/>White Papers',
            'text' => 'Fill your brain with logistics knowledge from some of the brightest minds in the industry.',
            'url'  => '/white-papers',
            'btnText' => 'CATCH \'EM ALL',
            'btnEloji' => 'eloji-calc-rates'
        ))
        @include('parts.snippets.flag', array(
            'flagTitle' => 'Shipping Cost<br/>Comparison Tools',
            'text' => 'Our handy calculators can help you compute and actualize potential savings opportunities.',
            'url'  => '/shipping-costs-calculators',
            'btnText' => 'PLAY WITH NUMBERS',
            'btnEloji' => 'eloji-analysis'
        ))
        @include('parts.snippets.flag', array(
            'flagTitle' => 'Lojistic<br/>Blog Library',
            'text' => 'Browse our extensive library of informational blog posts to keep current with industry news.',
            'url'  => '/blog',
            'btnText' => 'GET THE LATEST',
            'btnEloji' => 'eloji-blog'
        ))
    </div>
</section>
<!--  End Tools n stuff  -->