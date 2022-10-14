<h1>Get in touch</h1>
<?php

echo validation_errors();
echo form_open('contact/submit');

echo form_label('Name');
$attributes  = array(
						'placeholder' => "Enter Your full name here",
						'autocomplete' => 'off' 
					);
echo form_input('full_name', $name, $attributes);

echo form_label('Email');
$attributes = array(
						'placeholder' => "Enter your email address",
						'autocomplete' => "off"
						// 'required' => "required",
					);
echo form_input('email', $email, $attributes);

echo form_label('Message Description');

$attributes  = array(
						'placeholder' => "Enter your message here",
						'rows' => 4 
					);
echo form_textarea('desc', $desc, $attributes);

echo form_submit('submit', 'Submit');
$attributes  = array(
						'class' => "button alt" );
echo anchor( BASE_URL, 'Cancel', $attributes);


echo form_close();