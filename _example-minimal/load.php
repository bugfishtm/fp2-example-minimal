<?php
	/* 	__________ ____ ___  ___________________.___  _________ ___ ___  
		\______   \    |   \/  _____/\_   _____/|   |/   _____//   |   \ 
		 |    |  _/    |   /   \  ___ |    __)  |   |\_____  \/    ~    \
		 |    |   \    |  /\    \_\  \|     \   |   |/        \    Y    /
		 |______  /______/  \______  /\___  /   |___/_______  /\___|_  / 
				\/                 \/     \/                \/       \/  	
							www.bugfish.eu
							
	    Bugfish Fast PHP Page Framework
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
	*/
	if(!is_array($object)) { @http_response_code(404); Header("Location: ../"); exit(); }
	// Simple Theme Header
	hive__simple_start($object,  "Minimal Theme - FP²", '<link rel="icon" type="image/x-icon" href="'._HIVE_URL_REL_.'/_core/_image/favicon.ico">'); ?>
		
	<div class="containerbox">
			<img src='./_core/_image/logo_alpha.png' width='40' style="margin-right: 10px;" > <b style='font-size:36px; padding-bottom: 10px;'>Minimal Theme</b><br />
			You are now looking at the _example-minimal site module!<br /><br />
			<b>Version</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["version"] ?? ''); ?><br />
			<b>Build</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["build"] ?? ''); ?><br />
			<b>Rname</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["rname"] ?? ''); ?><br />
			<b>Name</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["name"] ?? ''); ?><br />
			<b>Short Description</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["short"] ?? ''); ?><br />
			<b>License</b>: <?php echo @htmlspecialchars(@$object["hive_mode"]["license"] ?? ''); ?><br />
	</div>	
		
	<div class="containerbox">
		<b style='font-size: 16px; padding-bottom: 10px;'>Introduction to this Module</b><br />
		Introducing our Minimal theme – a minimalist yet effective template designed for ease of use on our CMS. This theme embodies simplicity at its core, offering a clean and straightforward layout that serves as a perfect starting point for your website. With a focus on clarity and functionality, it provides a basic structure that can be easily customized and expanded upon according to your needs. Enjoy the simplicity and versatility of this theme as you embark on creating your website effortlessly.
	</div>	

	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>Developer Tools</b><br />
			You can enter the developer area below! With the button below you will find access to the developers backend interface, which can also be used in combination with the frontend and the general developer tools. This tools are there to give you a better understanding on how this cms and site modules of the cms are working! It is advised to denie access to this file ./developer.php in productive environments! This file is only to make your development easier and to let you faster switch between available configurated elements.
			<br><br>
			<?php echo "<a href='"._HIVE_URL_REL_."/developer.php' rel='noopener' target='_blank' class='containerbox-btn'>Developer Tools</a><br><br>"; ?>
	</div>		
	
	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>Switch to Administration</b><br />
			To get full insight to all functionalities and administration pages click on the link below. It will guide you to a page where you can activate the administration backend to be seen with your current session!
			<br><br>
			<?php echo "<a href='"._HIVE_URL_REL_."/_core/_action/admin_switch.php' rel='noopener' class='containerbox-btn'>Administrator</a><br><br>"; ?>
	</div>		
	
	<div class="containerbox">
			<b style='font-size: 16px; padding-bottom: 10px;'>How to find Information</b><br />
			You can find documentation and help about this project on my Github Documentation Page Hub (link below). Besides that a documentation is included as site module in the store or module section of the administrator interface!
			<br><br>
			<?php echo "<a href='https://bugfishtm.github.io/fast-php-page' rel='noopener' target='_blank' class='containerbox-btn'>Documentations</a> "; ?>
			<?php echo "<a href='https://bugfishtm.github.io/bugfish-framework' rel='noopener' target='_blank' class='containerbox-btn'>Framework</a><br><br>"; ?>
	</div>	
	
	<div class="containerbox">
		<b style='font-size: 16px; padding-bottom: 10px;'>Credits for this Theme</b><br />
		This theme implemented has been copied out of <a rel="noopener" target="_blank" href="https://github.com/leemunroe/responsive-html-email-template">https://github.com/leemunroe/responsive-html-email-template</a> Github Repository. It is an MIT Licensed Mail Template theme, functioned now to be a Minimal theme you can use in this cms. This is the theme you are seeing now! Many thanks to the autor to create such nice work!
	</div>	
	
	
	<div class="containerbox">
		<p>I wish you the best!<br />Sincerely, Bugfish</p>
	</div>	
	
	<?php // Simple Theme Footer
	hive__simple_end($object, _HIVE_CREATOR_);