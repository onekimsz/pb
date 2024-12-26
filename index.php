<?php
// Tangkap data postback dari iMonetizeIt
$country = isset($_GET['country']) ? $_GET['country'] : 'Unknown';
$amount = isset($_GET['amount']) ? floatval($_GET['amount']) : 0;
$click_id = isset($_GET['click_id']) ? $_GET['click_id'] : '';

// Log data untuk analisis (optional)
$log_file = 'postback_log.txt';
$log_data = date('Y-m-d H:i:s') . " | Country: $country | Amount: $payout | Click ID: $click_id\n";
file_put_contents($log_file, $log_data, FILE_APPEND);

// Response untuk sistem postback
if (!empty($click_id)) {
    // Simpan ke database atau proses lainnya
    // Contoh response
    echo "Postback received successfully!";
} else {
    echo "Missing Click ID!";
}
?>
