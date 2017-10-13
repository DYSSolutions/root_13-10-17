<?php

$page_security = 'SA_GLSETUP';
$path_to_root="..";
include($path_to_root . "/includes/session.inc");

$js = "";
if ($SysPrefs->use_popup_windows && $SysPrefs->use_popup_search)
	$js .= get_js_open_window(900, 500);

page(_($help_context = "System and General GL Setup"), false, false, "", $js);

include_once($path_to_root . "/includes/date_functions.inc");
include_once($path_to_root . "/includes/ui.inc");
include_once($path_to_root . "/includes/data_checks.inc");

include_once($path_to_root . "/admin/db/company_db.inc");

//-------------------------------------------------------------------------------------------------

function can_process()
{
	if (!check_num('po_over_receive', 0, 100))
	{
		display_error(_("The delivery over-receive allowance must be between 0 and 100."));
		set_focus('po_over_receive');
		return false;
	}

	if (!check_num('po_over_charge', 0, 100))
	{
		display_error(_("The invoice over-charge allowance must be between 0 and 100."));
		set_focus('po_over_charge');
		return false;
	}

	if (!check_num('past_due_days', 0, 100))
	{
		display_error(_("The past due days interval allowance must be between 0 and 100."));
		set_focus('past_due_days');
		return false;
	}

	$grn_act = get_company_pref('grn_clearing_act');
	$post_grn_act = get_post('grn_clearing_act');
	if ($post_grn_act == null)
		$post_grn_act = 0;
	if (($post_grn_act != $grn_act) && db_num_rows(get_grn_items(0, '', true)))
	{
		display_error(_("Before GRN Clearing Account can be changed all GRNs have to be invoiced"));
		$_POST['grn_clearing_act'] = $grn_act;
		set_focus('grn_clearing_account');
		return false;
	}
	if (!is_account_balancesheet(get_post('retained_earnings_act')) || is_account_balancesheet(get_post('profit_loss_year_act')))
	{
		display_error(_("The Retained Earnings Account should be a Balance Account or the Profit and Loss Year Account should be an Expense Account (preferred the last one in the Expense Class)"));
		return false;
	}
	return true;
}

//-------------------------------------------------------------------------------------------------

if (isset($_POST['submit']) && can_process())
{
	update_company_prefs( get_post( array( 'retained_earnings_act', 'profit_loss_year_act',
		'debtors_act', 'pyt_discount_act', 'creditors_act', 'freight_act', 'deferred_income_act',
		'exchange_diff_act', 'bank_charge_act', 'default_sales_act', 'default_sales_discount_act',
		'default_prompt_payment_act', 'default_inventory_act', 'default_cogs_act', 'depreciation_period',
		'default_loss_on_asset_disposal_act', 'default_adj_act', 'default_inv_sales_act', 'default_wip_act', 'legal_text',
		'past_due_days', 'default_workorder_required', 'default_dim_required', 'default_receival_required',
		'default_delivery_required', 'default_quote_valid_days', 'grn_clearing_act', 'tax_algorithm',
		'no_zero_lines_amount', 'show_po_item_codes','hide_prices_grn','show_doc_ref', 'accounts_alpha', 'loc_notification', 'print_invoice_no',
		'allow_negative_prices', 'print_item_images_on_quote', 
		'allow_negative_stock'=> 0, 'accumulate_shipping'=> 0,
		'po_over_receive' => 0.0, 'po_over_charge' => 0.0, 'default_credit_limit'=>0.0,
		'discount1', 'discount2', 'discount_algorithm', 'show_prices_dn','alt_uom'
)));

	display_notification(_("The general GL setup has been updated."));

} /* end of if submit */

//-------------------------------------------------------------------------------------------------
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Shadow and Glow Transitions</title>

        <style>

            [class^="hvr-"] {
                background:#3c8dbc;
                color: #FFFFFF;
                cursor: pointer;
                margin: 0;
                padding:20px;
                text-decoration: none;

            }


            /* SHADOW/GLOW TRANSITIONS */
            /* Glow */
            .hvr-glow {

                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow;
                transition-property: box-shadow;
            }
            .hvr-glow:hover, .hvr-glow:focus, .hvr-glow:active {
                box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
            }

            /* Shadow */
            .hvr-shadow {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow;
                transition-property: box-shadow;
            }
            .hvr-shadow:hover, .hvr-shadow:focus, .hvr-shadow:active {
                box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
            }

            /* Grow Shadow */
            .hvr-grow-shadow {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow, transform;
                transition-property: box-shadow, transform;
            }
            .hvr-grow-shadow:hover, .hvr-grow-shadow:focus, .hvr-grow-shadow:active {
                box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);
                -webkit-transform: scale(1.1);
                transform: scale(1.1);
            }

            /* Box Shadow Outset */
            .hvr-box-shadow-outset {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow;
                transition-property: box-shadow;
            }
            .hvr-box-shadow-outset:hover, .hvr-box-shadow-outset:focus, .hvr-box-shadow-outset:active {    color: #000203;
                box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
            }

            /* Box Shadow Inset */
            .hvr-box-shadow-inset {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: box-shadow;
                transition-property: box-shadow;
                box-shadow: inset 0 0 0 rgba(0, 0, 0, 0.6), 0 0 1px rgba(0, 0, 0, 0);
                /* Hack to improve aliasing on mobile/tablet devices */
            }
            .hvr-box-shadow-inset:hover, .hvr-box-shadow-inset:focus, .hvr-box-shadow-inset:active {    color: #000203;
                box-shadow: inset 2px 2px 2px rgba(0, 0, 0, 0.6), 0 0 1px rgba(0, 0, 0, 0);
                /* Hack to improve aliasing on mobile/tablet devices */
            }


            /* Float Shadow */
            .hvr-float-shadow {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                position: relative;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: transform;
                transition-property: transform;
            }
            .hvr-float-shadow:before {
                pointer-events: none;
                position: absolute;
                z-index: -1;
                content: '';
                top: 100%;
                left: 5%;
                height: 10px;
                width: 90%;
                opacity: 0;
                background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
                background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
                /* W3C */
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: transform, opacity;
                transition-property: transform, opacity;
            }

            .hvr-float-shadow:hover, .hvr-float-shadow:focus, .hvr-float-shadow:active {   background:#006699;   color: #000203;
                -webkit-transform: translateY(-5px);
                transform: translateY(-5px);
                /* move the element up by 5px */
            }
            .hvr-float-shadow:hover:before, .hvr-float-shadow:focus:before, .hvr-float-shadow:active:before {
                opacity: 1;
                -webkit-transform: translateY(5px);
                transform: translateY(5px);
                /* move the element down by 5px (it will stay in place because it's attached to the element that also moves up 5px) */
            }

            /* Shadow Radial */
            .hvr-shadow-radial {
                display: inline-block;
                vertical-align: middle;
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                -moz-osx-font-smoothing: grayscale;
                position: relative;
            }
            .hvr-shadow-radial:before, .hvr-shadow-radial:after {
                pointer-events: none;
                position: absolute;
                content: '';
                left: 0;
                width: 100%;
                box-sizing: border-box;
                background-repeat: no-repeat;
                height: 5px;
                opacity: 0;
                -webkit-transition-duration: 0.3s;
                transition-duration: 0.3s;
                -webkit-transition-property: opacity;
                transition-property: opacity;
            }
            .hvr-shadow-radial:before {
                bottom: 100%;
                background: -webkit-radial-gradient(50% 150%, ellipse, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
                background: radial-gradient(ellipse at 50% 150%, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
            }
            .hvr-shadow-radial:after {
                top: 100%;
                background: -webkit-radial-gradient(50% -50%, ellipse, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
                background: radial-gradient(ellipse at 50% -50%, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0) 80%);
            }
            .hvr-shadow-radial:hover:before, .hvr-shadow-radial:focus:before, .hvr-shadow-radial:active:before, .hvr-shadow-radial:hover:after, .hvr-shadow-radial:focus:after, .hvr-shadow-radial:active:after {
                opacity: 1;
            }

        </style>
    </head>

    <body>



<center>
        <td><a class="hvr-float-shadow" href="gl_setup.php"><i class="fa fa-dashboard " style="margin-right: 5px; font-size: large;">  </i> MAIN</a></td>

        <td><a class="hvr-float-shadow" href="so_pref.php"><i class="fa fa-line-chart" style="margin-right: 5px; font-size: large;"></i> SALES PREF</a></td>
        <td><a class="hvr-float-shadow" href="purch_pref.php"><i class="fa fa-shopping-cart" style="margin-right: 5px; font-size: large;"></i> PURCHASE PREF</a></td>

        <td><a class="hvr-float-shadow" href="item_pref.php"><i class="fa fa-barcode" style="margin-right: 5px; font-size: large;"></i> ITEM PREF</a></td>
        <td><a class="hvr-float-shadow" href="company_preferences_new.php"><i class="fa fa-circle-o" style="font-size: large; margin-right: 5px;"></i> FORM DISPLAY</a></td>
        <td><a class="hvr-float-shadow" href="print_from_setup.php"><i class="fa fa-pie-chart" style="font-size: large; margin-right: 5px;"></i> REPORT DISPLAY</a></td>

        <td><a class="hvr-float-shadow" href="import_gl_setup.php"><i class="fa fa-ship" style="font-size: large; margin-right: 5px;"></i> IMPORT GL</a></td>
        <td><a class="hvr-float-shadow" href="cashflow_gl.php"><i class="fa fa-area-chart" style="margin-right: 5px; font-size: large;"></i> CASH FLOW</a></td>
        <td><a class="hvr-float-shadow" href="wht_type.php"><i class="fa fa-text-width" style="margin-right: 5px; font-size: large;"></i> WHT GL</a></td>
    <td><a class="hvr-float-shadow" href="wht_type.php"><i class="fa fa-text-width" style="margin-right: 5px; font-size: large;"></i> HEADER</a></td>

</center>


    </body>
    </html>


<?php
start_form();

start_outer_table(TABLESTYLE2);

table_section(1);

$myrow = get_company_prefs();

$_POST['retained_earnings_act']  = $myrow["retained_earnings_act"];
$_POST['profit_loss_year_act']  = $myrow["profit_loss_year_act"];
$_POST['debtors_act']  = $myrow["debtors_act"];
$_POST['creditors_act']  = $myrow["creditors_act"];
$_POST['freight_act'] = $myrow["freight_act"];
$_POST['deferred_income_act'] = $myrow["deferred_income_act"];
$_POST['pyt_discount_act']  = $myrow["pyt_discount_act"];

$_POST['exchange_diff_act'] = $myrow["exchange_diff_act"];
$_POST['bank_charge_act'] = $myrow["bank_charge_act"];
$_POST['alt_uom'] = $myrow["alt_uom"];
$_POST['tax_algorithm'] = $myrow["tax_algorithm"];
$_POST['default_sales_act'] = $myrow["default_sales_act"];
$_POST['default_sales_discount_act']  = $myrow["default_sales_discount_act"];
$_POST['default_prompt_payment_act']  = $myrow["default_prompt_payment_act"];

$_POST['default_inventory_act'] = $myrow["default_inventory_act"];
$_POST['default_cogs_act'] = $myrow["default_cogs_act"];
$_POST['default_adj_act'] = $myrow["default_adj_act"];
$_POST['default_inv_sales_act'] = $myrow['default_inv_sales_act'];
$_POST['default_wip_act'] = $myrow['default_wip_act'];

$_POST['allow_negative_stock'] = $myrow['allow_negative_stock'];

$_POST['po_over_receive'] = percent_format($myrow['po_over_receive']);
$_POST['po_over_charge'] = percent_format($myrow['po_over_charge']);
$_POST['past_due_days'] = $myrow['past_due_days'];

$_POST['grn_clearing_act'] = $myrow['grn_clearing_act'];

$_POST['default_credit_limit'] = $myrow['default_credit_limit'];
$_POST['legal_text'] = $myrow['legal_text'];
$_POST['accumulate_shipping'] = $myrow['accumulate_shipping'];

$_POST['default_workorder_required'] = $myrow['default_workorder_required'];
$_POST['default_dim_required'] = $myrow['default_dim_required'];
$_POST['default_delivery_required'] = $myrow['default_delivery_required'];
$_POST['default_receival_required'] = $myrow['default_receival_required'];
$_POST['default_quote_valid_days'] = $myrow['default_quote_valid_days'];
$_POST['no_zero_lines_amount'] = $myrow['no_zero_lines_amount'];
$_POST['show_po_item_codes'] = $myrow['show_po_item_codes'];
$_POST['hide_prices_grn'] = $myrow['hide_prices_grn'];
$_POST['show_doc_ref'] = $myrow['show_doc_ref'];
$_POST['accounts_alpha'] = $myrow['accounts_alpha'];
$_POST['loc_notification'] = $myrow['loc_notification'];
$_POST['print_invoice_no'] = $myrow['print_invoice_no'];
$_POST['allow_negative_prices'] = $myrow['allow_negative_prices'];
$_POST['print_item_images_on_quote'] = $myrow['print_item_images_on_quote'];
$_POST['default_loss_on_asset_disposal_act'] = $myrow['default_loss_on_asset_disposal_act'];
$_POST['depreciation_period'] = $myrow['depreciation_period'];
$_POST['discount1'] = $myrow['discount1'];
$_POST['discount2'] = $myrow['discount2'];
$_POST['discount_algorithm'] = $myrow['discount_algorithm'];
$_POST['show_prices_dn'] = $myrow['show_prices_dn'];

//---------------


table_section_title(_("General GL"));

text_row(_("Past Due Days Interval:"), 'past_due_days', $_POST['past_due_days'], 6, 6, '', "", _("days"));

accounts_type_list_row(_("Accounts Type:"), 'accounts_alpha', $_POST['accounts_alpha']); 

gl_all_accounts_list_row(_("Retained Earnings:"), 'retained_earnings_act', $_POST['retained_earnings_act']);

gl_all_accounts_list_row(_("Profit/Loss Year:"), 'profit_loss_year_act', $_POST['profit_loss_year_act']);

gl_all_accounts_list_row(_("Exchange Variances Account:"), 'exchange_diff_act', $_POST['exchange_diff_act']);

gl_all_accounts_list_row(_("Bank Charges Account:"), 'bank_charge_act', $_POST['bank_charge_act']);

tax_algorithm_list_row(_("Tax Algorithm:"), 'tax_algorithm', $_POST['tax_algorithm']);
check_cells("Alt UOM functionality :",'alt_uom', $_POST['alt_uom']);
//---------------

table_section_title(_("Dimension Defaults"));

text_row(_("Dimension Required By After:"), 'default_dim_required', $_POST['default_dim_required'], 6, 6, '', "", _("days"));

//----------------

table_section_title(_("Customers and Sales"));

text_row(_("Default Credit Limit:"), 'default_credit_limit', $_POST['default_credit_limit'], 12, 12);

yesno_list_row(_("Invoice Identification:"), 'print_invoice_no', $_POST['print_invoice_no'], $name_yes=_("Number"), $name_no=_("Reference"));

check_row(_("Accumulate batch shipping:"), 'accumulate_shipping', null);

check_row(_("Print Item Image on Quote:"), 'print_item_images_on_quote', null);

textarea_row(_("Legal Text on Invoice:"), 'legal_text', $_POST['legal_text'], 32, 4);

gl_all_accounts_list_row(_("Shipping Charged Account:"), 'freight_act', $_POST['freight_act']);

gl_all_accounts_list_row(_("Deferred Income Account:"), 'deferred_income_act', $_POST['deferred_income_act'], true, false,
	_("Not used"), false, false, false);

//---------------

table_section_title(_("Customers and Sales Defaults"));
// default for customer branch
gl_all_accounts_list_row(_("Receivable Account:"), 'debtors_act');

gl_all_accounts_list_row(_("Sales Account:"), 'default_sales_act', null, false, false, true);

gl_all_accounts_list_row(_("Sales Discount Account:"), 'default_sales_discount_act');

gl_all_accounts_list_row(_("Prompt Payment Discount Account:"), 'default_prompt_payment_act');

text_row(_("Quote Valid Days:"), 'default_quote_valid_days', $_POST['default_quote_valid_days'], 6, 6, '', "", _("days"));

text_row(_("Delivery Required By:"), 'default_delivery_required', $_POST['default_delivery_required'], 6, 6, '', "", _("days"));

gl_all_accounts_list_row(_("Discount 1:"), 'discount1', null, false, false, true);

gl_all_accounts_list_row(_("Discount 2:"), 'discount2', null, false, false, true);

discount_algorithm_list_row(_("Discount Algorithm:"), 'discount_algorithm', $_POST['discount_algorithm']);

check_row(_("Show prices on Delivery Note:"), 'show_prices_dn', null);

//---------------

table_section(2);

table_section_title(_("Suppliers and Purchasing"));

percent_row(_("Delivery Over-Receive Allowance:"), 'po_over_receive');

percent_row(_("Invoice Over-Charge Allowance:"), 'po_over_charge');

table_section_title(_("Suppliers and Purchasing Defaults"));

gl_all_accounts_list_row(_("Payable Account:"), 'creditors_act', $_POST['creditors_act']);

gl_all_accounts_list_row(_("Purchase Discount Account:"), 'pyt_discount_act', $_POST['pyt_discount_act']);

gl_all_accounts_list_row(_("GRN Clearing Account:"), 'grn_clearing_act', get_post('grn_clearing_act'), true, false, _("No postings on GRN"));

text_row(_("Receival Required By:"), 'default_receival_required', $_POST['default_receival_required'], 6, 6, '', "", _("days"));

check_row(_("Show PO item codes:"), 'show_po_item_codes', null);

check_row(_("Hide prices on GRN:"), 'hide_prices_grn', null);

check_row(_("Show document reference instead of id:"), 'show_doc_ref', null);

table_section_title(_("Inventory"));

check_row(_("Allow Negative Inventory:"), 'allow_negative_stock', null);
label_row(null, _("Warning:  This may cause a delay in GL postings"), "", "class='stockmankofg' colspan=2"); 

check_row(_("No zero-amounts (Service):"), 'no_zero_lines_amount', null);

check_row(_("Location Notifications:"), 'loc_notification', null);

check_row(_("Allow Negative Prices:"), 'allow_negative_prices', null);

table_section_title(_("Items Defaults"));
gl_all_accounts_list_row(_("Sales Account:"), 'default_inv_sales_act', $_POST['default_inv_sales_act']);

gl_all_accounts_list_row(_("Inventory Account:"), 'default_inventory_act', $_POST['default_inventory_act']);
// this one is default for items and suppliers (purchase account)
gl_all_accounts_list_row(_("C.O.G.S. Account:"), 'default_cogs_act', $_POST['default_cogs_act']);

gl_all_accounts_list_row(_("Inventory Adjustments Account:"), 'default_adj_act', $_POST['default_adj_act']);

gl_all_accounts_list_row(_("WIP Account:"), 'default_wip_act', $_POST['default_wip_act']);

//----------------

table_section_title(_("Fixed Assets Defaults"));

gl_all_accounts_list_row(_("Loss On Asset Disposal Account:"), 'default_loss_on_asset_disposal_act', $_POST['default_loss_on_asset_disposal_act']);

array_selector_row (_("Depreciation Period:"), 'depreciation_period', $_POST['depreciation_period'], array(FA_MONTHLY => _("Monthly"), FA_YEARLY => _("Yearly")));

//----------------

table_section_title(_("Manufacturing Defaults"));

text_row(_("Work Order Required By After:"), 'default_workorder_required', $_POST['default_workorder_required'], 6, 6, '', "", _("days"));

//----------------

end_outer_table(1);

submit_center('submit', _("Update"), true, '', 'default');

end_form(2);

//-------------------------------------------------------------------------------------------------

end_page();

