<?php
/*
	FusionPBX
	Version: MPL 1.1

	The contents of this file are subject to the Mozilla Public License Version
	1.1 (the "License"); you may not use this file except in compliance with
	the License. You may obtain a copy of the License at
	http://www.mozilla.org/MPL/

	Software distributed under the License is distributed on an "AS IS" basis,
	WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
	for the specific language governing rights and limitations under the
	License.

	The Original Code is FusionPBX

	The Initial Developer of the Original Code is
	Mark J Crane <markjcrane@fusionpbx.com>
	Portions created by the Initial Developer are Copyright (C) 2013-2017
	the Initial Developer. All Rights Reserved.

	Contributor(s):
	Mark J Crane <markjcrane@fusionpbx.com>
	James Rose <james.o.rose@gmail.com>
*/
//includes
	require_once "root.php";
	require_once "resources/require.php";

//check permissions
	require_once "resources/check_auth.php";
	if (permission_exists('ring_group_edit') || permission_exists('ring_group_forward')) {
		//access granted
	}
	else {
		echo "access denied";
		exit;
	}

//add multi-lingual support
	$language = new text;
	$text = $language->get($_SESSION['domain']['language']['code'], 'app/ring_groups');

//additional includes
	require_once "resources/header.php";
	require_once "resources/paging.php";

//get variables used to control the order
	$order_by = $_GET["order_by"];
	$order = $_GET["order"];

//find the path
	switch ($_SERVER['REQUEST_URI']) {
		case PROJECT_PATH."/core/user_settings/user_dashboard.php":
			$validated_path = PROJECT_PATH."/core/user_settings/user_dashboard.php";
			break;
		case PROJECT_PATH."/app/ring_groups/ring_group_forward.php":
			$validated_path = PROJECT_PATH."/app/ring_groups/ring_group_forward.php";
			break;
		default:
			$validated_path = PROJECT_PATH."/app/ring_groups/ring_group_forward.php";
	}

//update ring group forwarding
	if (sizeof($_POST) > 0) {
		if (is_array($_POST['ring_groups']) && @sizeof($_POST['ring_groups']) != 0 && permission_exists('ring_group_forward')) {
			$x = 0;
			foreach ($_POST['ring_groups'] as $row) {
				//remove non-numeric characters
					$ring_group_uuid = $row['ring_group_uuid'];
					$ring_group_forward_destination = preg_replace("~[^0-9]~", "", $row['ring_group_forward_destination']);
					$ring_group_forward_enabled = ($row['ring_group_forward_enabled'] == 'true') ? $ring_group_forward_enabled = 'true' : $ring_group_forward_enabled = 'false';
				//build array
					if (is_uuid($ring_group_uuid)) {
						$array['ring_groups'][$x]['ring_group_uuid'] = $ring_group_uuid;
						$array['ring_groups'][$x]['domain_uuid'] = $_SESSION['domain_uuid'];
						$array['ring_groups'][$x]['ring_group_forward_enabled'] =$ring_group_forward_enabled;
						$array['ring_groups'][$x]['ring_group_forward_destination'] = $ring_group_forward_destination;
					}
				//increment counter
					$x++;
			}

			if (is_array($array) && sizeof($array) != 0) {
				//update ring group
					$p = new permissions;
					$p->add('ring_group_edit', 'temp');

					$database = new database;
					$database->app_name = 'ring_groups';
					$database->app_uuid = '1d61fb65-1eec-bc73-a6ee-a6203b4fe6f2';
					$database->save($array);
					unset($array);

					$p->delete('ring_group_edit', 'temp');

				//set message
					message::add($text['message-update']);

				//redirect the user
					header("Location: ".$validated_path);
					exit;
			}
		}
	}

//prepare to page the results
	if (permission_exists('ring_group_add') || permission_exists('ring_group_edit')) {
		//show all ring groups
		$sql = "select count(*) from v_ring_groups ";
		$sql .= "where domain_uuid = :domain_uuid ";
		$parameters['domain_uuid'] = $domain_uuid;
	}
	else {
		//show only assigned ring groups
		$sql = "select count(*) from v_ring_groups as r, v_ring_group_users as u ";
		$sql .= "where r.ring_group_uuid = u.ring_group_uuid ";
		$sql .= "and r.domain_uuid = :domain_uuid ";
		$sql .= "and u.user_uuid = :user_uuid ";
		$parameters['domain_uuid'] = $_SESSION['user']['domain_uuid'];
		$parameters['user_uuid'] = $_SESSION['user']['user_uuid'];
	}
	$database = new database;
	$num_rows = $database->select($sql, $parameters, 'column');
	unset($parameters);

//prepare to page the results
	$rows_per_page = $is_included ? 10 : (is_numeric($_SESSION['domain']['paging']['numeric']) ? $_SESSION['domain']['paging']['numeric'] : 50);
	$param = "";
	$page = $_GET['page'];
	if (strlen($page) == 0) { $page = 0; $_GET['page'] = 0; }
	list($paging_controls, $rows_per_page, $var3) = paging($num_rows, $param, $rows_per_page);
	$offset = $rows_per_page * $page;

//get the list
	if (permission_exists('ring_group_add') || permission_exists('ring_group_edit')) {
		//show all ring groups
		$sql = "select * from v_ring_groups ";
		$sql .= "where domain_uuid = :domain_uuid ";
		$parameters['domain_uuid'] = $domain_uuid;
	}
	else {
		//show only assigned ring groups
		$sql = "select r.ring_group_name, r.ring_group_uuid, r.ring_group_extension, r.ring_group_forward_destination, r.ring_group_forward_enabled, r.ring_group_description from v_ring_groups as r, v_ring_group_users as u ";
		$sql .= "where r.ring_group_uuid = u.ring_group_uuid ";
		$sql .= "and r.domain_uuid = :domain_uuid ";
		$sql .= "and u.user_uuid = :user_uuid ";
		$parameters['domain_uuid'] = $_SESSION['user']['domain_uuid'];
		$parameters['user_uuid'] = $_SESSION['user']['user_uuid'];
	}
	$sql .= order_by($order_by, $order, 'ring_group_extension', 'asc');
	$sql .= limit_offset($rows_per_page, $offset);
	$database = new database;
	$result = $database->select($sql, $parameters, 'all');
	unset($sql, $parameters);

	echo "<form method='post' name='frm' action='".$validated_path."'>\n";
	echo "	<div style='float: left;'>";
	echo "		<b>".$text['header-ring-group-forward']."</b><br />";
	if (!$is_included) {
		echo "	".$text['description-ring-group-forward']."<br />";
	}
	echo "	<br />";
	echo "	</div>\n";

	echo "<div style='float: right;'>\n";
	if ($num_rows > 10) {
		echo "	<input id='btn_viewall_ringgroups' type='button' class='btn' value='".$text['button-view_all']."' onclick=\"document.location.href='".PROJECT_PATH."/app/ring_groups/ring_group_forward.php';\">\n";
	}
	echo "	<input type='submit' class='btn' value='".$text['button-save']."'>";
	echo "</div>\n";

	echo "<table class='tr_hover' width='100%' border='0' cellpadding='0' cellspacing='0'>\n";
	echo "<tr>\n";
	echo th_order_by('ring_group_name', $text['label-name'], $order_by, $order);
	echo th_order_by('ring_group_extension', $text['label-extension'], $order_by, $order);
	echo "<th>".$text['label-forwarding']."</th>";
	if (!$is_included) {
		echo th_order_by('ring_group_description', $text['label-description'], $order_by, $order);
	}
	echo "</tr>\n";

	$c = 0; $x = 0;
	if (is_array($result) && @sizeof($result) != 0) {
		foreach($result as $row) {
			$onclick = "onclick=\"document.getElementById('".escape($row['ring_group_uuid'])."').selectedIndex = (document.getElementById('".escape($row['ring_group_uuid'])."').selectedIndex) ? 0 : 1; if (document.getElementById('".escape($row['ring_group_uuid'])."').selectedIndex) { document.getElementById('destination').focus(); }\"";
			echo "<tr>\n";
			echo "	<td valign='top' class='row_style".$c."' ".$onclick.">".escape($row['ring_group_name'])."&nbsp;</td>\n";
			echo "	<td valign='top' class='row_style".$c."' ".$onclick.">".escape($row['ring_group_extension'])."&nbsp;</td>\n";
			echo "	<td valign='top' class='row_style".$c." row_style_slim' width='5'>";
			echo "		<input type='hidden' name='ring_groups[".$x."][ring_group_uuid]' id='destination'  value=\"".escape($row["ring_group_uuid"])."\">";
			echo "		<select class='formfld' name='ring_groups[".$x."][ring_group_forward_enabled]\" id='".escape($row['ring_group_uuid'])."' onchange=\"(this.selectedIndex == 1) ? document.getElementById('destination').focus() : null;\">";
			echo "			<option value='false'>".$text['option-disabled']."</option>";
			echo "			<option value='true' ".(($row["ring_group_forward_enabled"] == 'true') ? "selected='selected'" : null).">".$text['option-enabled']."</option>";
			echo "		</select>";
			echo "		<input class='formfld' style='width: 100px;' type='text' name='ring_groups[".$x."][ring_group_forward_destination]' id='destination' placeholder=\"".$text['label-forward_destination']."\" maxlength='255' value=\"".escape($row["ring_group_forward_destination"])."\">";
			echo "	</td>\n";
			if (!$is_included) {
				echo "	<td valign='top' class='row_stylebg tr_link_void' ".$onclick.">".escape($row['ring_group_description'])."&nbsp;</td>\n";
			}
			echo "</tr>\n";
			$c = ($c) ? 0 : 1;
			$x++;
		}
	}
	unset($result, $row);

	echo "</table>";
	echo "</form>";

	if (!$is_included) {
		echo "<center>".$paging_controls."</center>\n";
		echo "<br><br>";
	}

//include the footer
	if (!$is_included) {
		require_once "resources/footer.php";
	}

?>
