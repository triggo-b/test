<?php
	$weatherInfo = array(
                    'ownCity'   => 'Moscow',
                    'pressure'  => '10000',
                    'windSpeed' => '34'
            );
			
	foreach ($weatherInfo as $key => $val) {
            echo $val;
            //echo $val['pressure'];
            //echo $val['windSpeed'];
        }
?>