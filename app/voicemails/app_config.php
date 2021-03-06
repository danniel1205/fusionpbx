<?php

	//application details
		$apps[$x]['name'] = "Voicemail";
		$apps[$x]['uuid'] = "b523c2d2-64cd-46f1-9520-ca4b4098e044";
		$apps[$x]['category'] = "";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
//		$apps[$x]['description']['en-us'] = "Manage voicemail mailboxes";
		$apps[$x]['description']['en-us'] = "管理语音信箱";
		$apps[$x]['description']['zh-cn'] = "管理语音信箱";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Sprach-Mailbox verwalten.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Sprach-Mailbox verwalten.";
		$apps[$x]['description']['es-cl'] = "";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//destination details
		$y=0;
		$apps[$x]['destinations'][$y]['type'] = "sql";
		$apps[$x]['destinations'][$y]['label'] = "voicemails";
		$apps[$x]['destinations'][$y]['name'] = "voicemails";
		$apps[$x]['destinations'][$y]['where'] = "where domain_uuid = '\${domain_uuid}' and voicemail_enabled = 'true' ";
		$apps[$x]['destinations'][$y]['order_by'] = "voicemail_id asc ";
		$apps[$x]['destinations'][$y]['field']['destination'] = "voicemail_id";
		$apps[$x]['destinations'][$y]['field']['description'] = "voicemail_description";
		$apps[$x]['destinations'][$y]['select_value']['dialplan'] = "transfer:*99\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_value']['ivr'] = "menu-exec-app:transfer *99\${destination} XML \${context}";
		$apps[$x]['destinations'][$y]['select_label'] = "\${destination} \${description} &#9993";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "0347f82a-62a0-49d0-bacd-511d080c46d5";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_import";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "0347f82a-62a0-49d0-bacd-511d080c46d5";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_message_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_sms_edit";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_transcription_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_local_after_email";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_view";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "voicemail_option_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "user";
		$apps[$x]['permissions'][$y]['groups'][] = "agent";

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1cf61dea-42b5-4799-b9fa-f2c3bd29e933";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "voicemail_file";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "attach";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Define whether to attach voicemail files to email notifications, or only include a link.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4723fe3b-e7ec-409e-a4a8-15ae274253fb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "keep_local";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Define whether to keep voicemail files on the local system after sending attached via email.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9a4879c0-87ac-42e5-99f2-2ca2c77dbd98";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "storage_type";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "base64";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Define which storage type (base_64 stores in the database).";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "690a36a8-b6d3-47ea-8780-1af609c1966c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "message_max_length";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "300";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Maximum length of a voicemail (in seconds).";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "26879cf4-633f-41f0-a652-0c67acdc8fe2";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "message_silence_threshold";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "200";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Energy level below this number is considered silence.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bb9efdd8-9d8e-422c-b8bd-6408a540e55c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "message_silence_seconds";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Seconds of silence to end the recording for the voicemail message.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bfe802b1-fcad-41a3-9da2-6b0efdb0c05f";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "password_length";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "8";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "The default length of characters in a voicemail password.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b127ca03-c682-4d71-b412-4e50f1aca339";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "greeting_max_length";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "90";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Maximum length of a voicemail greeting (in seconds).";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "ce5f4ff1-7371-425a-a914-028da69297a1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "greeting_silence_threshold";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "200";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Energy level below this number is considered silence.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a169bf8f-ea14-40a2-9fef-af18445b6770";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "greeting_silence_seconds";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Seconds of silence to end the recording for the voicemail greeting.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "dd09f9d8-6662-4270-9dac-b87191b77012";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "display_domain_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable display of @domain_name after voicemail_id when rendering emails.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '370714b1-4d6d-4bb1-bb77-eae1fd668be3';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'remote_access';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Allow access to the voicemail menu with the correct voicemail password.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'd09e808d-bd28-400a-81db-8d41b6394527';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'message_order';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'text';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'asc';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the message order to asc or desc.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = 'b31bcf2d-cb43-41c3-8fb3-36ef74d079b0';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_complexity';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'boolean';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = 'true';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Enforce voicemail password complexity.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = '95f9d770-0fb0-4e2c-93b1-d2a140568058';
		$apps[$x]['default_settings'][$y]['default_setting_category'] = 'voicemail';
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'password_min_length';
		$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
		$apps[$x]['default_settings'][$y]['default_setting_value'] = '4';
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
		$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Minimum voicemail password length.';
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "22cf494d-d605-42bd-a667-cbe5b4121973";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_from";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b753197c-cb07-44d3-9074-8bf5bca391b8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "smtp_from_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "77620475-258a-4988-bec5-f74f2603666e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "voicemail";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "not_found_message";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemails";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the voicemail id.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "输入语音信箱ID。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入语音信箱ID。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_password";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the voicemail password.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "输入语音信箱密码。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入语音信箱密码。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "greeting_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the greeting id.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "选择问候语ID。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择问候语ID。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_alternate_greet_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Used to provide an alternate id for the voicemail announcement.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "用于为语音邮件通知提供备用ID。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "用于为语音邮件通知提供备用ID。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_mail_to";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the email address to send voicemail to.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "输入要向其发送语音邮件的电子邮件地址。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入要向其发送语音邮件的电子邮件地址。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_sms_to";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the sms did to send voicemail to.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "输入发送语音邮件的短信息。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入发送语音邮件的短信息。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_transcription_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "If voicemail transcription is enabled for this user";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "如果为此用户启用语音邮件转录";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "如果为此用户启用语音邮件转录";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_attach_file";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Choose whether to attach the file to the email.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "选择是否将文件附加到电子邮件。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择是否将文件附加到电子邮件。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_file";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select a listening option to include with the email notification.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "选择要包含在电子邮件通知中的侦听选项。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择要包含在电子邮件通知中的侦听选项。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_local_after_email";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Choose to keep the voicemail file after sending the email.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "选择在发送电子邮件后保留语音邮件文件。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择在发送电子邮件后保留语音邮件文件。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select to enable or disable this voicemail.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "选择以启用或禁用此语音邮件。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "选择以启用或禁用此语音邮件。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "输入说明。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "输入说明。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_name_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_tutorial";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_messages";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_message_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "created_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Created epoch";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "创造的时代";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "创造的时代";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "read_epoch";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Read epoch";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "读取epoch";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "读取epoch";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID Name";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "呼叫者ID名称";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "呼叫者ID名称";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "caller_id_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Caller ID Number";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "来电显示号码";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "来电显示号码";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_length";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message length.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "语音邮件消息长度。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "语音邮件消息长度。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_status";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message status";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "语音邮件消息状态";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "语音邮件消息状态";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_priority";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail message priority.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "语音邮件消息优先级。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "语音邮件消息优先级。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_intro_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail intro encoded in base64.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "以base64编码的语音邮件简介。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "以base64编码的语音邮件简介。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_base64";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail file encoded in base64.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "以base64编码的语音邮件文件。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "以base64编码的语音邮件文件。";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "message_transcription";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Voicemail transcription.";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "语音信箱转录。";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "语音信箱转录。";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_destinations";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_destination_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid_copy";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_voicemail_options";
		$apps[$x]['db'][$y]['table']['parent'] = "v_voicemails";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_option_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "voicemail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_voicemails";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "voicemail_uuid";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_digits";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_action";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_param";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "voicemail_option_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";

?>
