<p class="ycontact">
<h2>
	Contact Path of Light Yoga Studio
</h2>
	Required information is marked with an asterisk (*).
</p>

<?php 

echo form_open('');?>
<h4><?php echo form_label('* Name:');
echo form_input(array('class'=>'input','name'=>'name'), set_value('name'));
echo form_error('name','<span class="error">','</span>');?></h4>
<h4><?php echo form_label('* Email:');
echo form_input(array('class'=>'input','name'=>'Email'), set_value('Email'));
echo form_error('Email','<span class="error">','</span>');?></h4>
<h4><?php echo form_label('* Comments:');
echo form_textarea(array('name'=>'comment', 'rows'=>'2', 'cols'=>'20'), set_value('comment'));
echo form_error('comment','<span class="error">','</span>');?></h4>
<h4><?php echo form_label('');
echo form_submit(array('value'=>'Send Now'));?></h4>
<?php echo form_close();

?>

<br><br><br><br><br>
