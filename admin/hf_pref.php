<?php

$page_security = 'SA_SETUPCOMPANY';
$path_to_root = "..";
include($path_to_root . "/includes/session.inc");

page(_($help_context = "Header/Footer - Pref "));

include_once($path_to_root . "/includes/date_functions.inc");
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/includes/access_levels.inc");
include_once($path_to_root . "/admin/db/company_db.inc");
//-------------------------------------------------------------------------------------------------

if (isset($_POST['update']) && $_POST['update'] != "")
{
	global $Ajax;

	{
		$sql = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value'))." ,
						enable =".db_escape(get_post('enable1')).",
						s_position =".db_escape(get_post('s_position1'))." ,
						p_position =".db_escape(get_post('p_position1')).",
						s_width =".db_escape(get_post('s_width1')).",
						p_width =".db_escape(get_post('p_width1'))."
						WHERE  name='h_amount1'";
		db_query($sql,"The sales group could not be updated");

		$sql1 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value2'))." ,
						enable =".db_escape(get_post('enable2'))." ,
						s_position =".db_escape(get_post('s_position2'))." ,
						p_position =".db_escape(get_post('p_position2')).",
						s_width =".db_escape(get_post('s_width2')).",
						p_width =".db_escape(get_post('p_width2'))."
					   WHERE  name='h_amount2'";
		db_query($sql1,"The sales group could not be updated");

		$sql2 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value3'))." ,
						enable =".db_escape(get_post('enable3')).",
						s_position =".db_escape(get_post('s_position3')).",
						p_position =".db_escape(get_post('p_position3')).",
						s_width =".db_escape(get_post('s_width3')).",
						p_width =".db_escape(get_post('p_width3'))."
						WHERE  name='h_amount3'";
		db_query($sql2,"The sales group could not be updated");

		$sql3 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value4'))." ,
						enable =".db_escape(get_post('enable4')).",
						s_position =".db_escape(get_post('s_position4')).",
						p_position =".db_escape(get_post('p_position4')).",
						s_width =".db_escape(get_post('s_width4')).",
						p_width =".db_escape(get_post('p_width4'))."
						WHERE  name='f_comment1'";
		db_query($sql3,"The sales group could not be updated");

		$sql4 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value5')).",
						enable =".db_escape(get_post('enable5')).",
						s_position =".db_escape(get_post('s_position5')).",
						p_position =".db_escape(get_post('p_position5')).",
						s_width =".db_escape(get_post('s_width5')).",
						p_width =".db_escape(get_post('p_width5'))."
						WHERE  name='f_comment2'";
		db_query($sql4,"The sales group could not be updated");

		$sql5 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value6'))." ,
						enable =".db_escape(get_post('enable6')).",
						s_position =".db_escape(get_post('s_position6')).",
						p_position =".db_escape(get_post('p_position6')).",
						s_width =".db_escape(get_post('s_width6')).",
						p_width =".db_escape(get_post('p_width6'))."
						WHERE  name='f_comment3'";
		db_query($sql5,"The sales group could not be updated");


		$sql6 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value7'))." ,
						enable =".db_escape(get_post('enable7')).",
						s_position =".db_escape(get_post('s_position7')).",
						p_position =".db_escape(get_post('p_position7')).",
						s_width =".db_escape(get_post('s_width7')).",
						p_width =".db_escape(get_post('p_width7'))."
						WHERE  name='f_text1'";
		db_query($sql6,"The sales group could not be updated");


		$sql7 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value8'))." ,
						enable =".db_escape(get_post('enable8')).",
						s_position =".db_escape(get_post('s_position8')).",
						p_position =".db_escape(get_post('p_position8')).",
						s_width =".db_escape(get_post('s_width8')).",
						p_width =".db_escape(get_post('p_width8'))."
						WHERE  name='f_text2'";
		db_query($sql7,"The sales group could not be updated");


        $sql7 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value88'))." ,
						enable =".db_escape(get_post('enable88')).",
						s_position =".db_escape(get_post('s_position88')).",
						p_position =".db_escape(get_post('p_position88')).",
						s_width =".db_escape(get_post('s_width88')).",
						p_width =".db_escape(get_post('p_width88'))."
						WHERE  name='f_text3'";
        db_query($sql7,"The sales group could not be updated");


        $sql8 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value9')).",
						enable =".db_escape(get_post('enable9')).",
						s_position =".db_escape(get_post('s_position9')).",
						p_position =".db_escape(get_post('p_position9')).",
						s_width =".db_escape(get_post('s_width9')).",
						p_width =".db_escape(get_post('p_width9'))."
						WHERE  name='h_text1'";
		db_query($sql8,"The sales group could not be updated");

		$sql9 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value10')).",
						enable =".db_escape(get_post('enable10')).",
						s_position =".db_escape(get_post('s_position10')).",
						p_position =".db_escape(get_post('p_position10')).",
						s_width =".db_escape(get_post('s_width10')).",
						p_width =".db_escape(get_post('p_width10'))."
						WHERE  name='h_text2'";

		db_query($sql9,"The sales group could not be updated");

        $sql10 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value110')).",
						enable =".db_escape(get_post('enable110')).",
						s_position =".db_escape(get_post('s_position110')).",
						p_position =".db_escape(get_post('p_position110')).",
						s_width =".db_escape(get_post('s_width110')).",
						p_width =".db_escape(get_post('p_width110'))."
						WHERE  name='h_text3'";
		db_query($sql10,"The sales group could not be updated");

		$sql11 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value12')).",
						enable =".db_escape(get_post('enable12')).",
						s_position =".db_escape(get_post('s_position12')).",
						p_position =".db_escape(get_post('p_position12')).",
						s_width =".db_escape(get_post('s_width12')).",
						p_width =".db_escape(get_post('p_width12'))."
						WHERE  name='f_combo1'";
		db_query($sql11,"The sales group could not be updated");

		$sql12 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value34')).",
						enable =".db_escape(get_post('enable34')).",
						s_position =".db_escape(get_post('s_position34')).",
						p_position =".db_escape(get_post('p_position34')).",
						s_width =".db_escape(get_post('s_width34')).",
						p_width =".db_escape(get_post('p_width34'))."
						WHERE  name='f_combo2'";
		db_query($sql12,"The sales group could not be updated");

		$sql13 = "UPDATE `0_hf_pref` SET
						label_value = ".db_escape(get_post('label_value13')).",
						enable = ".db_escape(get_post('enable13')).",
						s_position =".db_escape(get_post('s_position13')).",
						p_position =".db_escape(get_post('p_position13')).",
						s_width =".db_escape(get_post('s_width13')).",
						p_width =".db_escape(get_post('p_width13'))."
						WHERE  name='f_combo3'";
		db_query($sql13,"The sales group could not be updated");

        $sql14 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value14')).",
						enable =".db_escape(get_post('enable14')).",
						s_position =".db_escape(get_post('s_position14')).",
						p_position =".db_escape(get_post('p_position14')).",
						s_width =".db_escape(get_post('s_width14')).",
						p_width =".db_escape(get_post('p_width14'))."
						WHERE  name='h_combo1'";
		db_query($sql14,"The sales group could not be updated");

        $sql15 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value15')).",
						enable =".db_escape(get_post('enable15')).",
						s_position =".db_escape(get_post('s_position15')).",
						p_position =".db_escape(get_post('p_position15')).",
						s_width =".db_escape(get_post('s_width15')).",
						p_width =".db_escape(get_post('p_width15'))."
						WHERE  name='h_combo2'";
		db_query($sql15,"The sales group could not be updated");

        $sql16 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value35')).",
						enable =".db_escape(get_post('enable35')).",
						s_position =".db_escape(get_post('s_position35')).",
						p_position =".db_escape(get_post('p_position35')).",
						s_width =".db_escape(get_post('s_width35')).",
						p_width =".db_escape(get_post('p_width35'))."
						WHERE  name='h_combo3'";
		db_query($sql16,"The sales group could not be updated");

        $sql18 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value102')).",
						enable =".db_escape(get_post('enable102')).",
						s_position =".db_escape(get_post('s_position102')).",
						p_position =".db_escape(get_post('p_position102')).",
						s_width =".db_escape(get_post('s_width102')).",
						p_width =".db_escape(get_post('p_width102'))."
						WHERE  name='h_date1'";
		db_query($sql18,"The sales group could not be updated");

        $sql19 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value101')).",
						enable =".db_escape(get_post('enable101')).",
						s_position =".db_escape(get_post('s_position101')).",
						p_position =".db_escape(get_post('p_position101')).",
						s_width =".db_escape(get_post('s_width101')).",
						p_width =".db_escape(get_post('p_width101'))."
						WHERE  name='h_date2'";
        db_query($sql19,"The sales group could not be updated");

        $sql20 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value100')).",
						enable =".db_escape(get_post('enable100')).",
						s_position =".db_escape(get_post('s_position100')).",
						p_position =".db_escape(get_post('p_position100')).",
						s_width =".db_escape(get_post('s_width100')).",
						p_width =".db_escape(get_post('p_width100'))."
						WHERE  name='h_date3'";
		db_query($sql20,"The sales group could not be updated");

        $sql20 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value1001')).",
						enable =".db_escape(get_post('enable1001')).",
						s_position =".db_escape(get_post('s_position1001')).",
						p_position =".db_escape(get_post('p_position1001')).",
						s_width =".db_escape(get_post('s_width1001')).",
						p_width =".db_escape(get_post('p_width1001'))."
						WHERE  name='f_date1'";
		db_query($sql20,"The sales group could not be updated");

        $sql20 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value1002')).",
						enable =".db_escape(get_post('enable1002')).",
						s_position =".db_escape(get_post('s_position1002')).",
						p_position =".db_escape(get_post('p_position1002')).",
						s_width =".db_escape(get_post('s_width1002')).",
						p_width =".db_escape(get_post('p_width1002'))."
						WHERE  name='f_date2'";
		db_query($sql20,"The sales group could not be updated");

        $sql20 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value1003')).",
						enable =".db_escape(get_post('enable1003')).",
						s_position =".db_escape(get_post('s_position1003')).",
						p_position =".db_escape(get_post('p_position1003')).",
						s_width =".db_escape(get_post('s_width1003')).",
						p_width =".db_escape(get_post('p_width1003'))."
						WHERE  name='f_date3'";
		db_query($sql20,"The sales group could not be updated");


        $sql21 = "UPDATE `0_hf_pref` SET
						label_value =".db_escape(get_post('label_value666')).",
						enable =".db_escape(get_post('enable666'))."
						WHERE  name='total_date'";
        db_query($sql21,"The sales group could not be updated");




//		update_purch_pref(
//			get_post( array('cart1','grn_enable','po_enable','label_value'
//
//
//
//				)
//			)
//
//		);

//		$_SESSION['wa_current_user']->timeout = $_POST['login_tout'];
		display_notification_centered(_("Items setup has been updated."));
	}
	set_focus('label_value');
	$Ajax->activate('_page_body');
// 	meta_forward($_SERVER['PHP_SELF']);

} /* end of if submit */
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <!--	<link rel="stylesheet" href="http://cdn.kendostatic.com/2012.2.710/styles/kendo.blueopal.min.css" />-->
        <script src="../telerik/styles/kendo.common.min.css"></script>

        <script src="../telerik/js/jquery.min.js"></script>
        <script src="../telerik/js/kendo.all.min.js"></script>
        <link rel="stylesheet" href="//kendo.cdn.telerik.com/2015.2.805/styles/kendo.common-material.min.css" />
        <link rel="stylesheet" href="//kendo.cdn.telerik.com/2015.2.805/styles/kendo.material.min.css" />



    </head>
    <style>

        ul li a:hover{background-color:#337ab7;}

    </style>
    <body>

    <div id="example" style="background-color: #79B3D4;">
        <div class="demo-section k-content" style="background-color: #79B3D4;" >
            <div id="tabstrip" style="background-color: #79B3D4;">
                <ul style="background-color: #79B3D4;">


                    <li  style="background-color: #79B3D4;" >
                        <a href="gl_setup.php"><i class="fa fa-dashboard " style="margin-right: 5px;">  </i> Main</a>
                    </li>

                    <li  style="background-color: #79B3D4;">
                        <a href="so_pref.php"> <i class="fa fa-line-chart" style="margin-right: 5px;"></i> Sales Pref</a>
                    </li>

                    <li style="background-color: #79B3D4;">
                        <a href="purch_pref.php"><i class="fa fa-shopping-cart" style="margin-right: 5px;"></i> Purchase Pref</a>
                    </li>
                    <li class="k-state-active"  style="background-color: #337ab7;"  >
                     <i class="fa fa-barcode" style="margin-right: 5px;"></i> Item Pref
                    </li>

                    <li   style="background-color: #79B3D4;" >
                        <a href="company_preferences_new.php"><i class="fa fa-circle-o" style="margin-right: 5px;"></i> Form Display</a>
                    </li >


                    <li  style="background-color: #79B3D4;">
                        <a href="print_from_setup.php"><i class="fa fa-pie-chart" style="margin-right: 5px;"></i> Report Display</a>
                    </li>

                    <li   style="background-color: #79B3D4;" >
                        <a href="import_gl_setup.php"><i class="fa fa-ship" style="margin-right: 5px;"></i> Import GL</a>
                    </li >

                    <li   style="background-color: #79B3D4;" >
                        <a href="cashflow_gl.php"><i class="fa fa-area-chart" style="margin-right: 5px;"></i> Cash Flow</a>
                    </li >

                    <li    style="background-color: #79B3D4;" >
                        <a href="wht_type.php"><i class="fa fa-text-width" style="margin-right: 5px;"></i> WHT GL</a>
                    </li >
                </ul>

            </div>
        </div>





        <script>
            $(document).ready(function() {
                $("#tabstrip").kendoTabStrip({
                    animation:  {
                        open: {
                            effects: "fadeIn"
                        }
                    }
                });
            });
        </script>
    </div>


    </body>
    </html>

<?php
start_form(true);
div_start('_page_body');
$myrow1 = get_company_hf_pref('h_amount1');
//display_error($myrow1['label_value']);
$_POST['label_value'] = $myrow1["label_value"];
$_POST['enable1'] = $myrow1["enable"];
$_POST['s_position1'] = $myrow1["s_position"];
$_POST['p_position1'] = $myrow1["p_position"];
$_POST['s_width1'] = $myrow1["s_width"];
$_POST['p_width1'] = $myrow1["p_width"];

$myrow2 = get_company_hf_pref('h_amount2');
$_POST['label_value2'] = $myrow2["label_value"];
$_POST['enable2'] = $myrow2["enable"];
$_POST['s_position2'] = $myrow2["s_position"];
$_POST['p_position2'] = $myrow2["p_position"];

$_POST['s_width2'] = $myrow2["s_width"];
$_POST['p_width2'] = $myrow2["p_width"];

$myrow3 = get_company_hf_pref('h_amount3');
$_POST['label_value3'] = $myrow3["label_value"];
$_POST['enable3'] = $myrow3["enable"];
$_POST['s_position3'] = $myrow3["s_position"];
$_POST['p_position3'] = $myrow3["p_position"];

$_POST['s_width3'] = $myrow3["s_width"];
$_POST['p_width3'] = $myrow3["p_width"];

$myrow4 = get_company_hf_pref('f_comment1');
$_POST['label_value4'] = $myrow4["label_value"];
$_POST['enable4'] = $myrow4["enable"];
$_POST['s_position4'] = $myrow4["s_position"];
$_POST['p_position4'] = $myrow4["p_position"];

$_POST['s_width4'] = $myrow4["s_width"];
$_POST['p_width4'] = $myrow4["p_width"];

$myrow5 = get_company_hf_pref('f_comment2');
$_POST['label_value5'] = $myrow5["label_value"];
$_POST['enable5'] = $myrow5["enable"];
$_POST['s_position5'] = $myrow5["s_position"];
$_POST['p_position5'] = $myrow5["p_position"];

$_POST['s_width5'] = $myrow5["s_width"];
$_POST['p_width5'] = $myrow5["p_width"];

$myrow6 = get_company_hf_pref('f_comment3');
$_POST['label_value6'] = $myrow6["label_value"];
$_POST['enable6'] = $myrow6["enable"];
$_POST['s_position6'] = $myrow6["s_position"];
$_POST['p_position6'] = $myrow6["p_position"];


$_POST['s_width6'] = $myrow6["s_width"];
$_POST['p_width6'] = $myrow6["p_width"];

//////////////////////for footer

$myrow7 = get_company_hf_pref('f_text1');
$_POST['label_value7'] = $myrow7["label_value"];
$_POST['enable7'] = $myrow7["enable"];
$_POST['s_position7'] = $myrow7["s_position"];
$_POST['p_position7'] = $myrow7["p_position"];

$_POST['s_width7'] = $myrow7["s_width"];
$_POST['p_width7'] = $myrow7["p_width"];

$myrow8 = get_company_hf_pref('f_text2');
$_POST['label_value8'] = $myrow8["label_value"];
$_POST['enable8'] = $myrow8["enable"];
$_POST['s_position8'] = $myrow8["s_position"];
$_POST['p_position8'] = $myrow8["p_position"];

$_POST['s_width8'] = $myrow8["s_width"];
$_POST['p_width8'] = $myrow8["p_width"];

$myrow9 = get_company_hf_pref('f_text3');
$_POST['label_value88'] = $myrow9["label_value"];
$_POST['enable88'] = $myrow9["enable"];
$_POST['s_position88'] = $myrow9["s_position"];
$_POST['p_position88'] = $myrow9["p_position"];

$_POST['s_width88'] = $myrow9["s_width"];
$_POST['p_width88'] = $myrow9["p_width"];

$myrow10 = get_company_hf_pref('h_text2');
$_POST['label_value10'] = $myrow10["label_value"];
$_POST['enable10'] = $myrow10["enable"];
$_POST['s_position10'] = $myrow10["s_position"];
$_POST['p_position10'] = $myrow10["p_position"];


$_POST['s_width10'] = $myrow10["s_width"];
$_POST['p_width10'] = $myrow10["p_width"];

$myrow10 = get_company_hf_pref('h_text1');
$_POST['label_value9'] = $myrow10["label_value"];
$_POST['enable9'] = $myrow10["enable"];
$_POST['s_position9'] = $myrow10["s_position"];
$_POST['p_position9'] = $myrow10["p_position"];


$_POST['s_width9'] = $myrow10["s_width"];
$_POST['p_width9'] = $myrow10["p_width"];

$myrow11 = get_company_hf_pref('h_text3');
$_POST['label_value110'] = $myrow11["label_value"];
$_POST['enable110'] = $myrow11["enable"];
$_POST['s_position110'] = $myrow11["s_position"];
$_POST['p_position110'] = $myrow11["p_position"];


$_POST['s_width110'] = $myrow11["s_width"];
$_POST['p_width110'] = $myrow11["p_width"];

$myrow12 = get_company_hf_pref('f_combo1');
$_POST['label_value12'] = $myrow12["label_value"];
$_POST['enable12'] = $myrow12["enable"];
$_POST['s_position12'] = $myrow12["s_position"];
$_POST['p_position12'] = $myrow12["p_position"];

$_POST['s_width12'] = $myrow12["s_width"];
$_POST['p_width12'] = $myrow12["p_width"];

$myrow13 = get_company_hf_pref('f_combo2');
$_POST['label_value34'] = $myrow13["label_value"];
$_POST['enable34'] = $myrow13["enable"];
$_POST['s_position34'] = $myrow13["s_position"];
$_POST['p_position34'] = $myrow13["p_position"];

$_POST['s_width34'] = $myrow13["s_width"];
$_POST['p_width34'] = $myrow13["p_width"];


$myrow33 = get_company_hf_pref('f_combo3');
$_POST['label_value13'] = $myrow33["label_value"];
$_POST['enable13'] = $myrow33["enable"];
$_POST['s_position13'] = $myrow33["s_position"];
$_POST['p_position13'] = $myrow33["p_position"];

$_POST['s_width13'] = $myrow33["s_width"];
$_POST['p_width13'] = $myrow33["p_width"];

$myrow44 = get_company_hf_pref('h_combo1');
$_POST['label_value14'] = $myrow44["label_value"];
$_POST['enable14'] = $myrow44["enable"];
$_POST['s_position14'] = $myrow4["s_position"];
$_POST['p_position14'] = $myrow44["p_position"];

$_POST['s_width14'] = $myrow44["s_width"];
$_POST['p_width14'] = $myrow44["p_width"];

$myrow55 = get_company_hf_pref('h_combo2');
$_POST['label_value15'] = $myrow55["label_value"];
$_POST['enable15'] = $myrow55["enable"];

$_POST['s_width15'] = $myrow55["s_width"];
$_POST['p_width15'] = $myrow55["p_width"];



$myrow35 = get_company_hf_pref('h_combo3');
$_POST['label_value35'] = $myrow35["label_value"];
$_POST['enable35'] = $myrow35["enable"];
$_POST['s_position35'] = $myrow35["s_position"];
$_POST['p_position35'] = $myrow35["p_position"];

$_POST['s_width35'] = $myrow35["s_width"];
$_POST['p_width35'] = $myrow35["p_width"];

$myrow36 = get_company_hf_pref('h_date3');
$_POST['label_value100'] = $myrow36["label_value"];
$_POST['enable100'] = $myrow36["enable"];
$_POST['s_position100'] = $myrow36["s_position"];
$_POST['p_position100'] = $myrow36["p_position"];


$_POST['s_width36'] = $myrow36["s_width"];
$_POST['p_width36'] = $myrow36["p_width"];


$myrow36 = get_company_hf_pref('h_date2');
$_POST['label_value101'] = $myrow36["label_value"];
$_POST['enable101'] = $myrow36["enable"];
$_POST['s_position101'] = $myrow36["s_position"];
$_POST['p_position101'] = $myrow36["p_position"];


$_POST['s_width101'] = $myrow36["s_width"];
$_POST['p_width101'] = $myrow36["p_width"];

$myrow666 = get_company_hf_pref('total_date');
$_POST['label_value666'] = $myrow666["label_value"];


$myrow14 = get_company_hf_pref('h_date1');
$_POST['label_value102'] = $myrow14["label_value"];
$_POST['enable102'] = $myrow14["enable"];
$_POST['s_position102'] = $myrow14["s_position"];
$_POST['p_position102'] = $myrow14["p_position"];

$_POST['s_width102'] = $myrow14["s_width"];
$_POST['p_width102'] = $myrow14["p_width"];

$myrow15 = get_company_hf_pref('f_date1');
$_POST['label_value1001'] = $myrow15["label_value"];
$_POST['enable1001'] = $myrow15["enable"];
$_POST['s_position1001'] = $myrow15["s_position"];
$_POST['p_position1001'] = $myrow15["p_position"];

$_POST['s_width1001'] = $myrow15["s_width"];
$_POST['p_width1001'] = $myrow15["p_width"];

$myrow16 = get_company_hf_pref('f_date2');
$_POST['label_value1002'] = $myrow16["label_value"];
$_POST['enable1002'] = $myrow16["enable"];
$_POST['s_position1002'] = $myrow16["s_position"];
$_POST['p_position1002'] = $myrow16["p_position"];

$_POST['s_width1002'] = $myrow16["s_width"];
$_POST['p_width1002'] = $myrow16["p_width"];


$myrow16 = get_company_hf_pref('f_date3');
$_POST['label_value1003'] = $myrow16["label_value"];
$_POST['enable1003'] = $myrow16["enable"];
$_POST['s_position1003'] = $myrow16["s_position"];
$_POST['p_position1003'] = $myrow16["p_position"];

$_POST['s_width1003'] = $myrow16["s_width"];
$_POST['p_width1003'] = $myrow16["p_width"];
start_outer_table(TABLESTYLE2);
table_section(1);
table_section_title(_("Customs Header/Footer Amounts Fields"));
echo
"<tr><td colspan='' class='tableheader'> &nbsp; Label &nbsp; </td>
		<td colspan='' class='tableheader'>&nbsp;Sales Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Sales Width &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Width&nbsp;</td>
		</tr>
		";



check_cells(_("Header Amount 1"), 'enable1', $_POST['enable1']);
echo"<tr>";
text_cells(_(""), 'label_value', $_POST['label_value'], 40);
text_cells5(_(""), 's_position1', $_POST['s_position1'], 10);
text_cells4(_(""), 'p_position1', $_POST['p_position1'], 10);
text_cells2(_(""), 's_width1', $_POST['s_width1'], 10);
text_cells3(_(""), 'p_width1', $_POST['p_width1'], 10);
echo"</tr>";
echo"</tr>";
check_cells(_("Header Amount 2"),'enable2', null);
echo"<tr>";
text_cells(_(""), 'label_value2', $_POST['label_value2'], 40);
text_cells5(_(""), 's_position2', $_POST['s_position2'], 10);
text_cells4(_(""), 'p_position2', $_POST['p_position2'], 10);
text_cells2(_(""), 's_width2', $_POST['s_width2'], 10);
text_cells3(_(""), 'p_width2', $_POST['p_width2'], 10);
echo"</tr>";



check_cells(_("Header Amount 3"), 'enable3', null);
echo"<tr>";
text_cells(_(""), 'label_value3', $_POST['label_value3'], 40);
text_cells5(_(""), 's_position3', $_POST['s_position3'], 10);
text_cells4(_(""), 'p_position3', $_POST['p_position3'], 10);
text_cells2(_(""), 's_width3', $_POST['s_width3'], 10);
text_cells3(_(""), 'p_width3', $_POST['p_width3'], 10);
echo"</tr>";

table_section_title(_("Customs Header/Footer Comments Fields"));
echo
"<tr><td colspan='' class='tableheader'> &nbsp; Label &nbsp; </td>
		<td colspan='' class='tableheader'>&nbsp;Sales Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Sales Width &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Width&nbsp;</td>
		</tr>
		";

check_cells(_("Footer Comment 1"), 'enable4', null);
echo"<tr>";
text_cells(_(""), 'label_value4', $_POST['label_value4'], 40);
text_cells5(_(""), 's_position4', $_POST['s_position4'], 10);
text_cells4(_(""), 'p_position4', $_POST['p_position4'], 10);
text_cells2(_(""), 's_width4', $_POST['s_width4'], 10);
text_cells3(_(""), 'p_width4', $_POST['p_width4'], 10);
echo"</tr>";



check_cells(_("Footer Comment 2"), 'enable5', null);
echo"<tr>";
text_cells(_(""), 'label_value5', $_POST['label_value5'], 40);
text_cells5(_(""), 's_position5', $_POST['s_position5'], 10);
text_cells4(_(""), 'p_position5', $_POST['p_position5'], 10);
text_cells2(_(""), 's_width5', $_POST['s_width5'], 10);
text_cells3(_(""), 'p_width5', $_POST['p_width5'], 10);
echo"</tr>";


check_cells(_("Footer Comment 3"), 'enable6', null);
echo"<tr>";
text_cells(_(""), 'label_value6', $_POST['label_value6'], 40);
text_cells5(_(""), 's_position6', $_POST['s_position6'], 10);
text_cells4(_(""), 'p_position6', $_POST['p_position6'], 10);
text_cells2(_(""), 's_width6', $_POST['s_width6'], 10);
text_cells3(_(""), 'p_width6', $_POST['p_width6'], 10);
echo"</tr>";



table_section_title(_("Customs Header/Footer Text Fields"));
echo
"<tr><td colspan='' class='tableheader'> &nbsp; Label &nbsp; </td>
		<td colspan='' class='tableheader'>&nbsp;Sales Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Sales Width &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Width&nbsp;</td>
		</tr>
		";

echo"<tr>";
check_cells(_("Footer Text Field 1"), 'enable7', null);
echo"<tr>";
text_cells(_(""), 'label_value7', $_POST['label_value7'], 40);
text_cells5(_(""), 's_position7', $_POST['s_position7'], 10);
text_cells4(_(""), 'p_position7', $_POST['p_position7'], 10);
text_cells2(_(""), 's_width7', $_POST['s_width7'], 10);
text_cells3(_(""), 'p_width7', $_POST['p_width7'], 10);
echo"</tr>";



check_cells(_("Footer Text Field 2"), 'enable8', null);
echo"<tr>";
text_cells(_(""), 'label_value8', $_POST['label_value8'], 40);
text_cells5(_(""), 's_position8', $_POST['s_position8'], 10);
text_cells4(_(""), 'p_position8', $_POST['p_position8'], 10);
text_cells2(_(""), 's_width8', $_POST['s_width8'], 10);
text_cells3(_(""), 'p_width8', $_POST['p_width8'], 10);
echo"</tr>";

check_cells(_("Footer Text Field 3"), 'enable88', null);
echo"<tr>";
text_cells(_(""), 'label_value88', $_POST['label_value88'], 40);
text_cells5(_(""), 's_position88', $_POST['s_position88'], 10);
text_cells4(_(""), 'p_position88', $_POST['p_position88'], 10);
text_cells2(_(""), 's_width88', $_POST['s_width88'], 10);
text_cells3(_(""), 'p_width88', $_POST['p_width88'], 10);
echo"</tr>";


check_cells(_("Header Text Field 1"), 'enable10', null);
echo"<tr>";
text_cells(_(""), 'label_value10', $_POST['label_value10'], 10);
text_cells5(_(""), 's_position10', $_POST['s_position10'], 10);
text_cells4(_(""), 'p_position10', $_POST['p_position10'], 10);
text_cells2(_(""), 's_width10', $_POST['s_width10'], 10);
text_cells3(_(""), 'p_width10', $_POST['p_width10'], 10);
echo"</tr>";

check_cells(_("Header Text Field 2"), 'enable110', null);
echo"<tr>";
text_cells(_(""), 'label_value110', $_POST['label_value110'], 40);
text_cells5(_(""), 's_position110', $_POST['s_position110'], 10);
text_cells4(_(""), 'p_position110', $_POST['p_position110'], 10);
text_cells2(_(""), 's_width110', $_POST['s_width110'], 10);
text_cells3(_(""), 'p_width110', $_POST['p_width110'], 10);
echo"</tr>";


check_cells(_("Header Text Field 3"), 'enable12', null);
echo"<tr>";
text_cells(_(""), 'label_value12', $_POST['label_value12'], 40);
text_cells5(_(""), 's_position12', $_POST['s_position12'], 10);
text_cells4(_(""), 'p_position12', $_POST['p_position12'], 10);
text_cells2(_(""), 's_width12', $_POST['s_width12'], 10);
text_cells3(_(""), 'p_width12', $_POST['p_width12'], 10);
echo"</tr>";

table_section_title(_("Customs Header/Footer Date Fields"));
echo
"<tr><td colspan='' class='tableheader'> &nbsp; Label &nbsp; </td>
		<td colspan='' class='tableheader'>&nbsp;Sales Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Sales Width &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Width&nbsp;</td>
		</tr>
		";

text_cells(_(""), 'label_value666', $_POST['label_value666'], 10);

echo"<tr>";
check_cells(_("Header Date Box 1"), 'enable102', null);
echo"<tr>";
text_cells(_(""), 'label_value102', $_POST['label_value102'], 40);
text_cells5(_(""), 's_position102', $_POST['s_position102'], 10);
text_cells4(_(""), 'p_position102', $_POST['p_position102'], 10);
text_cells2(_(""), 's_width102', $_POST['s_width102'], 10);
text_cells3(_(""), 'p_width102', $_POST['p_width102'], 10);
echo"</tr>";

check_cells(_("Header Date Box 2"), 'enable101', null);
echo"<tr>";
text_cells(_(""), 'label_value101', $_POST['label_value101'], 40);
text_cells5(_(""), 's_position101', $_POST['s_position101'], 10);
text_cells4(_(""), 'p_position101', $_POST['p_position101'], 10);
text_cells2(_(""), 's_width101', $_POST['s_width101'], 10);
text_cells3(_(""), 'p_width101', $_POST['p_width101'], 10);
echo"</tr>";

check_cells(_("Header Date Box 3"), 'enable102', null);
echo"<tr>";

text_cells(_(""), 'label_value100', $_POST['label_value100'], 40);
text_cells5(_(""), 's_position100', $_POST['s_position100'], 10);
text_cells4(_(""), 'p_position100', $_POST['p_position100'], 10);
text_cells2(_(""), 's_width100', $_POST['s_width100'], 10);
text_cells3(_(""), 'p_width100', $_POST['p_width100'], 10);
echo"</tr>";

check_cells(_("Footer Date Box 1"), 'enable1001', null);
echo"<tr>";

text_cells(_(""), 'label_value1001', $_POST['label_value1001'], 40);
text_cells5(_(""), 's_position1001', $_POST['s_position1001'], 10);
text_cells4(_(""), 'p_position1001', $_POST['p_position1001'], 10);
text_cells2(_(""), 's_width1001', $_POST['s_width1001'], 10);
text_cells3(_(""), 'p_width1001', $_POST['p_width1001'], 10);
echo"</tr>";



check_cells(_("Footer Date Box 2"), 'enable1002', null);
echo"<tr>";

text_cells(_(""), 'label_value1002', $_POST['label_value1002'], 40);
text_cells5(_(""), 's_position1002', $_POST['s_position1002'], 10);
text_cells4(_(""), 'p_position1002', $_POST['p_position1002'], 10);
text_cells2(_(""), 's_width1002', $_POST['s_width1002'], 10);
text_cells3(_(""), 'p_width1002', $_POST['p_width1002'], 10);
echo"</tr>";


check_cells(_("Footer Date Box 3"), 'enable1003', null);
echo"<tr>";

text_cells(_(""), 'label_value1003', $_POST['label_value1003'], 40);
text_cells5(_(""), 's_position1003', $_POST['s_position1003'], 10);
text_cells4(_(""), 'p_position1003', $_POST['p_position1003'], 10);
text_cells2(_(""), 's_width1003', $_POST['s_width1003'], 10);
text_cells3(_(""), 'p_width1003', $_POST['p_width1003'], 10);
echo"</tr>";

table_section_title(_("Customs Header/Footer Combo Box"));
echo
"<tr><td colspan='' class='tableheader'> &nbsp; Label &nbsp; </td>
		<td colspan='' class='tableheader'>&nbsp;Sales Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Position &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Sales Width &nbsp;</td>
		<td colspan='' class='tableheader'>&nbsp; Purchase Width&nbsp;</td>
		</tr>
		";

text_cells(_(""), 'label_value21', $_POST['label_value21'], 10);
echo"<tr>";
echo'<tr>';
echo'<td>';
echo'<h4>Footer Combo 1</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_1.php?", _("Combo 1 Setup"));
echo '<td>';
check_cells(_(""),'enable12', null);
echo '</td>';
echo '<td>';
echo"<tr>";
text_cells(_(""), 'label_value12', $_POST['label_value12'], 40);
text_cells5(_(""), 's_position12', $_POST['s_position12'], 10);
text_cells4(_(""), 'p_position12', $_POST['p_position12'], 10);
text_cells2(_(""), 's_width12', $_POST['s_width12'], 10);
text_cells3(_(""), 'p_width12', $_POST['p_width12'], 10);
echo"</tr>";

echo'<tr>';
echo'<td>';
echo'<h4>Footer Combo 2</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_2.php?", _("Combo 2 Setup"));
check_cells(_(""),'enable34', null);
echo '</td>';
echo"</td>";
echo"<tr>";
text_cells(_(""), 'label_value34', $_POST['label_value34'], 40);
text_cells5(_(""), 's_position34', $_POST['s_position34'], 10);
text_cells4(_(""), 'p_position34', $_POST['p_position34'], 10);
text_cells2(_(""), 's_width34', $_POST['s_width34'], 10);
text_cells3(_(""), 'p_width34', $_POST['p_width34'], 10);
echo"</tr>";

echo'<td>';
echo'<h4>Footer Combo 3</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_3.php?", _("Combo 3 Setup"));
check_cells(_(""),'enable34', null);
echo '</td>';
echo '</td>';
echo"<tr>";
text_cells(_(""), 'label_value34', $_POST['label_value34'], 40);
text_cells5(_(""), 's_position34', $_POST['s_position34'], 10);
text_cells4(_(""), 'p_position34', $_POST['p_position34'], 10);
text_cells2(_(""), 's_width34', $_POST['s_width34'], 10);
text_cells3(_(""), 'p_width34', $_POST['p_width34'], 10);
echo"</tr>";

echo'</tr>';
echo'<td>';
echo'<h4>Header Combo 4</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_4.php?", _("Combo 4 Setup"));
check_cells(_(""),'enable14', null);
echo '</td>';
echo '<tr>';
text_cells(_(""), 'label_value14', $_POST['label_value14'], 40);
text_cells5(_(""), 's_position14', $_POST['s_position14'], 10);
text_cells4(_(""), 'p_position14', $_POST['p_position14'], 10);
text_cells2(_(""), 's_width14', $_POST['s_width14'], 10);
text_cells3(_(""), 'p_width14', $_POST['p_width14'], 10);
echo"</tr>";

echo'</tr>';
echo'<td>';
echo'<h4>Header Combo 5</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_5.php?", _("Combo 5 Setup"));
check_cells(_(""),'enable15', null);
echo '</td>';
echo '</td>';
echo"<tr>";
text_cells(_(""), 'label_value15', $_POST['label_value15'], 40);
text_cells5(_(""), 's_position15', $_POST['s_position15'], 10);
text_cells4(_(""), 'p_position15', $_POST['p_position15'], 10);
text_cells2(_(""), 's_width15', $_POST['s_width15'], 10);
text_cells3(_(""), 'p_width15', $_POST['p_width15'], 10);
echo"</tr>";
echo'<td>';
echo'<h4>Header Combo 6</h4>';
hyperlink_params_separate("$path_to_root/sales/manage/combo_so_6.php?", _("Combo 6 Setup"));
check_cells(_(""),'enable35', null);
echo '</td>';
echo '</td>';
echo"<tr>";
text_cells(_(""), 'label_value35', $_POST['label_value35'], 40);
text_cells5(_(""), 's_position35', $_POST['s_position35'], 10);
text_cells4(_(""), 'p_position35', $_POST['p_position35'], 10);
text_cells2(_(""), 's_width35', $_POST['s_width35'], 10);
text_cells3(_(""), 'p_width35', $_POST['p_width35'], 10);
echo"</tr>";










end_outer_table(1);

//hidden('coy_logo', $_POST['coy_logo']);
submit_center('update', _("Update"), true, '',  'default');

div_end();

end_form(2);

//-------------------------------------------------------------------------------------------------

end_page();

