# CodeIgniter-Message

The Message library (originally based on http://codeigniter.com/wiki/Message/)
is a fairly straightforward Codeigniter library that makes it easier
to set different type of messages such as errors and notifications. Traditionally you'd
use $this->session->set_flashdata() but this can result in a lot of code for something
so simple.

## Configuration

All configuration is optional. It gives you a handy way of setting default values for 
your message container, the html element you want to wrap your individual messages with, 
a default view to load your message in, or load a specific view based on a certain 
message group. If the configuration file is not present nor any views are present, the 
message library will just output the message without any markup. This might be preferable
when passing messages to javascript plugins, like Growl.

what you would like to wrap your individual messages with

	$config['message_prefix'] = '<p>';
	$config['message_suffix'] = '</p>';

what you would like the container to be of your messages

	$config['wrapper_prefix'] = '<div class="message">';
	$config['wrapper_suffix'] = '</div>';

the folder to search for partial views with trailing slash
	
	$config['message_folder'] = 'messages/';

the default view to format messages
	
	$config['message_view'] = 'message_view';`
	
## Basic Functions

Set a message

	$this->message->set('notice','this is just a notice');
 
Set an array of messages

	$data = array(
		 		'message'=>'this is just a message',
		  		'notice'=>'this is just a notice'
 			);

	$this->message->set($data);

Return all messages

	$messages = $this->message->get();

Return a group of messages

	$messages = $this->message->get('notice');

Show all messages

	echo $this->message->display();

Show a group of messages

	echo $this->message->display('notice');

## Automagic functions

If you have a message_folder defined in the config, any message key that matches a view will be autoloaded:

	$this->message->set('notice','this is just a notice');

will autoload the file views/message_folder_name/notice_view.php
The basic layout for any view looks like this:

	foreach ($messages as $message):
		  echo $message;
	endforeach;
		
This gives you freedom to style any message any way you want from within a view.

## Installation

Drop the libraries/Message.php file into your application/libraries folder.

## Requirements

* Codeigniter 1.7.X or newer

## License

This library is licensed under the MIT license, a copy of this license can be found in the
file called "LICENSE".

## Extra

If you happen to encounter a bug or would like to request a feature you can use the
bugtracker provided by GitHub or send an Email to github@isset.nl.
