<img src="<?php echo base_url(); ?>assets/image/yogalounge.jpg" alt="yogaloungeImage" style="float: left;">
<p class="yschedule">
<h2>
	Yoga Schedule
</h2>
Mats, blocks and blankets provided. Please arrive 10 minutes before your class begins. Relax in our Serenity Lounge before or after the class.
<?php foreach($days as $row){ ?>
<h3 class="yschedulep">
	<?php echo $row['daysname']; ?>
</h3>
<ul style="padding-left: 300px">
	<?php foreach($schedule[$row['daysid']] as $s){ ?>
	<li>
		<?php echo $s;?>
	</li>
	<?php } ?>
</ul>
<?php } ?>

</p>