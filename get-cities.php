<?php




$country = $_GET["country"];

// Add this to debug
// echo "Selected Country: " . $country;


//Simulate fetching cities based on the selected country
if($country === "india"){
    $cities = array("Mangalore","Bangalore","Mumbai","Chennai","New Delhi");
} elseif($country === "usa"){
    $cities = array("New York","Los Angeles","Chicago","Washington DC","San Francisco");
} elseif($country === "canada"){
    $cities = array("Toronto","Vancouver","Montreal");
} else {
    $cities = array();
}

echo json_encode($cities);
?>