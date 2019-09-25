<?php
$tool_groups = $connection->query("SELECT * FROM tools_groups ORDER BY name ASC");
$groups = [];
while ($row = mysqli_fetch_assoc($tool_groups)) {
    $groups[] = $row;
} ?>
<div class="row" id="all_tools">
    <div class="col-md-12">
        <div class="row" style="overflow:hidden;">

            <?php
            foreach ($groups as $group) {
                $group_tools = $connection->query("SELECT * FROM tools WHERE tools_group_id=" . $group['id'] ." ORDER BY name ASC");
                $tools = [];
                while ($item = mysqli_fetch_assoc($group_tools)) {
                    $tools[] = $item;
                }
                echo(
                    "<div class=\"col-md-4\">
                        <div class=\"app_cat_h\">" . $group['name'] . "</div>
                            <ul class=\"app_cat_ul\">");
                foreach ($tools as $tool) {
                    $warning = "";
                    if ($tool['complete'] != 1) {
                        $warning = " <i class='fa fa-exclamation-triangle text-warning' title='Still in development.'></i> ";
                    }
                    echo("<li><a href=\"" . $tool['url'] . "\">" . $tool['name'] .$warning . "</a></li>");
                }
                echo("</ul>
                    </div>");
            }
            ?>
    </div>
</div>
</div>
