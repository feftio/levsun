<?php

return
[
	'id([0-9]{0,10}$)' => 'site/user/$1',
	'ticket([0-9]{0,10}$)' => 'site/ticket/$1',
	'reg' => 'site/reg',
	'about' => 'site/about',
	'contact' => 'site/contact',
	'doc' => 'site/doc',
	'' => 'site/main'
];

// nameController/nameAction/param[1].../param[2].../param[n]