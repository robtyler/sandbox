<h1>sandbox.robtyler.dev.globalmaxer.com</h1>
<?php

// Load FirePHP so we an do a test console log
require ( dirname(__FILE__) . '/3rdparty/FirePHPCore-0.3.2/lib/FirePHPCore/fb.php' );

$objFirePHP	= FirePHP::getInstance(true);
$objFirePHP->log ( 'Variable output goes here... for example...', 'FirePHP is working!' );
$arrTest		= array ( 'i' => 10, 'j' => 20 );
$objFirePHP->log ( $arrTest, 'Iterators' );
// Send file and line information using a trace label
$objFirePHP->trace ( 'Trace Label' );
// Send different priority styles messages
$objFirePHP->log ( 'Plain Message' );
$objFirePHP->info ( 'Info Message' );
$objFirePHP->warn ( 'Warn Message' );
$objFirePHP->error ( 'Error Message' );  


$arrDir = scandir ( '.' );
echo '<ul>';

// Remvoe the current and parent diectories
unset ( $arrDir[0] );
unset ( $arrDir[1] );


foreach ( $arrDir as $intKey => $strFilename )
{
	if ( !strstr ( $strFilename , '.bak' ) )
	{
		echo "<li><a href=\"{$strFilename}\">{$strFilename}</a></li>";
	}
}

echo '</ul>';
