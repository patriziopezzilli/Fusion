<?php
$files = glob(  "contents/fusion/entities". '/*.php' );
foreach ( $files as $file )
	require_once( $file );