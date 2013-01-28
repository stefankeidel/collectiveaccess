<?php 

if(sizeof($active_criteria)>0){
	print "<h2>Active restrictions:</h2>";
	foreach($active_criteria as $facet){
		print "<div><b>".$facet['label_singular'].": </b>"; // this has to be handled differently for "has" facets which have no real value
		foreach($facet['criteria'] as $criterion){
			print l($criterion['label'],COLLECTIVEACCESS_DEFAULT_SEARCH_MENU_PATH."/".$entity."/".$criterion['url_part_without_this']);
		}
		
		print "</div>";
	}
}

?>

<?php foreach($available_facets as $facet_name => $facet): ?>

<h2><?php print $facet["label_plural"]; ?></h2>

<?php 

	if($facet['group_mode'] == "none" || !$facet['group_mode']){
		foreach($facet['content'] as $term){
			print "<h4>".l($term['label'],COLLECTIVEACCESS_DEFAULT_SEARCH_MENU_PATH."/".$entity."/".$active_criteria_url_part."/".$facet_name."\\".$term['id'])."</h4>";
		}
	} else if ($facet['group_mode'] == 'alphabetical') {
		foreach($facet['content'] as $group => $group_content){
			print "<h3>".$group."</h3>";
			foreach($group_content as $term){
				print "<h4>".l($term['label'],COLLECTIVEACCESS_DEFAULT_SEARCH_MENU_PATH."/".$entity."/".$active_criteria_url_part."/".$facet_name."\\".$term['id'])."</h4>";
			}
		}
	}

?>
	

<?php endforeach; ?>