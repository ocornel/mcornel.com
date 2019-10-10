<div class="header">
    <div class="container-fluid">
        <div class="row" style="background: var(--mc-blue);">
            <div class="col-md-12">
                <div class="nav_bar">
                    <div class="nav-content" style="">
                        <div class="header_img">
                            <a href="../" style="display:block;width:200px;height:60px;"></a>
                        </div>
                    </div>
                    <div class="header_nav">
                        <ul class="nav_ul">
                            <li><a href="../tools"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="../tools/samples.php"><i class="fa fa-code" title="Get sample data to test tools."></i> Samples</a></li>
                            <li><a href="#all_tools"><i class="fa fa-cog"></i> All Tools</a></li>
                            <li class="dropdown">
                                <span class="dropbtn"><i class="fa fa-link"></i> Related
                                    <i class="fa fa-caret-down"></i>
                                </span>
                                <span class="dropdown-content">
                                    <?php

                                    $related_tools_querry = $connection->query("SELECT * FROM tools WHERE tools_group_id=" . $tool['tools_group_id'] ." AND id <> ".$tool['id']." ORDER BY RAND() LIMIT 3;");
                                    $related_tools = [];
                                    while ($item = mysqli_fetch_assoc($related_tools_querry)) {
                                        $related_tools[] = $item;
                                    }

                                    foreach ($related_tools as $related_tool) {
                                        echo ("<a href=\"" . $related_tool['url'] . "\"> <i class='fa fa-angle-double-right'></i> " . $related_tool['name'] . "</a>");
                                    }
                                    $random_tool = mysqli_fetch_assoc($connection->query("SELECT * FROM `tools` WHERE url LIKE '%r.php' AND id <> ".$tool['id']." ORDER BY RAND() LIMIT 1; "));
                                    echo ("<a href=\"" . $random_tool['url'] . "\" style=\"border-top: solid 2px var(--mc-navy);border-bottom: solid 2px var(--mc-navy)\"> <i class='fa fa-random'></i> " . $random_tool['name'] . "</a>");
                                    ?>
                                </span>
                            </li>
                            <style>
                                #how_to_use:hover i:after {
                                    content: ' How To Use';
                                }

                                #code_video:hover i:after {
                                    content: ' Code Video';
                                }

                                #blog_post:hover i:after {
                                    content: ' Blog Post';
                                }
                            </style>
                            <?php
                            if ($tool['youtube_howto_video']) {
                                echo "
                                <li><a href=\"" . $tool['youtube_howto_video'] . "\" target='_blank' title=\"How to use " . $tool['name'] . "\"  id='how_to_use'><i class='fa fa-question'></i></a></li>
                                ";
                            }

                            if ($tool['youtube_code_video']) {
                                echo "
                                <li><a href=\"" . $tool['youtube_code_video'] . "\" target='_blank' title=\"Video showing how " . $tool['name'] . " was built\" id='code_video'><i class='fa fa-code'></i></a></li>
                                ";
                            }

                            if ($tool['blog_post']) {
                                echo "
                                <li><a href=\"" . $tool['blog_post'] . "\" target='_blank' title=\"Blog post on building " . $tool['name'] . "\" id='blog_post'><i class='fab fa-wordpress'></i></a></li>
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

<div style="padding-right: var(--mc-container-fluid-side-margins); padding-left: var(--mc-container-fluid-side-margins);">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!--            todo put add container here -->
<!--<script src="//pushails.com/ntfc.php?p=2853388" data-cfasync="false" async></script>-->
           <script type="text/javascript" src="//deloplen.com/apu.php?zoneid=2852120" async data-cfasync="false"></script>
        </div>
    </div>
</div>
