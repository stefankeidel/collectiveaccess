<?php

if(sizeof($results)>0) print "<h2>Results:</h2>\n";

foreach($results as $va_record){
	print "<div><b>".(isset($va_record["idno"]) ? $va_record["idno"] : "").":</b> ";
	print l($va_record["display_label"],COLLECTIVEACCESS_DEFAULT_DETAIL_MENU_PATH."/".$entity."/".$va_record["id"]);
	print "</div>";
}

?>