<?php 

function generateUniqueID() {
    $prefix = ''; // You can add a prefix if needed

    // Use uniqid to generate a unique ID based on the current timestamp
    $uniqueID = uniqid($prefix, true);

    // Remove the prefix and decimal point, and take the first 6 characters
    $shortID = substr(str_replace([$prefix, '.'], '', $uniqueID), 0, 6);

    // Construct the final ID with the current year
    $currentYear = date('Y');
    $tran_id = $currentYear . '-' . $shortID;

    return $tran_id;
}

// Example usage
$tran_id = generateUniqueID();
echo $tran_id;

$number = "09106556395";
$prefixedNumber = "+63" . substr($number, 1);

echo $prefixedNumber;

