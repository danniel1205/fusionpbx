<?php

	//application details
		$apps[$x]['name'] = "Call Block";
		$apps[$x]['uuid'] = "9ed63276-e085-4897-839c-4f2e36d92d6c";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
// 		$apps[$x]['description']['en-us'] = "A tool to block incoming numbers.";
		$apps[$x]['description']['en-us'] = "一种阻止来电号码的工具。";
		$apps[$x]['description']['zh-cn'] = "一种阻止来电号码的工具。";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Ein Werkzeug um eingehende Rufnummern zu sperren.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Ein Werkzeug um eingehende Rufnummern zu sperren.";
		$apps[$x]['description']['es-cl'] = "Una herramineta para bloquear números entrantes";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Outil pour bloquer les numéro d'appelant";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "Uma ferramenta para bloquear números que entram.";
		$apps[$x]['description']['pt-pt'] = "Uma ferramenta para bloquear números indesejados";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e8356e52-3d18-4da5-93b1-9b2e08878982";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "call_block";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "recent_call_limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "50";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number of recent calls to show.";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "call_block_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "29295c90-b1b9-440b-9c7E-c8363c6e8975";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_block_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_block_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "call_block_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_call_block";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "blocked_caller_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_name";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "blocked_caller_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_number";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "blocked_caller_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the full phone number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_count";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "blocked_call_count";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Number of calls.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_action";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "blocked_call_action";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Action for call.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "date_added";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Date/Time number was added.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "call_block_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "block_call_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enable/disable blocking the call.";

?>
