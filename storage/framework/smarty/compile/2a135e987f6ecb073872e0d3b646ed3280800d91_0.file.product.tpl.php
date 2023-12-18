<?php
/* Smarty version 4.3.4, created on 2023-12-16 21:31:07
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657da69b76c6a8_96514878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a135e987f6ecb073872e0d3b646ed3280800d91' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/product.tpl',
      1 => 1702733465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/index/news.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_657da69b76c6a8_96514878 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Product</title>

	<meta charset="UTF-8" />
	<meta name="renderer" content="webkit" />
	<meta name="description" content="Updates and statistics" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="format-detection" content="telephone=no,email=no" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
	<meta http-equiv="expires" content="0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="/theme/infinity/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/theme/infinity/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/theme/infinity/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="/favicon.png" rel="shortcut icon">
</head>
<?php $_smarty_tpl->_subTemplateRender('file:include/index/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<div class="d-flex flex-column flex-column-fluid mt-10">
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<div id="kt_app_content_container" class="app-container container-xxl">
				<div class="card" id="kt_pricing">
					<div class="card-body p-lg-17">
						<div class="d-flex flex-column">
							<div class="mb-13 text-center">
								<h1 class="fs-2hx fw-bold mb-5">Lựa chọn gói dịch vụ</h1>
								<div class="text-gray-400 fw-semibold fs-5"></div>
							</div>
							<div class="nav-group nav-group-outline mx-auto mb-15 nav" data-kt-buttons="true">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_tab_lists']->value, 'product_tab');
$_smarty_tpl->tpl_vars['product_tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_tab']->value) {
$_smarty_tpl->tpl_vars['product_tab']->do_else = false;
?>
									<button
										class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 <?php if ($_smarty_tpl->tpl_vars['product_tab']->value['type'] == 1) {?> active<?php }?>"
										data-bs-toggle="tab"
										data-bs-target="#product_tab_type_<?php echo $_smarty_tpl->tpl_vars['product_tab']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['product_tab']->value['name'];?>
</button>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
							<div class="tab-content">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_lists']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
									<div class="tab-pane fade show <?php if ($_smarty_tpl->tpl_vars['key']->value == 1) {?> active<?php }?>" id="product_tab_type_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
										<div class="row g-10">
											<?php if ($_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['key']->value] != '0') {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
													<?php if ($_smarty_tpl->tpl_vars['product']->value->type == $_smarty_tpl->tpl_vars['key']->value) {?>
														<div class="col-xl-4">
															<div class="d-flex h-100 align-items-center">
																<div
																	class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
																	<div class="mb-7 text-center">
																		<h1 class="text-dark mb-5 fw-bolder"
																			id="zero_product_name_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h1>
																		<div class="text-center">
																			<span
																				class="mb-2 text-primary fw-bold"><?php echo $_smarty_tpl->tpl_vars['currency_unit']->value;?>
</span>
																			<span class="fs-3x fw-bold text-primary"
																				id="zero_product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
																				<?php if ($_smarty_tpl->tpl_vars['product']->value->type == 1) {?>
																					<?php if ($_smarty_tpl->tpl_vars['product']->value->two_year_price != NULL) {?>
																						<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->two_year_price,0,'.','');?>

																					<?php } else { ?>	
																						<?php echo number_format($_smarty_tpl->tpl_vars['product']->value->month_price,0,'.','');?>

																					<?php }?>	
																				<?php }?>
																			</span>
																			<?php if ($_smarty_tpl->tpl_vars['product']->value->type == 1) {?>
																				<?php if ($_smarty_tpl->tpl_vars['product']->value->two_year_price == NULL) {?>
																					<br><span class="fs-7 fw-semibold opacity-50">
																						<span data-kt-element="period">Tháng</span></span>
																				<?php } else { ?>
																					<br><span class="fs-7 fw-semibold opacity-50">
																						<span data-kt-element="period">Vĩnh Viễn</span></span>
																				<?php }?>
																			<?php }?>
																			<?php if ($_smarty_tpl->tpl_vars['product']->value->type == 3) {?>
																				<span class="fs-7 fw-semibold opacity-50">/
																					<span data-kt-element="period">Dài hạn</span></span>
																			<?php }?>
																		</div>
																	</div>
																	<div class="w-100 mb-10" id="zero_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
																		<?php if (is_null($_smarty_tpl->tpl_vars['product']->value->custom_content)) {?>
																			<?php if ($_smarty_tpl->tpl_vars['product']->value->type == 2) {?>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Lưu
																						lượng:</span> <span
																						class="badge badge-success fw-bold fs-6"><?php echo $_smarty_tpl->tpl_vars['product']->value->traffic;?>
GB</span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span class="fw-semibold fs-6 text-gray-800 flex-grow-1">Mua
																						thêm lưu lượng cho gói hiện tại</span>
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg xmlns="http://www.w3.org/2000/svg" width="16"
																							height="16" fill="currentColor" class="bi bi-bell"
																							viewBox="0 0 16 16">
																							<path
																								d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span class="fw-semibold fs-6 text-gray-800 flex-grow-1">Chỉ
																						mua nếu đã có gói sẵn</span>
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg width="16" height="16" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path
																								d="M11.9626 4.00678C12.231 3.99278 12.4815 4.13007 12.6157 4.36567C12.6163 4.36567 12.6168 4.36567 12.6174 4.36567L20.9173 18.9131C21.2029 19.4142 20.8717 19.9932 20.2999 19.9932H3.7002C3.12849 19.9932 2.79723 19.4142 3.08287 18.9131L11.3827 4.36567C11.3833 4.36567 11.3838 4.36567 11.3844 4.36567C11.5052 4.15367 11.721 4.01968 11.9626 4.00678H11.9626Z"
																								stroke="#ffc700" stroke-linecap="square"
																								stroke-linejoin="round" stroke-width="2" />
																							<path
																								d="M12 18C12.5523 18 13 17.5523 13 17C13 16.4477 12.5523 16 12 16C11.4477 16 11 16.4477 11 17C11 17.5523 11.4477 18 12 18Z"
																								fill="#ffc700" />
																							<path d="M12 15V8" stroke="#ffc700"
																								stroke-width="2" />
																						</svg>
																					</span>
																				</div>
																			<?php } else { ?>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Lưu
																						lượng:</span> <span
																						class="badge badge-success fw-bold fs-6"><?php echo $_smarty_tpl->tpl_vars['product']->value->traffic;?>
GB</span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Giới
																						hạn thiết bị</span><span
																						class="badge badge-success fw-bold fs-6"><?php if (empty($_smarty_tpl->tpl_vars['product']->value->ip_limit)) {?>Không
																						giới hạn<?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->ip_limit;?>
&nbsp;Thiết
																						bị<?php }?></span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Tốc
																						độ tối đa: </span><?php if (empty($_smarty_tpl->tpl_vars['product']->value->speed_limit)) {?><span
																							class="badge badge-success fw-bold fs-6">Không giới
																						hạn</span><?php } else {
echo $_smarty_tpl->tpl_vars['product']->value->speed_limit;?>

																					Mbps<?php }?>&nbsp;</span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Quy
																						tắc hạn chế:</span><span
																						class="badge badge-success fw-bold fs-6">Không&nbsp;</span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span
																						class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Quyền
																						truy cập:</span><span
																						class="badge badge-success fw-bold fs-6"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPermission($_smarty_tpl->tpl_vars['product']->value->class);?>
&nbsp;</span>
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg width="24" height="24" viewBox="0 0 24 24"
																							fill="none" xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2" y="2" width="20"
																								height="20" rx="10" fill="currentColor" />
																							<path
																								d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</div>
																				<div class="d-flex align-items-center mb-5">
																					<span class="fw-semibold fs-6 text-gray-800 flex-grow-1">Có
																						thể sử dụng máy chủ ≤
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->getPermission($_smarty_tpl->tpl_vars['product']->value->class);?>
</span>
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg xmlns="http://www.w3.org/2000/svg" width="16"
																							height="16" fill="currentColor" class="bi bi-bell"
																							viewBox="0 0 16 16">
																							<path
																								d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
																						</svg>
																					</span>
																				</div>
																			<?php }?>
																		<?php } else { ?>
																			<?php echo $_smarty_tpl->tpl_vars['product']->value->custom_content;?>

																		<?php }?>
																	</div>
																	<?php if ($_smarty_tpl->tpl_vars['product']->value->stock > 0 && $_smarty_tpl->tpl_vars['product']->value->stock-$_smarty_tpl->tpl_vars['product']->value->realTimeSales() <= 0) {?>
																		<button class="btn btn-sm fw-bold btn-primary" disabled>Đã hết
																			hàng</button>
																	<?php } else { ?>
																		<button class="btn btn-sm fw-bold btn-primary" type="submit"
																			data-kt-users-action="check-out-<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"
																			data-bs-toggle="modal"
																			onclick="kTUserConfigureProductModal(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
)">
																			<span class="indicator-label">Mua gói</span>
																			<span class="indicator-progress">Vui lòng chờ
																				<span
																					class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>

																	<?php }?>
																</div>
															</div>
														</div>
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</div>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<div class="text-dark-75 order-2 order-md-1">
				&copy;<?php echo '<script'; ?>
>
					document.write(new Date().getFullYear());
				<?php echo '</script'; ?>
>&nbsp;<a>Bản quyền thuộc về&nbsp;<?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
</a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="zero_modal_configure_product" data-bs-backdrop="static" data-bs-keyboard="false"
	tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<div class="modal-content rounded">
			<div class="modal-header justify-content-end border-0 pb-0">
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<span class="svg-icon svg-icon-1">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
								transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
								fill="currentColor" />
						</svg>
					</span>
				</div>
			</div>
			<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
				<div class="mb-13 text-center">
					<h1 class="mb-3">Chi tiết gói dịch vụ</h1>
				</div>
				<div class="d-flex flex-column">
					<div class="row mt-10 g-5">
						<div class="col-lg-7">
							<div class="tab-content rounded h-100 bg-light p-10">
								<div class="tab-pane fade show active">
									<div class="pb-5">
										<h2 class="fw-bold text-dark">Gói này báo gồm:</h2>
										<!--<div class="text-muted fw-semibold">for light users</div>-->
									</div>
									<div class="w-100 mb-10" id="zero_modal_configure_product_inner_html">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="card card-dashed mb-5" id="zero_modal_configure_coupon_html">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<input class="form-control me-3" placeholder="Mã giảm giá" type="text"
											id="zero_coupon_code">
										<button id="zero_modal_configure_coupon" type="submit"
											data-kt-users-action="verify-coupon"
											class="btn btn-light fw-bold flex-shrink-0" onclick="KTUserVerifyCoupon()">
											<span class="indicator-label">Xác nhận</span>
											<span class="indicator-progress">Vui lòng chờ
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
								</div>
							</div>
							<div class="card card-dashed card-flush mb-5">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<span class="fw-semibold text-gray-00 fs-4 flex-grow-1 pe-3"
											id="zero_modal_configure_product_name"></span>
										<span class="fw-semibold text-gray-800 fs-4"
											id="zero_modal_configure_product_price"></span>
									</div>
									<div class="separator my-10"></div>
									<div class="d-flex align-items-center">
										<span class="fw-semibold fs-4 flex-grow-1 pe-3">Tổng cộng</span>
										<span class="fw-bold fs-2" id="zero_modal_configure_product_total"></span>
									</div>
								</div>
							</div>
							<div class="card card-dashed card-flush">
								<div class="card-body">

									<ul class="nav nav-pills d-flex flex-column flex-sm-row justify-content-center"
										role="tablist">
										<li class="nav-item mb-3 d-flex flex-column"
											id="zero_modal_configure_product_month_price">

										</li>

										<li class="nav-item mb-3 d-flex flex-column"
											id="zero_modal_configure_product_quarter_price">

										</li>

										<li class="nav-item mb-3 d-flex flex-column"
											id="zero_modal_configure_product_half_year_price">

										</li>

										<li class="nav-item mb-3 d-flex flex-column"
											id="zero_modal_configure_product_year_price">

										</li>
										<li class="nav-item d-flex flex-column"
											id="zero_modal_configure_product_two_year_price">

										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-center flex-row-fluid pt-12">
					<button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Hủy</button>
					<button type="submit" class="btn btn-primary" data-kt-users-action="submit" onclick="">
						<span class="indicator-label">Xác nhận</span>
						<span class="indicator-progress">Vui lòng chờ
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>
	var currency_unit = "<?php echo $_smarty_tpl->tpl_vars['currency_unit']->value;?>
";
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	$("#zero_modal_configure_product").on('hidden.bs.modal', function() {
		$("#zero_modal_configure_product_month_price").html('');
		$("#zero_modal_configure_product_quarter_price").html('');
		$("#zero_modal_configure_product_half_year_price").html('');
		$("#zero_modal_configure_product_year_price").html('');
		$("#zero_modal_configure_product_two_year_price").html('');
		console.log('clean success');
	});
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
