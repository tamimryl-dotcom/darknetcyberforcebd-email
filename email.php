<?php
// ১. আপনার টেলিগ্রাম বোটের ইনফরমেশন
$botToken = "8085102393:AAGvAZM767l9_xBX1nqvYM3eR5wR6lWGvjo"; // এখানে BotFather থেকে পাওয়া টোকেন দিন
$chatId = "8641163732";     // এখানে আপনার Chat ID দিন

// ২. কেউ আপনার এই লিঙ্কে ঢুকলে যে মেসেজটি আপনার টেলিগ্রামে যাবে
$message = "🚀 **DarkNet Portal Alert**\n";
$message .= "🌐 Visitor IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
$message .= "⏰ Time: " . date("Y-m-d H:i:s") . "\n";
$message .= "📱 User Agent: " . $_SERVER['HTTP_USER_AGENT'];

// ৩. টেলিগ্রামে ডাটা পাঠানোর ম্যাজিক ফাংশন
$url = "https://api.telegram.org/bot" . $botToken . "/sendMessage";
$data = [
    'chat_id' => $chatId,
    'text' => $message,
    'parse_mode' => 'Markdown'
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context  = stream_context_create($options);
@file_get_contents($url, false, $context);

// ৪. ব্রাউজারে ভিজিটর যা দেখতে পাবে (আপনার সাইটের ফ্রন্টএন্ড)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Gateway</title>
    <style>
        body { background: #0a0a0a; color: #00ff00; font-family: monospace; text-align: center; padding-top: 20%; }
        .matrix { font-size: 20px; animation: blink 1s infinite; }
        @keyframes blink { 0%, 100% { opacity: 1; } 50% { opacity: 0; } }
    </style>
</head>
<body>
    <div class="matrix">> SYSTEM OPERATIONAL. SECURE CONNECTION ESTABLISHED.</div>
</body>
</html>
