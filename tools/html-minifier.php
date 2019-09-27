<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/html_minifier.css" media="all"/>
    <?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php $warning = "";
                if ($tool['complete'] != 1) {
                    $warning = " <i class='fa fa-exclamation-triangle text-warning' title='Still in development.'></i> ";
                }
                echo ($tool['name'] . $warning) ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="well well-sm">
        <form class="form-horizontal html_minifier_form" action="html-minifier.php#" method="post">
            <fieldset>

                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea style="height:380px;" class="form-control" id="html" name="html"></textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-12">
                        <button id="minify" name="minify" class="btn btn-success">Minify</button>
                        <button id="options" name="options" class="btn btn-primary">Options</button>
                        <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm data_options" style="display:none;">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="optionsList">
                            <li><label><input type="checkbox" id="remove-comments" checked>&nbsp;Remove comments</label><div style="color:#666;padding:5px;">Conditional comments are left intact, but their inner (insignificant) whitespace is removed.</div></li>
                            <li><label><input type="checkbox" id="remove-comments-from-cdata" checked>&nbsp;Also remove comments from scripts and styles</label></li>
                            <li><label><input type="checkbox" id="remove-cdata-sections-from-cdata" checked>&nbsp;Remove CDATA sections from scripts and styles</label></li>
                            <li><label><input type="checkbox" id="collapse-whitespace" checked>&nbsp;Collapse whitespace</label></li>
                            <li><label><input type="checkbox" id="conservative-collapse">&nbsp;Conservative whitespace collapse</label></li>
                            <li><label><input type="checkbox" id="collapse-boolean-attributes" checked>&nbsp;Collapse boolean attributes</label><div style="color:#666;padding:5px;">(e.g. <code>&lt;... disabled="disabled"&gt; &rarr; &lt;... disabled&gt;</code>)</div></li>
                            <li><label><input type="checkbox" id="remove-attribute-quotes">&nbsp;Remove attribute quotes</label><div style="color:#666;padding:5px;">(e.g. <code>&lt;p class="foo"&gt; &rarr; &lt;p class=foo&gt;</code>)</div></li>
                            <li><label><input type="checkbox" id="remove-redundant-attributes" checked>&nbsp;Remove redundant attributes/values</label></li>
                            <li><label><input type="checkbox" id="use-short-doctype" checked>&nbsp;Use short doctype</label></li>
                            <li><label><input type="checkbox" id="remove-empty-attributes" checked>&nbsp;Remove empty (or blank) attributes</label><div style="color:#666;padding:5px;">Valid attributes are: class, id, style, title, lang, dir, event attributes</div></li>
                            <li><label><input type="checkbox" id="remove-optional-tags">&nbsp;Remove optional tags</label><div style="color:#666;padding:5px;">Currently, only:<code>&lt;/html></code>,<code>&lt;/head></code>,<code>&lt;/body></code>,<code>&lt;/option></code><code>&lt;/thead></code>,<code>&lt;/tbody></code>,<code>&lt;/tfoot></code>, and <code>&lt;/tr></code></div></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="optionsList">
                            <li><label><input type="checkbox" id="remove-ignored">&nbsp;Remove ignored tags</label><div style="color:#666;padding:5px;">Currently, only tags starting and ending with:<code>&lt;% ... %></code> and <code>&lt;? ... ?></code></div></li>
                            <li><label><input type="checkbox" id="remove-empty-elements">&nbsp;Remove empty elements</label><div style="color:#666;padding:5px;">All except <code>textarea</code></div></li>
                            <li><label><input type="checkbox" id="remove-script-type-attributes">&nbsp;Remove <code>type="text/javascript"</code> from <code>script</code>'s</label><div style="color:#666;padding:5px;">Values other than "text/javascript" (e.g. "text/vbscript") are left intact.</div></li>
                            <li><label><input type="checkbox" id="remove-style-link-type-attributes">&nbsp;Remove <code>type="text/css"</code> from <code>style</code>'s and <code>link</code>'s</label><div style="color:#666;padding:5px;">Values other than "text/css" (e.g. "text/plain" or "application/atom+xml") are left intact.</div></li>
                            <li><label><input type="checkbox" id="case-sensitive">&nbsp;Case-sensitive attributes</label><div style="color:#666;padding:5px;">Useful when minifying SVG</div></li>
                            <li><label><input type="checkbox" id="keep-closing-slash">&nbsp;Keep closing slash</label><div style="color:#666;padding:5px;">Useful when minifying SVG</div></li>
                            <li><label><input type="checkbox" id="minify-js" checked>&nbsp;Minify JS</label></li>
                            <li><label><input type="checkbox" id="minify-css" checked>&nbsp;Minify CSS</label></li>
                            <li><label><input type="checkbox" id="minify-urls" checked>&nbsp;Minify URLs</label><div style="color:#666;padding:5px;">Convert absolute URLs to relative</div><label>Site URL: <input class="form-control" type="text" id="minify-urls-siteurl"></label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm data_out" style="display:none;">
                <form class="form-horizontal html_minifier_form" action="html-minifier.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:380px;" class="form-control" id="out" name="out"></textarea>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/uglify.js"></script>
<script src="js/relateurl-browser.js"></script>
<script src="js/cleancss-browser.js"></script>
<script src="js/htmlminifier.min.js"></script>
<script src="js/html_minifier.js"></script>
</body>
</html>