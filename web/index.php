<h1>sandbox.robtyler.dev.globalmaxer.com</h1>
<?php

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
