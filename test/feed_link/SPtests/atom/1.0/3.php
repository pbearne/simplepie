<?php

$data = <<<EOD
<feed xmlns="http://www.w3.org/2005/Atom">
	<link href="http://example.com/" rel="http://www.iana.org/assignments/relation/alternate"/>
</feed>
EOD;

$expected = 'http://example.com/';

?>