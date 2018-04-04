<p class="ycontact">
<h2>
	Contact Path of Light Yoga Studio
</h2>
	Required information is marked with an asterisk (*).
</p>

<?php 

echo form_open('');?>
<h4>
<?php echo form_label('* Name:');
echo form_input(array('class'=>'input','name'=>'name'), set_value('name'));
echo form_error('name','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Email:');
echo form_input(array('class'=>'input','name'=>'email'), set_value('email'));
echo form_error('email','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Password:');
echo form_password(array('class'=>'input','name'=>'password'), set_value('password'));
echo form_error('password','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Phone:');
echo form_input(array('class'=>'input','name'=>'phone'), set_value('phone'));
echo form_error('phone','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Address:');
echo form_textarea(array('name'=>'address', 'rows'=>'2', 'cols'=>'20'), set_value('address'));
echo form_error('address','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Type of Class:');
echo form_dropdown(array('name'=>'classType'), $classes);
echo form_error('classType','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Days:');
echo form_dropdown(array('name'=>'day'), $days);
echo form_error('day','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('* Schedule:');
echo form_dropdown(array('name'=>'schedule'), $times);
echo form_error('schedule','<span class="error">','</span>');?>
	
</h4>

<h4>
<?php echo form_label('');
echo form_submit(array('value'=>'Send Now'));?>
	
</h4>
<?php echo form_close();

?>
