<div class="header">
    <div class="container-fluid">
        <div class="row" style="background: var(--mc-blue);">
            <div class="col-md-12">
                <div class="nav_bar">
                    <div class="" style="background: white; width: 60px; margin-top: -10px; margin-bottom: -10px">
                        <div class="header_img">
                            <a href="../" style="display:block;width:200px;height:60px;"></a>
                        </div>
                    </div>
                    <div class="header_nav">
                        <ul class="nav_ul">
                            <li><a href="../tools"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="#all_tools"><i class="fa fa-cog"></i> All Tools</a></li>
                            <?php
                            if ($tool['youtube_howto_video']) {
                                echo "
                                <li><a href=\"" . $tool['youtube_howto_video'] . "\" target='_blank' title=\"How to use " . $tool['name'] . "\"><i class='fa fa-question'></i> How to Use</a></li>
                                ";
                            }

                            if ($tool['youtube_code_video']) {
                                echo "
                                <li><a href=\"" . $tool['youtube_code_video'] . "\" target='_blank' title=\"Video showing how " . $tool['name'] . " was built\"><i class='fa fa-code'></i> Code Video</a></li>
                                ";
                            }

                            if ($tool['blog_post']) {
                                echo "
                                <li><a href=\"" . $tool['blog_post'] . "\" target='_blank' title=\"Blog post on building " . $tool['name'] . "\"><i class='fab fa-wordpress'></i> Blog Post</a></li>
                                ";
                            }


                            ?>
                            <!--                            <li><a href="../samples.php">Samples</a></li>-->
                            <li><a href="../tools/contact-us.php"><i class="fa fa-envelope"></i> Contact Me</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!--            todo put add container here
            <script async type="text/javascript"-->
            <!--                    src="http://cdn.carbonads.com/carbon.js?serve=CKYIE5QW&amp;placement=beautifytoolscom"-->
            <!--                    id="_carbonads_js"></script>-->
        </div>
    </div>
</div>