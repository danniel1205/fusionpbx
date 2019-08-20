<?php
	//application details
		$apps[$x]['name'] = "Grandstream";
		$apps[$x]['uuid'] = "24ab69bf-c78b-4ab3-9911-cf30247e3e46";
		$apps[$x]['category'] = "Vendor";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.0";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
//		$apps[$x]['description']['en-us'] = "";
		$apps[$x]['description']['en-us'] = "";
		$apps[$x]['description']['zh-cn'] = "";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "";
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

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bf083e2c-ad73-48ba-a981-9e1c92b2554e";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_call_waiting";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Call Waiting 0=enabled 1=disable";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3a8841f3-e1c0-4eb1-abd3-068a3e3701a5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_gxp_time_zone";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "auto";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "See provision profile for codes.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "bce5c360-ec90-468b-9bed-aa5ceabfe87d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_check_sip_user_id";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4965e699-65a2-4309-b30c-6c6aae9c5e60";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_config_server_path";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server.yourdomain.com/app/provision";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Location to use for Grandstream provisioning configuration.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "87895c98-10a1-44db-a6cc-db7ae0eb70d1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_dns_mode";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "DNS Mode 0=A; 1=SRV; 2=NAPTR/SRV;";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1d1d4b7c-2cd2-474b-8cdf-8f5b8842a9e5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_firmware_path";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://server.yourdomain.com/app/grandstream/resources/firmware";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Grandstream firmware and provision.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "712daa4c-d657-4ed1-85f6-9134bef2969d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_global_contact_groups";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "contacts_elementary,contacts_facilities,contacts_other,contacts_secondary";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "List of contact groups that every phone will have access to.  Namely building sites.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "daeec650-12ab-47b7-a079-d274beee66f5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_lan_port_vlan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default VLAN for phone LAN port. Default 0 is disabled.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "5200174e-b644-438f-a2f8-b721ee052cea";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_pc_port_vlan";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Default VLAN for phone PC port.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a3adbb11-4e9f-4a56-86f8-0fefa5fb8c1d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_base_dn";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Base DN";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "2d820643-b2ad-4824-946e-540d800ebd82";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_display_name";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "givenName sn title";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Which named attributes to display on device.  Must be pulled in through grandstream_ldap_name_attr.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "108f9c23-d44b-41f0-b332-ef9d586ecb8d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_mail_attr";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mail";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Mail attribute returned to phone";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a8acdbb0-98de-48d6-9d6d-1f7961a50a6b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_mail_filter";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(mail=%)";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for mail lookups";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3f1fa270-7a73-41b0-8210-8a9e9295f658";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_name_attr";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "givenName sn title mail";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "The NAME attributes returned in the LDAP search result available to device";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "72b87ed4-588c-4706-a221-e15d5fcaa79d";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_name_filter";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(cn=%)";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for name lookups";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "902d7bd7-4040-4082-a6ab-737f5f6e76a0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_number_attr";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "telephoneNumber mobile homePhone";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number attributes returned to the phone.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7f123561-b35f-475b-b3c7-202df5be63b6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_number_filter";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "(|(telephoneNumber=%)(homePhone=%)(moblie=%))";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Search filter for number lookups.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "33728232-dd89-4e30-8bc9-379891f2696b";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_password";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "super-secret";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap bind user password.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "614745a2-2441-48f7-a62d-e0dc098c7db0";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap server host name";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c5d91dcd-cc74-4bc9-a3a8-e3b8ee5bd1a6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_user_base";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "ou=users,dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap base for users.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "35dfa15a-1bfb-43e1-ba91-79c78dc89f04";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_ldap_username";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "cn=pbxadmin,dc=mydomain,dc=com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Ldap server bind username";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c1411d05-8f55-4bbf-96e8-6ab8cbb77bb5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_nat_traversal";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "NAT Traversal. 0 - No, 1 - STUN, 2 - keep alive, 3 - UPnP, 4 - Auto, 5 - VPN";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8f4cea83-f4fd-4f21-948a-9f434b46b286";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_phonebook_download";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0 - Disabled, 1 - Enabled, use HTTP, 2 - Enabled, use TFTP, 3 - Enabled, use HTTPS. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f7bf7fb8-5d2a-46a8-b218-32826c29fd53";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_phonebook_download_interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "720";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "0=disabled, 5-720 minutes";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "66c37aae-8381-460d-bac3-d08fea5d3217";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_phonebook_xml_server_path";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com/app/provision/pb/";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Grandstream Phonebook Server Path - NOTE template adds MAC on the end of this if contact_grandstream is enabled.  This also requires nginx rewrite rules for phonebook.xml";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "00f51316-4405-4450-b619-12e0b2594e1a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_qos_rtp";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for RTP media";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4e1e89b8-f114-4580-944a-2537eebb0915";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_qos_sip";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Layer 2 QoS 802.1p Priority Value for SIP signaling";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "be807a0d-d939-484a-b34a-5605c28b7e11";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_sip_only_known_servers";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "40435232-cdc7-412a-8927-892f2bd44bda";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_stun_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "mydomain.com";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Bug in Grandstream where null stun_server defaults to sip server/port";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6dbe4a02-33a3-4c1d-9145-0b8d6a5b8c81";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_validate_incoming_sip";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "GXV Android phones - fix auto-ring bug.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0971caf6-679a-4442-a16f-e729f2f402d7";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_wallpaper_url";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "https://mydomain.com/files/wallpaper.jpg";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Wallpaper Image JPEG 480x272 16-bit depth dithered";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "a004dee4-4621-4c6d-8c20-7f315f812d85";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_bluetooth_power";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Bluetooth Power - 0 - Off, 1 - On, 2 - Off & Hide Menu From LCD";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09d534c5-551b-47ad-86bc-c053b66679a6";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_bluetooth_handsfree";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Bluetooth Handsfree - 0 - Off, 1 - On";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "453ec939-ef61-4ecd-ad0a-31905153efd8";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_auto_attended_transfer";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Attended Transfer Mode. 0 - Static, 1 - Dynamic. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "0f1062d5-d262-4444-a8cb-a48faa4ce580";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_syslog_server";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Syslog Server (name of the server, max length is 64 characters)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4f234e60-5653-4d4a-bac5-07135ea0549c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_syslog_level";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Syslog Level. 0 - NONE, 1 - DEBUG, 2 - INFO, 3 - WARNING, 4 - ERROR. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "8e42975d-fe62-4e5a-8115-5a8bdb6ae2bd";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_send_sip_log";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Send SIP Log. 0 - Do not send SIP log in Syslog, 1 - Send SIP log in Syslog if configured and set to DEBUG level. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "7bb45800-e493-4b3d-bffe-1b401a64a9b3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Screensaver. 0 - No, 1 - Yes, 2 - On if no VPK is active. Default is 1";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "eb96abe3-0225-4c75-adcf-982e7121d905";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver_source";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Screensaver Source. 0 - Default, 1 - USB, 2 - Download. Default is 0. --for GXP2140/2160/2170 only";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "6be4fe78-59f1-4677-b0e1-18984682aac5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver_show_date_time";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Show Date and Time. 0 - No, 1 - Yes. Default is 1";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "55d20480-687c-45d2-b6a5-65295a908917";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver_timeout";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "5";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Screensaver Timeout. Minutes 3-60";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "918685f9-aa99-4de7-b3b0-06aff5d69e4c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver_server_path";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Screensaver Server Path";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1cbf0a48-9e4f-4af6-8d91-8ebff8ba27ec";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_screensaver_xml_download_interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Screensaver XML Download Interval Number: 5 - 720. Default is 0 (disable auto downloading)";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "af73fb5c-8ded-4ee0-bd11-97f14f06f3c3";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_srtp";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "SRTP Mode. 0 - Disabled, 1 - Enabled but not forced, 2 - Enabled and forced, 3 - Optional. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "37bb9332-5261-4826-b675-0fd4b836bb98";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_account_ring_tone_1";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Account Ring Tone. 0 - system ring tone, 1 - custom ring tone 1, 2 - custom ring tone 2, 3 - custom ring tone, 4 - silent. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3714f5c5-4eef-41a6-8f21-2e9ca9e60128";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_blf_call_pickup";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "0";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "BLF Call-pickup. 0 - Auto, 1 - Force BLF Call-pickup by prefix, 2 - Disabled. Default is 0";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "09ed1352-2594-4eb8-b3f8-93cdaabe6302";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_active_backlight_timeout";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Active Backlight Timeout. Default is 1. Value 1-90.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "66aa21c7-abc9-4265-85ef-5de630d7987c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_lcd_brightness_idle";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "60";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Active Backlight Idle Time. Default is 60.. Value 0-100.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "14154480-e12d-473f-9967-2381eea88c76";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "provision";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "grandstream_lcd_brightness";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "100";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Backlight Brightness. Default is 100.. Value 10-100.";
		$y++;

?>
