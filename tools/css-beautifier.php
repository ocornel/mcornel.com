<!DOCTYPE html>
<html lang="en">
<head>
<!--    todo get title, description and guide from request url -->
    <title>Online CSS Beautifier - Consult mCornel</title>
    <meta name="description"
          content="Beautify css code with online css beautifier. Format your dirty, minified css code and make it more readable using our online css beautifier, formatter, prettifier."/>
    <link rel="stylesheet" type="text/css" href="css/css_beautifier.css" media="all"/>
</head>
<?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.html'); ?>
<!--PAGE CONTENT-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>CSS Beautifier</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p class="text-center">Beautify css code using online css beautifier. Enter dirty, minified css code to beautify, format, prettify and make it more readable. The editor has the option to choose different themes and font sizes. The syntax highlighter, auto completion, code errors and warnings are also enabled to write code more easily.</p>
            <div class="well well-sm">
                <form class="form-inline text-left">
                    <fieldset>

                        <div class="form-group buttons_div">
                            <div class="col-md-12">
                                <ul class="nav_ul ul_buttons">
                                    <li><a id="load_url" href="css-beautifier.php#">Load&nbsp;Url</a></li>
                                    <li><a id="browse" href="css-beautifier.php#">Browse</a></li>
                                    <li><a id="beautify_css" href="css-beautifier.php#">Beautify&nbsp;css</a></li>
                                    <li><a id="minify_css" href="css-beautifier.php#">Minify&nbsp;css</a></li>
                                    <li><a id="editor_options" data-toggle="modal" data-target="#editor_options_modal" data-backdrop="false" href="css-beautifier.php#">Editor&nbsp;Options</a></li>
                                    <li><a id="download" href="css-beautifier.php#">Download</a></li>
                                    <li><a id="clear" href="css-beautifier.php#">Clear</a></li>
                                </ul>
                            </div>
                        </div>
                        <input style="display:none;" id="file" name="file" class="btn btn-default" type="file">

                    </fieldset>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="url_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Enter Url</h4>
                            </div>
                            <div class="modal-body">
                                <input id="url" name="url" type="text" placeholder="Enter full url" class="form-control input-md">
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" id="load" name="load" class="btn btn-success">Load</button>
                                <button data-dismiss="modal" id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="msg_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Message</h4>
                            </div>
                            <div class="modal-body">
                                <p class="text-center" id="msg"></p>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" id="ok_msg" name="ok_msg" class="btn btn-success">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="editor_options_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Editor Options</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <fieldset>

                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="themes">Themes</label>
                                            <div class="col-md-10">
                                                <select id="themes" name="themes" class="form-control">
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="font_size">Font Size</label>
                                            <div class="col-md-10">
                                                <select id="font_size" name="font_size" class="form-control">
                                                    <option value="6">6px</option>
                                                    <option value="7">7px</option>
                                                    <option value="8">8px</option>
                                                    <option value="9">9px</option>
                                                    <option value="10">10px</option>
                                                    <option value="11">11px</option>
                                                    <option value="12">12px</option>
                                                    <option value="13">13px</option>
                                                    <option value="14">14px</option>
                                                    <option value="15">15px</option>
                                                    <option value="16">16px</option>
                                                    <option value="17">17px</option>
                                                    <option value="18">18px</option>
                                                    <option value="19">19px</option>
                                                    <option value="20">20px</option>
                                                    <option value="21">21px</option>
                                                    <option value="22">22px</option>
                                                    <option value="23">23px</option>
                                                    <option value="24">24px</option>
                                                    <option value="25">25px</option>
                                                    <option value="26">26px</option>
                                                    <option value="27">27px</option>
                                                    <option value="28">28px</option>
                                                    <option value="29">29px</option>
                                                    <option value="30">30px</option>
                                                    <option value="31">31px</option>
                                                    <option value="32">32px</option>
                                                    <option value="33">33px</option>
                                                    <option value="34">34px</option>
                                                    <option value="35">35px</option>
                                                    <option value="36">36px</option>
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" id="ok" name="ok" class="btn btn-success">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 div_code1">
                        <div class="h_text">Enter css here:<button id="max_code1" class="btn btn-toolbar btn-sm" title="maximize" style="position:absolute;right:120px;"><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span></button><button id="sample" class="btn btn-toolbar btn-sm" title="sample data" style="position:absolute;right:85px;"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span></button><button id="copy_data1" class="btn btn-toolbar btn-sm" style="position:absolute;right:50px;"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></button><button id="clear_code1" class="btn btn-toolbar btn-sm" title="clear" style="position:absolute;right:15px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div>
                        <div id="code1"></div>
                    </div>
                    <div class="col-md-6 div_code2">
                        <div class="h_text">Results:<button id="max_code2" class="btn btn-toolbar btn-sm" title="maximize" style="position:absolute;right:85px;"><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span></button><button id="copy_data2" class="btn btn-toolbar btn-sm" style="position:absolute;right:50px;"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></button><button id="clear_code2" class="btn btn-toolbar btn-sm" title="clear" style="position:absolute;right:15px;"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></div>
                        <div id="code2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/zclip/jquery.zclip.min.js"></script>
<script src="js/ace/src-min-noconflict/ace.js"></script>
<script src="js/ace/src-min-noconflict/ext-language_tools.js"></script>
<script src="js/ace/src-min-noconflict/ext-themelist.js"></script>
<script src="js/vkbeautify.min.js"></script>
<script src="js/cssbeautify.min.js"></script>
<script src="js/css_beautifier.js"></script></body>
</html>