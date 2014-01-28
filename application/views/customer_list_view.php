<div id="left-container" class="col-md-2">
	<ul>
	<?php 
	foreach($customers as $entry)
	{
		$url = base_url('/index.php/customer/detail_view');
		$url = $url."/".$entry->id;
	?>
		<li> <a href="<?php echo $url; ?>"><?php echo $entry->title; ?></a></li>

	<?php 
	}
	?>
	</ul>
</div> <!-- left-container -->