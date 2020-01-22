<?php
require("../resources/config.php");
# set css file name
$cssFile = "pageA";
# add header template
require("../resources/templates/layout/header.php");
# add side panel template
require("../resources/templates/layout/leftPanel.php");
?>

<!-- view contents -->
<h1>Page A</h1>

<!-- add footer template -->
<?php require("../resources/templates/layout/footer.php") ?>
