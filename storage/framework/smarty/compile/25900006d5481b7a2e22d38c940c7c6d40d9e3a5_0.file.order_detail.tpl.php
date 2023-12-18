<?php
/* Smarty version 4.3.4, created on 2023-12-05 11:10:21
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/order_detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656e949dad5598_21498227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25900006d5481b7a2e22d38c940c7c6d40d9e3a5' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/order_detail.tpl',
      1 => 1701745819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
    'file:include/index/news.tpl' => 1,
  ),
),false)) {
function content_656e949dad5598_21498227 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Thông tin đơn hàng</title>
        
        <meta charset="UTF-8" />
        <meta name="renderer" content="webkit" />
        <meta name="description" content="Updates and statistics" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="format-detection" content="telephone=no,email=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
        <meta http-equiv="expires" content="0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <link href="/theme/galaxy/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/galaxy/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/galaxy/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/favicon.png" rel="shortcut icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
    <?php $_smarty_tpl->_subTemplateRender('file:include/index/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    
                                    <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                        
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h2><?php echo $_smarty_tpl->tpl_vars['trans']->value->t('order');?>
 #<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
</h2>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="card-body pt-0">
                                            <div class="table-responsive">
                                                
                                                <table class="table align-middle table-striped table-row-bordered gy-5 gs-7 mb-0">
                                                    
                                                    <thead>
                                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="min-w-175px">Kiểu</th>
                                                            <th class="min-w-70px text-end">Trạng thái</th>
															
                                                            <th class="min-w-70px text-end">Phương thức thanh toán</th>
                                                            
                                                            <th class="min-w-100px text-end">Mã đơn hàng</th>
                                                            <th class="min-w-70px text-end">Số lượng</th>
                                                            <th class="min-w-100px text-end">Giá</th>
                                                            <th class="min-w-100px text-end">Tổng cộng</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    
                                                    <tbody class="fw-semibold text-gray-600">
                                                        
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="ms-5">
                                                                        <a class="fw-bold text-gray-600 text-hover-primary"><?php echo $_smarty_tpl->tpl_vars['order_type']->value[$_smarty_tpl->tpl_vars['order']->value->order_type];?>
</a>
                                                                        <div class="fs-7 text-muted">Ngày: <?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['order']->value->created_at);?>
</div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            
                                                            <td class="text-end">
                                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->order_status == '1') {?>
                                                                <span class="badge badge-warning fs-6 fw-bold">Đang chờ</span>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['order']->value->order_status == '2') {?>
                                                                <span class="badge badge-success fs-6 fw-bold">Đã thanh toán</span>
																<?php } elseif ($_smarty_tpl->tpl_vars['order']->value->order_status == '0') {?>
																<span class="badge badge-danger fs-6 fw-bold">Đã hủy</span>	
                                                                <?php }?>   
                                                            </td>
															
															<td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->payment();?>
</td>
															
                                                            <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
</td>                                                           
                                                            <td class="text-end">1</td>
                                                            <?php if ($_smarty_tpl->tpl_vars['order']->value->order_type == '2') {?>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>                                                           
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                            <?php } else { ?>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->product_price;?>
</td>                                                           
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->product_price;?>
</td>
                                                            <?php }?>                                       
                                                        </tr>                                                                                                              
                                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->order_type != '2') {?>                                                                                                            
                                                            <tr>
                                                                <td colspan="6" class="text-end">Trừ số dư</td>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->credit_paid;?>
</td>
                                                            </tr>                                                       
                                                            <tr>
                                                                <td colspan="6" class="text-end">Giảm giá</td>
                                                                <td class="text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->discount_amount;?>
</td>
                                                            </tr>
                                                        <?php }?>
                                                                                            
                                                        <tr>
                                                            <td colspan="6" class="fs-3 text-dark text-end">Tổng cộng</td>
                                                            <td class="text-dark fs-3 fw-bolder text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                        </tr>
														
														<?php if ($_smarty_tpl->tpl_vars['order']->value->order_status == '2') {?>
														<tr>
                                                            <td colspan="6" class="fs-3 text-dark text-end">Đã thanh toán</td>
                                                            <td class="text-dark fs-3 fw-bolder text-end"><?php echo $_smarty_tpl->tpl_vars['order']->value->order_total;?>
</td>
                                                        </tr>
														<?php }?>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                                
                                            </div>
											<?php if ($_smarty_tpl->tpl_vars['order']->value->order_status === 1) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['order']->value->order_total != 0) {?>
                                                    <div class="col-lg-12">
                                                        <label class="col-form-label fs-3 fw-bold">Phương thức thanh toán:</label>                                                       
                                                        <ul class="nav nav-pills d-flex flex-column flex-md-row justify-content-center" role="tablist" id="payment_method">                                                         
                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_0_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                                                <li class="nav-item mb-3">
                                                                    <a class="btn btn-outline btn-active-light-primary d-flex flex-column <?php if ($_smarty_tpl->tpl_vars['payment']->iteration == 1) {?>active<?php }?>" <?php if ($_smarty_tpl->tpl_vars['payment']->value->gateway == 'PayPal') {?> id="payment_paypal_<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"<?php } else { ?> id="payment_others_<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"<?php }?> data-bs-toggle="pill" data-payment-id="<?php echo $_smarty_tpl->tpl_vars['payment']->value->id;?>
"  data-payment-uuid="<?php echo $_smarty_tpl->tpl_vars['payment']->value->uuid;?>
">
                                                                        
                                                                        <img class="h-35px w-auto" src=<?php echo $_smarty_tpl->tpl_vars['payment']->value->icon;?>
>
                                                                        
                                                                        <span class="fs-3 py-2 fw-bold"><?php echo $_smarty_tpl->tpl_vars['payment']->value->name;?>
</span>
                                                                    </a>
                                                                </li>
                                                            <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </ul>
                                                    </div>
                                                <?php }?>
                                                <div class="text-center pt-15">
                                                    <button class="btn btn-primary" type="submit" data-kt-users-action="submit" onclick="KTUsersPayOrder('<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
')">
                                                        <span class="indicator-label">Xác nhận</span>
                                                        <span class="indicator-progress">Vui lòng chờ
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_1_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                                    <?php if (($_smarty_tpl->tpl_vars['payment']->value->gateway == 'PayPal')) {?>
                                                        <?php echo '<script'; ?>
 src="https://www.paypal.com/sdk/js?client-id=Aa69h7psOgN_5Gp20yOP0eOuYBKsKZapS0ZK_RvWTl57ZZTS_SDoCvtG3j0_1R_hcp2sSl8-2f7Jik5R&currency=<?php echo $_smarty_tpl->tpl_vars['paypal_currency_unit']->value;?>
&disable-funding=credit,card"><?php echo '</script'; ?>
>
                                                        <!-- Set up a container element for the button -->
                                                        <div id="paypal-button-container" class="text-center"></div>
                                                    <?php }?>
                                                <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                
                                            <?php }?>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
                            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <div class="text-dark-75 order-2 order-md-1">
                                    &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>,&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
,&nbsp;Inc.&nbsp;All rights reserved.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_2_saved = $_smarty_tpl->tpl_vars['payment'];
?>
            <?php if (($_smarty_tpl->tpl_vars['payment']->value->gateway == 'PayPal')) {?>
                <?php echo '<script'; ?>
>
                    paypal
                    .Buttons({
                        
                    // Sets up the transaction when a payment button is clicked
                    createOrder: function () {
                        return fetch("/user/order/pay_order", {
                        method: "post",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        // use the "body" param to optionally pass additional order information
                        // like product skus and quantities
                        body: JSON.stringify({
                            payment_id: $("#payment_method a.active").attr("data-payment-id"),
                            order_no: '<?php echo $_smarty_tpl->tpl_vars['order']->value->order_no;?>
',
                        }),
                        })
                        .then((response) => response.json())
                        .then((order) => order.id);
                    },
                    // Finalize the transaction after payer approval
                    onApprove: function (data) {
                        return fetch("/payment/notify/PayPal/"+$("#payment_method a.active").attr("data-payment-uuid"), {
                        method: "post",
                        headers: {
                            "Content-Type": "application/json",
                        },
                        body: JSON.stringify({
                            orderID: data.orderID,
                        }),
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            location.reload();
                        });
                    },
                    })
                    .render("#paypal-button-container");

                    $('[id^=payment_paypal_]').on('click', function() {
                        $('button[type^="submit"]').addClass('d-none');
                        $('#paypal-button-container').removeClass('d-none');
                    });
                    $('[id^=payment_others_]').on('click', function() {
                        $('button[type^="submit"]').removeClass('d-none');
                        $('#paypal-button-container').addClass('d-none');
                    });
                    $('#paypal-button-container').addClass('d-none');
                    
                <?php echo '</script'; ?>
>
            <?php }?>
        <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </body>
</html><?php }
}
