<?php
$tool_groups = $connection->query("SELECT * FROM tools_groups ORDER BY tools_count DESC ");
$groups = [];
while ($row = mysqli_fetch_assoc($tool_groups)) {
    $groups[] = $row;
}
$full_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$title = $tool['title'];

//function add_share_counter($media) {
//
//}

?>
<div class="row" id="all_tools">
    <div class="col-md-12">
        <div class="row" style="overflow:hidden;">
            <div class="text-center">
                <div id="share-buttons">
                    <!--                    <script>-->
                    <!--                        function add_share_counter(media) {-->
                    <!--                            var share_counts= --><?php //add_share_counter(media);?>
                    <!--//                                console.log(share_counts)-->
                    <!--//                        }-->
                    <!--//                    </script>-->

                    <span><b>Share <?php echo($tool['name']); ?></b></span>

                    <!-- Buffer -->
                    <a href="https://bufferapp.com/add?url=<?php echo($full_url) ?>&amp;text=<?php echo($title); ?>"
                       target="_blank">
                        <img src="img/share_icon/buffer.png" alt="Buffer"/>
                    </a>

                    <!-- Digg -->
                    <a href="http://www.digg.com/submit?url=<?php echo($full_url) ?>" target="_blank">
                        <img src="img/share_icon/diggit.png" alt="Digg"/>
                    </a>

                    <!-- Email -->
                    <a href="mailto:?Subject=<?php echo($title); ?>&amp;Body=<?php echo($tool['description'] . ' ' . $full_url); ?>">
                        <img src="img/share_icon/email.png" alt="Email"/>
                    </a>

                    <!-- Facebook -->
                    <a href="http://www.facebook.com/sharer.php?u=<?php echo($full_url); ?>" target="_blank">
                        <img src="img/share_icon/facebook.png" alt="Facebook"/>
                    </a>

                    <!-- Google+ -->
                    <!--                    <a href="https://plus.google.com/share?url=-->
                    <?php //echo($full_url);?><!--" target="_blank">-->
                    <!--                        <img src="img/share_icon/google.png" alt="Google" />-->
                    <!--                    </a>-->

                    <!-- LinkedIn -->
                    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo($full_url); ?>"
                       target="_blank">
                        <img src="img/share_icon/linkedin.png" alt="LinkedIn"/>
                    </a>

                    <!-- Pinterest -->
                    <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
                        <img src="img/share_icon/pinterest.png" alt="Pinterest"/>
                    </a>

                    <!-- Print -->
                    <a href="javascript:;" onclick="window.print()">
                        <img src="img/share_icon/print.png" alt="Print"/>
                    </a>

                    <!-- Reddit -->
                    <a href="http://reddit.com/submit?url=<?php echo($full_url); ?>&amp;title=<?php echo($title); ?>"
                       target="_blank">
                        <img src="img/share_icon/reddit.png" alt="Reddit"/>
                    </a>

                    <!-- StumbleUpon-->
                    <a href="http://www.stumbleupon.com/submit?url=<?php echo($full_url); ?>&amp;title=<?php echo($title); ?>"
                       target="_blank">
                        <img src="img/share_icon/stumbleupon.png" alt="StumbleUpon"/>
                    </a>

                    <!-- Tumblr-->
                    <a href="http://www.tumblr.com/share/link?url=<?php echo($full_url); ?>&amp;title=<?php echo($title); ?>"
                       target="_blank">
                        <img src="img/share_icon/tumblr.png" alt="Tumblr"/>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/share?url=<?php echo($full_url); ?>&amp;text=<?php echo($tool['name']); ?>&amp;hashtags=devtools"
                       target="_blank">
                        <img src="img/share_icon/twitter.png" alt="Twitter"/>
                    </a>

                    <!-- VK -->
                    <a href="http://vkontakte.ru/share.php?url=<?php echo($full_url); ?>" target="_blank">
                        <img src="img/share_icon/vk.png" alt="VK"/>
                    </a>

                    <!-- Yummly -->
                    <a href="http://www.yummly.com/urb/verify?url=<?php echo($full_url); ?>&amp;title=<?php echo($title); ?>"
                       target="_blank">
                        <img src="img/share_icon/yummly.png" alt="Yummly"/>
                    </a>

                </div>
                <br>
            </div>

            <?php
            foreach ($groups as $group) {
                if ($group['display'] != 1) {
//                    Don't show
                    continue;
                }
                $group_id = $group['id'];
                $group_tools = $connection->query("SELECT * FROM tools WHERE tools_group_id=" . $group_id . " ORDER BY name ASC");
                $tools = [];
                while ($item = mysqli_fetch_assoc($group_tools)) {
                    $tools[] = $item;
                }
                $tools_count = count($tools);
                $connection->query("UPDATE tools_groups SET tools_count = '$tools_count' WHERE id = $group_id");

                echo(
                    "<div class=\"col-md-4\">
                        <div class=\"app_cat_h\">" . $group['name'] . "</div>
                            <ul class=\"app_cat_ul\">");
                foreach ($tools as $tool) {
                    $warning = "";
                    if ($tool['complete'] != 1) {
                        continue;
//                        $warning = " <i class='fa fa-exclamation-triangle text-warning' title='Still in development.'></i> ";
                    }
                    echo("<li><a href=\"" . $tool['url'] . "\">" . $tool['name'] . $warning . "</a></li>");
                }
                echo("</ul>
                    </div>");
            }
            ?>
        </div>
    </div>
</div>
