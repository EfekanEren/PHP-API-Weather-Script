<?php

$city_name = 'STADTNAMEs';
$api_key = 'API KEY';

$api_url = 'API URL'.$api_key.'&units=imperial';

stream_context_set_default(['http'=>['proxy'=>'PROXY']]);
$weather_data = file_get_contents($api_url);
$weather_data = json_decode($weather_data);

echo "<pre>";
print_r ($weather_data->list);
echo "</pre>";

?>