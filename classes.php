<img src="<?php echo base_url(); ?>assets/image/yogamat.jpg" alt="yogamatImage" style="float: left;">
<p class="yclass">
<h2>
	Yoga Classes
</h2>
<?php foreach($classes as $row){ ?>
<h4 style="margin-bottom: 0px" class="afterflt">
	<?php echo $row['classname'];?>
</h4>
<p class="yclassp">
	<?php echo $row['description']; ?>
</p>

<?php } ?>