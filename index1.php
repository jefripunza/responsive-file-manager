<?php
header("Expires: Mon, 26 Jul 2019 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>
<iframe  style="overflow:hidden;height:100%;width:100%" height="100%" width="100%" frameborder="0"
	src="filemanager/dialog.php?type=0">
</iframe>