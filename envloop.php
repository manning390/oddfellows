<?php

foreach (range(1,1000) as $i) {
	putenv("TEMP_$i=$i");
}

echo print_r(getenv());