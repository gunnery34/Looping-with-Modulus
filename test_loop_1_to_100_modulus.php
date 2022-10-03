<?php

for ($i=1; $i <= 100; $i++) {
	if ($i % 3 == 0 && $i % 5 == 0) {
		echo 'TigaLima <br />';
	} else if ($i % 3 == 0) {
		echo 'Tiga <br />';
	} else if ($i % 5 == 0) {
		echo 'Lima <br />';
	} else {
		echo $i .'<br />';
	}
}
