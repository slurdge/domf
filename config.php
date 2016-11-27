<?php
$config = [
    'max_upload_size' => 16*1024*1024,
	'upload_path' => './',
	'shorten_url' => true,
	'base_url' => 'http://localhost:8000/'
];

$config['allowed_exts'] = [
    'jpg' => 'image/jpeg',
    'png' => 'image/png',
    'gif' => 'image/gif',
    'txt' => 'text/plain'];
?>