<?php

function is15charHexString($string) {
	return strlen($string) == 15 && ctype_xdigit($string);
}

?>