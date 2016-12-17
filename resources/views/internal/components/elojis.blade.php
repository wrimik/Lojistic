@extends('layouts.internal')
@section('styles')
    <style>
        /* Page Styles */

        * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: #fff;
            color: #444;
            font: 16px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        a,
        a:visited {
            color: #888;
            text-decoration: underline;
        }

        a:hover,
        a:focus {
            color: #000;
        }

        header {
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
            overflow: hidden;
            padding: 20px 0;
        }

        header h1 {
            color: #888;
            float: left;
            font-size: 36px;
            font-weight: 300;
        }

        header a {
            float: right;
            font-size: 14px;
        }

        .container {
            margin: 0 auto;
            max-width: 1200px;
            min-width: 960px;
            padding: 0 40px;
            width: 90%;
        }

        .glyph {
            border-bottom: 1px dotted #ccc;
            padding: 10px 0 20px;
            margin-bottom: 20px;
        }

        .preview-glyphs {
            vertical-align: bottom;
        }

        .preview-scale {
            color: #888;
            font-size: 12px;
            margin-top: 5px;
        }

        .step {
            display: inline-block;
            line-height: 1;
            position: relative;
            width: 10%;
        }

        .step .letters,
        .step i {
            -webkit-transition: opacity .3s;
            -moz-transition: opacity .3s;
            -ms-transition: opacity .3s;
            -o-transition: opacity .3s;
            transition: opacity .3s;
        }

        .step:hover .letters {
            opacity: 1;
        }

        .step:hover i {
            opacity: .3;
        }

        .letters {
            opacity: .3;
            position: absolute;
        }

        .characters-off .letters {
            display: none;
        }

        .characters-off .step:hover i {
            opacity: 1;
        }

        .size-12 {
            font-size: 12px;
        }

        .size-14 {
            font-size: 14px;
        }

        .size-16 {
            font-size: 16px;
        }

        .size-18 {
            font-size: 18px;
        }

        .size-21 {
            font-size: 21px;
        }

        .size-24 {
            font-size: 24px;
        }

        .size-36 {
            font-size: 36px;
        }

        .size-48 {
            font-size: 48px;
        }

        .size-60 {
            font-size: 60px;
        }

        .size-72 {
            font-size: 72px;
        }

        .usage {
            margin-top: 10px;
        }

        .usage input {
            font-family: monospace;
            margin-right: 3px;
            padding: 2px 5px;
            text-align: center;
        }

        .usage .point {
            display: none;
        }

        .usage .class {
            width: 250px;
        }

        footer {
            color: #888;
            font-size: 12px;
            padding: 20px 0;
        }

        .step {
            display: none;
        }

        .step.size-72 {
            display: block
        }

        .glyph {
            float: left;
            clear: none;
        }

        input, .class {
            float: left;
            clear: left;
            width: 50px;
        }

        #sidebar-toggle{
            height: 100%;
            position:fixed;
            z-index: 999;
            right:0;
            top:0;
            bottom:0;
            padding: 100px 15px;
            overflow-y:scroll;
            background-color:#fff;
        }

        #sidebar-toggle input[type="radio"] {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        #sidebar-toggle label {
            text-align:center;
            display: block;
            padding: 10px;
            cursor: pointer;
            border: 1px solid rgba(0, 0, 0, 0.42);
        }

        #sidebar-toggle label:hover,
        #sidebar-toggle input[type='radio']:checked+label {
            color:#FFFFFF;
            background-color: rgba(0, 0, 0, 0.67);;
        }


    </style>
@stop
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#sidebar-toggle label').click(function(){
                $('.step').hide();
                var show = $(this).attr('for').replace('size', '.size-');
                $(show).show();
            });
        });
    </script>
@stop
@section('page-title')
    Lojistic's Eloji Icon Set
@stop
@section('content')
<div id="page" class="container characters-off">
    <header>
        <h1>eloji contains 69 glyphs:</h1>
    </header>
    <!-- Sidebar Size Toggle -->
    <div id="sidebar-toggle">
        <h4>Size Toggle</h4>
        <input type="radio" name="size" value="12" id="size12">
        <label for="size12">12px</label>
        <input type="radio" name="size" value="14" id="size14">
        <label for="size14">14px</label>
        <input type="radio" name="size" value="16" id="size16">
        <label for="size16">16px</label>
        <input type="radio" name="size" value="18" id="size18">
        <label for="size18">18px</label>
        <input type="radio" name="size" value="21" id="size21">
        <label for="size21">21px</label>
        <input type="radio" name="size" value="24" id="size24">
        <label for="size24">24px</label>
        <input type="radio" name="size" value="36" id="size36">
        <label for="size36">36px</label>
        <input type="radio" name="size" value="48" id="size48">
        <label for="size48">48px</label>
        <input type="radio" name="size" value="60" id="size60">
        <label for="size60">60px</label>
        <input type="radio" name="size" value="72" id="size72" checked>
        <label for="size72">72px</label>
    </div>
    <!-- /Sidebar Size Toggle -->

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12">
                <span class="letters">Pp</span><i id="eloji-analysis"
                                                                         class="eloji-analysis"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-analysis"
                                                                           class="eloji-analysis"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-analysis"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf104;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-audit"
                                                                         class="eloji-audit"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-audit" class="eloji-audit"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-audit"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf100;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-bigrig" class="eloji-bigrig"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-bigrig"
                                                                           class="eloji-bigrig"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-bigrig"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf105;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-blog"
                                                                         class="eloji-blog"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-blog"
                                                                           class="eloji-blog"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-blog"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf106;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-boat"
                                                                         class="eloji-boat"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-boat"
                                                                           class="eloji-boat"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-boat"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf107;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                         class="eloji-box-open"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-box-open"
                                                                           class="eloji-box-open"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-box-open"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf108;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                         class="eloji-box-open-alt"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-box-open-alt"
                                                                           class="eloji-box-open-alt"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-box-open-alt"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf109;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-calc"
                                                                         class="eloji-calc"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-calc"
                                                                           class="eloji-calc"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-calc"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10a;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                         class="eloji-calc-compare"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-calc-compare"
                                                                           class="eloji-calc-compare"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-calc-compare"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10b;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                         class="eloji-calc-insurance"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-calc-insurance"
                                                                           class="eloji-calc-insurance"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-calc-insurance"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10c;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                         class="eloji-calc-rates"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-calc-rates"
                                                                           class="eloji-calc-rates"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-calc-rates"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10d;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-cart"
                                                                         class="eloji-cart"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-cart"
                                                                           class="eloji-cart"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-cart"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10e;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-caution"
                                                                         class="eloji-caution"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-caution"
                                                                           class="eloji-caution"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-caution"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf10f;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-check"
                                                                         class="eloji-check"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-check" class="eloji-check"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-check"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf110;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                         class="eloji-checklist"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-checklist"
                                                                           class="eloji-checklist"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-checklist"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf111;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                         class="eloji-chillin"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-chillin"
                                                                           class="eloji-chillin"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-chillin"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf112;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-circular"
                                                                         class="eloji-circular"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-circular"
                                                                           class="eloji-circular"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-circular"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf144;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-cloud"
                                                                         class="eloji-cloud"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-cloud" class="eloji-cloud"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-cloud"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf113;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                         class="eloji-cloud-computing"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-cloud-computing"
                                                                           class="eloji-cloud-computing"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-cloud-computing"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf114;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-data"
                                                                         class="eloji-data"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-data"
                                                                           class="eloji-data"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-data"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf115;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                         class="eloji-data-management"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-data-management"
                                                                           class="eloji-data-management"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-data-management"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf116;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-dim"
                                                                         class="eloji-dim"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-dim"
                                                                           class="eloji-dim"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-dim"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf117;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-download"
                                                                         class="eloji-download"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-download"
                                                                           class="eloji-download"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-download"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf118;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-email"
                                                                         class="eloji-email"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-email" class="eloji-email"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-email"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf119;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-excel"
                                                                         class="eloji-excel"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-excel" class="eloji-excel"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-excel"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf145;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                         class="eloji-facebook"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-facebook"
                                                                           class="eloji-facebook"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-facebook"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11a;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-freight"
                                                                         class="eloji-freight"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-freight"
                                                                           class="eloji-freight"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-freight"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf101;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                         class="eloji-freight-rates"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-freight-rates"
                                                                           class="eloji-freight-rates"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-freight-rates"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11b;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                         class="eloji-fuel-empty"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-fuel-empty"
                                                                           class="eloji-fuel-empty"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-fuel-empty"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11c;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                         class="eloji-fuel-full"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-fuel-full"
                                                                           class="eloji-fuel-full"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-fuel-full"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11d;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                         class="eloji-gl-coding"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-gl-coding"
                                                                           class="eloji-gl-coding"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-gl-coding"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11e;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                         class="eloji-google-plus"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-google-plus"
                                                                           class="eloji-google-plus"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-google-plus"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf11f;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                         class="eloji-gpi-history"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-gpi-history"
                                                                           class="eloji-gpi-history"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-gpi-history"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf120;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                         class="eloji-greater-good"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-greater-good"
                                                                           class="eloji-greater-good"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-greater-good"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf121;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-halo"
                                                                         class="eloji-halo"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-halo"
                                                                           class="eloji-halo"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-halo"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf122;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                         class="eloji-handshake"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-handshake"
                                                                           class="eloji-handshake"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-handshake"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf123;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                         class="eloji-happy-mac"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-happy-mac"
                                                                           class="eloji-happy-mac"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-happy-mac"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf124;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-hi"
                                                                         class="eloji-hi"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-hi"
                                                                           class="eloji-hi"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-hi"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf125;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                         class="eloji-insurance"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-insurance"
                                                                           class="eloji-insurance"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-insurance"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf102;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                         class="eloji-intelliship"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-intelliship"
                                                                           class="eloji-intelliship"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-intelliship"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf126;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                         class="eloji-linkedin"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-linkedin"
                                                                           class="eloji-linkedin"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-linkedin"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf127;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                         class="eloji-logistics"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-logistics"
                                                                           class="eloji-logistics"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-logistics"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf128;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                         class="eloji-money-bag"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-money-bag"
                                                                           class="eloji-money-bag"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-money-bag"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf129;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-mouse"
                                                                         class="eloji-mouse"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-mouse" class="eloji-mouse"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-mouse"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf12a;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                         class="eloji-negotiation"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-negotiation"
                                                                           class="eloji-negotiation"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-negotiation"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf103;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-network"
                                                                         class="eloji-network"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-network"
                                                                           class="eloji-network"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-network"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf12b;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-news"
                                                                         class="eloji-news"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-news"
                                                                           class="eloji-news"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-news"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf143;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-noggin" class="eloji-noggin"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-noggin"
                                                                           class="eloji-noggin"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-noggin"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf12c;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                         class="eloji-paper-audit"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-paper-audit"
                                                                           class="eloji-paper-audit"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-paper-audit"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf12e;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                         class="eloji-paper-sign"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-paper-sign"
                                                                           class="eloji-paper-sign"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-paper-sign"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf12f;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-payment"
                                                                         class="eloji-payment"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-payment"
                                                                           class="eloji-payment"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-payment"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf130;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                         class="eloji-payment-alt"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-payment-alt"
                                                                           class="eloji-payment-alt"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-payment-alt"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf131;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-phone"
                                                                         class="eloji-phone"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-phone" class="eloji-phone"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-phone"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf132;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                         class="eloji-phone-alt"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-phone-alt"
                                                                           class="eloji-phone-alt"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-phone-alt"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf133;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                         class="eloji-pie-chart"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-pie-chart"
                                                                           class="eloji-pie-chart"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-pie-chart"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf134;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                         class="eloji-piggybank"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-piggybank"
                                                                           class="eloji-piggybank"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-piggybank"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf135;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                         class="eloji-piggybank-alt"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-piggybank-alt"
                                                                           class="eloji-piggybank-alt"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-piggybank-alt"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf136;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-pin"
                                                                         class="eloji-pin"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-pin"
                                                                           class="eloji-pin"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-pin"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf141;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-plane"
                                                                         class="eloji-plane"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-plane" class="eloji-plane"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-plane"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf137;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-rain"
                                                                         class="eloji-rain"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-rain"
                                                                           class="eloji-rain"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-rain"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf138;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                         class="eloji-ready-pay"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-ready-pay"
                                                                           class="eloji-ready-pay"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-ready-pay"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf139;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                         class="eloji-reporting"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-reporting"
                                                                           class="eloji-reporting"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-reporting"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf13a;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                         class="eloji-schedule"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-schedule"
                                                                           class="eloji-schedule"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-schedule"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf13b;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                         class="eloji-spot-quote"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-spot-quote"
                                                                           class="eloji-spot-quote"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-spot-quote"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf13c;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                         class="eloji-starburst"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-starburst"
                                                                           class="eloji-starburst"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-starburst"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf147;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                         class="eloji-traffic"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-traffic"
                                                                           class="eloji-traffic"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-traffic"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf13e;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-train"
                                                                         class="eloji-train"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-train" class="eloji-train"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-train"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf13f;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                         class="eloji-twitter"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-twitter"
                                                                           class="eloji-twitter"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-twitter"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf140;"/>
        </div>
    </div>

    <div class="glyph">
        <div class="preview-glyphs">
            <span class="step size-12"><span class="letters">Pp</span><i id="eloji-water"
                                                                         class="eloji-water"></i></span><span
                    class="step size-14"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-16"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-18"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-21"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-24"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-36"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-48"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-60"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span><span
                    class="step size-72"><span class="letters">Pp</span><i id="eloji-water" class="eloji-water"></i></span>
        </div>
        <div class="preview-scale">
            <span class="step">12</span><span class="step">14</span><span class="step">16</span><span class="step">18</span><span
                    class="step">21</span><span class="step">24</span><span class="step">36</span><span
                    class="step">48</span><span class="step">60</span><span class="step">72</span>
        </div>
        <div class="usage">
            <input class="class" type="text" readonly="readonly" value=".eloji-water"/>
            <input class="point" type="text" readonly="readonly" value="&amp;#xf142;"/>
        </div>
    </div>

</div>
@stop