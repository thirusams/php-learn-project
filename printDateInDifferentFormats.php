<?php
// Get the current timestamp
$currentTimestamp = time();

// Format 1: Default date format
echo "1. Default Format: " . date("Y-m-d H:i:s", $currentTimestamp) . "\n";

// Format 2: Month/Day/Year
echo "2. Month/Day/Year: " . date("m/d/Y", $currentTimestamp) . "\n";

// Format 3: Day-Month-Year
echo "3. Day-Month-Year: " . date("d-m-Y", $currentTimestamp) . "\n";

// Format 4: Day, Month Year
echo "4. Day, Month Year: " . date("d, F Y", $currentTimestamp) . "\n";

// Format 5: Day of the Week, Month Day, Year
echo "5. Day of the Week, Month Day, Year: " . date("l, F j, Y", $currentTimestamp) . "\n";

// Format 6: Time (12-hour clock)
echo "6. Time (12-hour clock): " . date("h:i:s A", $currentTimestamp) . "\n";

// Format 7: Time (24-hour clock)
echo "7. Time (24-hour clock): " . date("H:i:s", $currentTimestamp) . "\n";

// Format 8: Day of the Year
echo "8. Day of the Year: " . date("z", $currentTimestamp) . "\n";

// Format 9: Week Number of Year
echo "9. Week Number of Year: " . date("W", $currentTimestamp) . "\n";

// Format 10: Unix Timestamp
echo "10. Unix Timestamp: " . $currentTimestamp . "\n";
?>
