<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/online_code_editor.css" media="all"/>
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
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-inline text-left">
                    <fieldset>

                        <div class="form-group buttons_div">
                            <div class="col-md-12">
                                <ul class="nav_ul ul_buttons">
                                    <li><a id="load_url" href="online-code-editor.php#">Load&nbsp;Url</a></li>
                                    <li><a id="browse" href="online-code-editor.php#">Browse</a></li>
                                    <li><a id="set_language" href="online-code-editor.php#">Set&nbsp;Language</a></li>
                                    <li><a id="editor_options" data-toggle="modal" data-target="#editor_options_modal" data-backdrop="false" href="online-code-editor.php#">Editor&nbsp;Options</a></li>
                                    <li><a id="download" href="online-code-editor.php#">Download</a></li>
                                    <li><a id="clear" href="online-code-editor.php#">Clear</a></li>
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
                <!-- Modal -->
                <div class="modal fade" id="set_language_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Set Language</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <fieldset>

                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="language">Language</label>
                                            <div class="col-md-10">
                                                <select id="language" name="language" class="form-control">
                                                </select>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button data-dismiss="modal" id="set" name="set" class="btn btn-success">Set</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="code1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="row">-->
    <!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/online_code_editor.js"></script>

</body>
</html>