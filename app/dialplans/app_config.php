<?php

	//application details
		$apps[$x]['name'] = "Dialplan Manager";
		$apps[$x]['uuid'] = "742714e5-8cdf-32fd-462c-cbe7e3d655db";
		$apps[$x]['category'] = "Switch";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
//		$apps[$x]['description']['en-us'] = "The dialplan is used to setup call destinations based on conditions and context. You can use the dialplan to send calls to gateways, auto attendants, external numbers, to scripts, or any destination.";
		$apps[$x]['description']['en-us'] = "拨号计划用于根据条件和上下文设置呼叫目的地。您可以使用拨号计划将呼叫发送到网关、自动助理、外部号码、脚本或任何目的地。";
		$apps[$x]['description']['zh-cn'] = "拨号计划用于根据条件和上下文设置呼叫目的地。您可以使用拨号计划将呼叫发送到网关、自动助理、外部号码、脚本或任何目的地。";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Der Wählplan wird verwendet um Anruf-Ziele anhand von Bedingungen und Kontext fest zu legen. Sie können den Wählplan verwenden, um Anrufe an Gateways, Automatische Zentralen, externe Rufnummern, Skripte oder andere Ziele weiterzuleiten.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Der Wählplan wird verwendet um Anruf-Ziele anhand von Bedingungen und Kontext fest zu legen. Sie können den Wählplan verwenden, um Anrufe an Gateways, Automatische Zentralen, externe Rufnummern, Skripte oder andere Ziele weiterzuleiten.";
		$apps[$x]['description']['es-cl'] = "El plan de marcado es usado para configurar los destinos de llamadas basados en condiciones y contexto. Usted puede usar los planes de marcado para enviar hacia pasarelas, IVR, números externos, scripts o cualquier otro destino.";
		$apps[$x]['description']['es-mx'] = "El plan de marcado es usado para configurar los destinos de llamadas basados en condiciones y contexto. Usted puede usar los planes de marcado para enviar hacia pasarelas, IVR, números externos, scripts o cualquier otro destino.";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Les dialplans son utilisés pour configurer les destinations d'appels selon des conditions et contextes.  Vous pouvez en utiliser pour diriger les appels vers les passerelles, IVR, numéross exterieurs ou tout autre destination.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['nl-nl'] = "";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "O dialplan é usado para configurar destinos de chamada com base nas condições e contexto. Você pode usar o dialplan para enviar chamadas para gateways, atendedores automáticos, números externos, para scripts, ou qualquer destino.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "b94e8bd9-9eb5-e427-9c26-ff7a6c21552a";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_xml";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_detail_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "b94e8bd9-9eb5-e427-9c26-ff7a6c21552a";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$apps[$x]['permissions'][$y]['groups'][] = "admin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_detail_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_detail_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_detail_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "dialplan_domain";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//schema details
		$y=0;
		$apps[$x]['db'][$y]['table']['name'] = "v_dialplans";
		$apps[$x]['db'][$y]['table']['parent'] = "";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "app_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "hostname";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_context";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_number";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_continue";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_xml";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_enabled";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";

		$y++;
		$apps[$x]['db'][$y]['table']['name'] = "v_dialplan_details";
		$apps[$x]['db'][$y]['table']['parent'] = "v_dialplans";
		$z=0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "domain_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_domains";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "domain_uuid";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "foreign";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = "v_dialplans";
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = "dialplan_uuid";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_tag";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_data";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_break";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_inline";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_group";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "dialplan_detail_order";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "numeric";
//		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['description']['zh-cn'] = "";

?>
