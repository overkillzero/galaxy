<?php
/* Smarty version 4.3.4, created on 2023-12-17 09:35:53
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657e5079f1b8c0_75235310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c53cb4de16b1cd823823ee554f6fc4f9ca718ea' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/index.tpl',
      1 => 1702776952,
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
function content_657e5079f1b8c0_75235310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/www/wwwroot/sieuthi5g.com/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Dashboard</title>
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
				<div class="row g-5 g-xl-10 mb-xl-10 mb-5">
					<div class="col-xxl-6">
						<div class="card card-flush">
							<div class="card-header border-0">
								<div class="card-title fs-3 fw-bolder">Thông tin gói dịch vụ</div>
								<div class="card-toolbar">
									<button class="btn btn-primary btn-sm" data-bs-toggle="modal"
										data-bs-target="#zero_modal_show_subscribe_info"><i
											class="bi bi-file-earmark-arrow-down"></i>Nhấp để đồng bộ máy chủ</button>
									<button class="btn btn-primary btn-sm d-none" type="button"
										data-bs-toggle="offcanvas" data-bs-target="#zero_canvas_show_subscribe_info"><i
											class="bi bi-file-earmark-arrow-down"></i>Nhấp để đồng bộ máy chủ</button>
								</div>
							</div>
							<div class="card-body pt-0">
								<div class="d-flex align-items-center mb-6 bg-light-warning rounded p-5">
									<span class="svg-icon svg-icon-warning svg-icon-1 me-5">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
											<path
												d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
											<path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
											<path
												d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
										</svg>
									</span>
									<div class="d-flex flex-column flex-grow-1 mr-2">
										<a class="fs-lg fw-bolder text-gray-800 mb-1">
											<?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire >= '2050-01-01 00:00:00') {?>
												<span class="counter">Hạn sử dụng:&nbsp;<span>Vĩnh Viễn</span></span>
											<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class_expire > smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S")) {?>
												<span class="counter">Hạn sử dụng:&nbsp;<span
														id="user_class_expired_time"></span></span>
											<?php } else { ?>
												<span class="counter">Hạn sử dụng:&nbsp;Chưa mua gói</span>
											<?php }?>
										</a>
										<span class="text-muted fw-semibold d-block">
											<?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire >= '2050-01-01 00:00:00') {?>
												Ngày hết hạn:&nbsp;Vô thời hạn
											<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class_expire > smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S")) {?>
												Ngày hết hạn:&nbsp;<?php echo substr($_smarty_tpl->tpl_vars['user']->value->class_expire,0,10);?>

											<?php } else { ?>
												<span></span>
											<?php }?>
										</span>
									</div>
									<div class="d-flex flex-column flex-grow-1 mr-2">
										<a class="fs-lg fw-bolder text-gray-800 mb-1">
											<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
												<span style="display:none">Hạn sử dụng:&nbsp;<span
														id="user_class_expired_time"></span></span>
											<?php } elseif ($_smarty_tpl->tpl_vars['user']->value->class <= 0) {?> 
												<!--<span class="counter">Hạn sử dụng:&nbsp;Chưa mua
													gói</span>-->
											<?php }?>
										</a>
										<span class="text-muted fw-semibold d-block">
											<?php if ($_smarty_tpl->tpl_vars['user']->value->class >= 1) {?>
												<!--Ngày hết hạn:&nbsp;<?php echo substr($_smarty_tpl->tpl_vars['user']->value->class_expire,0,10);?>
-->
											<?php }?>
										</span>
									</div>
									<div class="text-end">
										<a class="btn btn-sm hover-scale btn-icon" type="button"
											data-bs-toggle="tooltip" data-bs-placement="top" title="Gia hạn gói"
											onclick="KTUsersCreateOrder(3, '', '')">
											<i class="bi bi-database-add fs-2hx fw-bold text-warning hover-scale"></i>
										</a>
									</div>
								</div>
								<div class="d-flex align-items-center bg-light-success rounded p-5 mb-6">
									<span class="svg-icon svg-icon-success svg-icon-1 me-5">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z" />
										</svg>
									</span>
									<div class="d-flex flex-column flex-grow-1 mr-2">
										<a class="fw-bolder text-gray-800 fs-lg mb-1">
											Dung lượng đã dùng:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
 / <span
												id="traffic"><?php echo $_smarty_tpl->tpl_vars['user']->value->enableTraffic();?>
</span>
										</a>
										<span class="text-muted fw-semibold d-block">
											Ngày làm mới:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->productTrafficResetDate();?>

										</span>
									</div>
								</div>
								<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-6">
									<span class="svg-icon svg-icon-danger svg-icon-1 me-5">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
											<path
												d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
											<path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
										</svg>
									</span>
									<div class="d-flex flex-column flex-grow-1 mr-2">
										<a class="fw-bolder text-gray-800 fs-lg mb-1">
											IP Trực tuyến:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->onlineIPCount();?>
 /
											<?php if ($_smarty_tpl->tpl_vars['user']->value->node_iplimit === 0) {?>Không giới hạn<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value->node_iplimit;
}?>
										</a>
										<span class="text-muted fw-semibold d-block">
											Sử dùng gần nhất lúc:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->lastUseTime();?>

										</span>
									</div>
								</div>
								<div class="d-flex align-items-center bg-light-info rounded p-5">
									<span class="svg-icon svg-icon-info svg-icon-1 me-5">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
											<path
												d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
										</svg>
									</span>
									<div class="d-flex flex-column flex-grow-1 mr-2">
										<a class="fw-bolder text-gray-800 fs-lg mb-1">
											Số dư:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 ₫
										</a>
										<span class="text-muted fw-semibold d-block">
											Hoa hồng:&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->commission;?>
 ₫
										</span>
									</div>
									<div class="text-end">
										<a class="btn btn-sm hover-scale btn-icon" type="button" data-bs-toggle="modal"
											data-bs-target="#zero_user_add_credit_modal">
											<i class="bi bi-plus-circle fs-2hx fw-bold text-info"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-6">
						<div class="card card-flush mb-3">
							<div class="card-header">
								<div class="card-title  fw-bolder fs-3">Chi tiết sử dụng</div>
								<div class="card-toolbar">
									<span
										class="badge badge-light-primary badge fs-4 fw-semibold">Tốc độ giới hạn:<?php if ($_smarty_tpl->tpl_vars['user']->value->node_speedlimit == 0) {?> Không giới hạn<?php } else {
echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
Mbps<?php }?></span>
								</div>
							</div>
							<div class="card-body d-flex flex-column pt-0">
								<div id="zero_user_traffic_chart" data-kt-chart-color="primary"
									style="height: 100px; min-height: 100px;"></div>
							</div>
						</div>
						<div class="card card-flush h-250px">
							<div class="card-body d-flex flex-column">
								<div id="kt_carousel_3_carousel" class="carousel carousel-custom slide"
									data-bs-ride="carousel" data-bs-interval="8000">
									<div class="d-flex align-items-center justify-content-between flex-wrap">
										<span class="fs-3 fw-bolder">Thông báo</span>
										<ol
											class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
											<li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="0"
												class="ms-1 active"></li>
											<li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="1"
												class="ms-1"></li>
											<li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="2"
												class="ms-1"></li>
										</ol>
									</div>
									<div class="carousel-inner pt-2 scroll h-150px" id="zero_show_ann">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anns']->value, 'ann');
$_smarty_tpl->tpl_vars['ann']->iteration = 0;
$_smarty_tpl->tpl_vars['ann']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ann']->value) {
$_smarty_tpl->tpl_vars['ann']->do_else = false;
$_smarty_tpl->tpl_vars['ann']->iteration++;
$__foreach_ann_0_saved = $_smarty_tpl->tpl_vars['ann'];
?>
											<div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['ann']->iteration == 1) {?>active<?php }?>">
												<?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>

											</div>
										<?php
$_smarty_tpl->tpl_vars['ann'] = $__foreach_ann_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row g-5 g-xl-10 mb-xl-10">
					<div class="col-xxl-8">
						<div class="card card-flush h-350px">
							<div class="card-header">
								<div class="card-title">
									<div class="fw-bolder text-dark fs-h3">
										Hướng dẫn sử dụng
									</div>
								</div>

								<div class="card-toolbar">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1"
												data-bs-toggle="tab" href="#zero_user_doc_tab_android">Android</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
												data-bs-toggle="tab" href="#zero_user_doc_tab_ios">IOS</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1"
												data-bs-toggle="tab" href="#zero_user_doc_tab_macos">MACOS</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4"
												data-bs-toggle="tab" href="#zero_user_doc_tab_windows">Windows</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body pt-0 scroll">
								<div class="tab-content mt-5">
									<div class="tab-pane fade show active" id="zero_user_doc_tab_android">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['androidClients']->value, 'an');
$_smarty_tpl->tpl_vars['an']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['an']->value) {
$_smarty_tpl->tpl_vars['an']->do_else = false;
?>
											<div class="d-flex align-items-center flex-wrap mb-8">
												<div class="symbol symbol-30px symbol-md-40px symbol-light me-5">
													<div class="symbol-label"
														style="background-image:url(/theme/galaxy/media/app_logo/<?php echo $_smarty_tpl->tpl_vars['an']->value->client;?>
.png)">
													</div>
												</div>
												<div class="d-flex flex-column flex-grow-1 me-2">
													<a class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo ucfirst($_smarty_tpl->tpl_vars['an']->value->client);?>
</a>
												</div>
												<a href="/user/knowledge?os=android&client=<?php echo $_smarty_tpl->tpl_vars['an']->value->client;?>
"
													class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5">Xem</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
									<div class="tab-pane fade" id="zero_user_doc_tab_ios" role="tabpanel"
										aria-labelledby="zero_user_doc_tab_ios">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['iosClients']->value, 'ios');
$_smarty_tpl->tpl_vars['ios']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ios']->value) {
$_smarty_tpl->tpl_vars['ios']->do_else = false;
?>
											<div class="d-flex align-items-center flex-wrap mb-8">
												<div class="symbol symbol-30px symbol-md-40px symbol-light me-5">
													<div class="symbol-label"
														style="background-image:url(/theme/galaxy/media/app_logo/<?php echo $_smarty_tpl->tpl_vars['ios']->value->client;?>
.png)">
													</div>
												</div>
												<div class="d-flex flex-column flex-grow-1 mr-2">
													<a class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo ucfirst($_smarty_tpl->tpl_vars['ios']->value->client);?>
</a>
												</div>
												<a href="/user/knowledge?os=ios&client=<?php echo $_smarty_tpl->tpl_vars['ios']->value->client;?>
"
													class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5">Xem</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
									<div class="tab-pane fade" id="zero_user_doc_tab_macos" role="tabpanel"
										aria-labelledby="zero_user_doc_tab_macos">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['macosClients']->value, 'mac');
$_smarty_tpl->tpl_vars['mac']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mac']->value) {
$_smarty_tpl->tpl_vars['mac']->do_else = false;
?>
											<div class="d-flex align-items-center flex-wrap mb-8">
												<div class="symbol symbol-30px symbol-md-40px symbol-light me-5">
													<div class="symbol-label"
														style="background-image:url(/theme/galaxy/media/app_logo/<?php echo $_smarty_tpl->tpl_vars['mac']->value->client;?>
.png)">
													</div>
												</div>
												<div class="d-flex flex-column flex-grow-1 mr-2">
													<a class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo ucfirst($_smarty_tpl->tpl_vars['mac']->value->client);?>
</a>
												</div>
												<a href="/user/knowledge?os=macos&client=<?php echo $_smarty_tpl->tpl_vars['mac']->value->client;?>
"
													class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5">Xem</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
									<div class="tab-pane fade" id="zero_user_doc_tab_windows" role="tabpanel"
										aria-labelledby="zero_user_doc_tab_windows">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['windowsClients']->value, 'win');
$_smarty_tpl->tpl_vars['win']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['win']->value) {
$_smarty_tpl->tpl_vars['win']->do_else = false;
?>
											<div class="d-flex align-items-center flex-wrap mb-8">
												<div class="symbol symbol-40px symbol-light me-5">
													<div class="symbol-label"
														style="background-image:url(/theme/galaxy/media/app_logo/<?php echo $_smarty_tpl->tpl_vars['win']->value->client;?>
.png)">
													</div>
												</div>
												<div class="d-flex flex-column flex-grow-1 mr-2">
													<a class="fw-bold text-gray-800 fs-h5 mb-1"><?php echo ucfirst($_smarty_tpl->tpl_vars['win']->value->client);?>
</a>
												</div>
												<a href="/user/knowledge?os=windows&client=<?php echo $_smarty_tpl->tpl_vars['win']->value->client;?>
"
													class="badge badge-light-primary my-lg-0 my-2  fw-bolde fs-5">Xem</a>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4">
						<div class="card card-flush h-md-100"
							style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
							<div class="card-body">
								<div class="row align-items-center h-100">
									<div class="col-7 ps-xl-13">
										<div class="text-white mb-6 pt-6">
											<span
												class="fs-h4 fw-bold me-2 d-block lh-1 pb-2 opacity-75">Quà giới thiệu</span>
											<span class="fs-h2 fw-bolder">Nhận tiền triệu</span>
										</div>
										<span
											class="fw-bold text-white fs-h6 mb-8 d-block opacity-75">Giới thiệu người khác mua gói tại <?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>
 và bạn sẽ nhận được <?php echo $_smarty_tpl->tpl_vars['config']->value['rebate_ratio'];?>
% hoa hồng tương đương với giá trị gói họ mua</span>
										<span
											class="fw-bold text-white fs-h6 mb-8 d-block opacity-75">Sao chép liên kết giới thiệu bên dưới</span>
										<div class="d-flex flex-column flex-sm-row">
											<a type="button"
												class="btn btn-primary flex-shrink-0 mr-2 fw-bold copy-text"
												data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['invite_url']->value;?>
">Sao chép link mời</a>
										</div>
									</div>
									<div class="col-5 pt-10">
										<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
											style="background-image:url('/theme/galaxy/media/svg/illustrations/easy/5.svg');">
										</div>
									</div>
								</div>
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
<!-- add credit modal -->
<div class="modal fade" id="zero_user_add_credit_modal" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content shadow-lg">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLongTitle">Nạp số dư</h4>
			</div>
			<div class="modal-body">
				<label class="col-form-label fw-bold" for="add_credit_amount">Số tiền:</label>
				<div class="form-group">
					<div class="input-group" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="500000"
						data-kt-dialer-step="10000">
						<button class="btn btn-icon btn-outline btn-active-color-primary" type="button"
							data-kt-dialer-control="decrease">
							<i class="ki-duotone ki-minus fs-2"></i>
						</button>
						<input type="text" class="form-control" placeholder="amount" value="10000"
							data-kt-dialer-control="input" id="add_credit_amount" />
						<button class="btn btn-icon btn-outline btn-active-color-primary" type="button"
							data-kt-dialer-control="increase">
							<i class="ki-duotone ki-plus fs-2"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Hủy</button>
				<button type="submit" class="btn btn-primary" data-kt-users-action="submit"
					onclick="KTUsersCreateOrder(2, '', '')">
					<span class="indicator-label">Xác nhận</span>
					<span class="indicator-progress">Vui lòng chờ
						<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
			</div>
		</div>
	</div>
</div>
<!-- subscribe modal -->
<div class="modal fade" id="zero_modal_show_subscribe_info" tabindex="-1" role="dialog" aria-labelledby=""
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content shadow-lg">
			<div class="modal-body">
				<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 copy-text hover-scale"
					data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
">Sao chép liên kết đăng kí</a>
				<a class="btn btn-outline btn-active-light-primary d-flex flex-column hover-scale mb-1"
					data-bs-toggle="modal" data-bs-target="#zero_modal_show_subscribe_qrcode">Tạo mã QR đăng kí</a>
				<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
					onclick="oneclickImport('clash', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=clash')">Đồng bộ vào Clash</a>
				<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
					onclick="oneclickImport('clash', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=meta')">Đồng bộ vào Clash Meta</a>

			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="zero_modal_show_subscribe_qrcode" tabindex="-1" role="dialog" aria-labelledby=""
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm">
		<div class="modal-content shadow-lg">
			<div class="modal-body">
				<div class="mb-3 text-center" id="zero_subscribe_qrcode">
				</div>
				<div class="fs-5 text-center text-dark">Quét mã QR để đồng bộ máy chủ
				</div>
			</div>
		</div>
	</div>
</div>
<!-- mobile subscribe -->
<div class="offcanvas offcanvas-bottom" tabindex="-1" id="zero_canvas_show_subscribe_info">
	<div class="offcanvas-body">
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 copy-text hover-scale"
			data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
">Sao chép liên kết đăng kí</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column hover-scale mb-1" data-bs-toggle="modal"
			data-bs-target="#zero_modal_show_subscribe_qrcode">Tạo mã QR đăng kí</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('singbox', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=sing-box')">Đồng bộ vào SingBox</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('shadowrocket', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=shadowrocket')">Đồng bộ vào Shadowrocket</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('surfboard', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=surfboard')">Đồng bộ vào Surfboard</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('sagernet', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=sagernet')">Đồng bộ vào SagerNet</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('quantumultx', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
')">Đồng bộ vào QuantumultX</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('surge', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=surge')">Đồng bộ vào Surge</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('clash', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=clash')">Đồng bộ vào Clash</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('clash', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=meta')">Đồng bộ vào Clash Meta</a>
		<a class="btn btn-outline btn-active-light-primary d-flex flex-column mb-1 hover-scale"
			onclick="oneclickImport('v2rayng', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
&flag=v2rayng')">Đồng bộ vào V2rayNG</a>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/js/qrcode.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	<?php if (strtotime($_smarty_tpl->tpl_vars['user']->value->class_expire) > time()) {?>
		countdown('<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
', 'user_class_expired_time')
	<?php }?>
	$("#zero_subscribe_qrcode").qrcode({
		width: 200,
		height: 200,
		render: "canvas",
		text: "<?php echo $_smarty_tpl->tpl_vars['subInfo']->value;?>
"
	});

	$(window).on('resize load', function() {
		const isNarrowScreen = window.screen.width < 500;
		const targetCanvas = $('[data-bs-target="#zero_canvas_show_subscribe_info"]');
		const targetModal = $('[data-bs-target="#zero_modal_show_subscribe_info"]');

		targetCanvas.toggleClass('d-none', !isNarrowScreen);
		targetModal.toggleClass('d-none', isNarrowScreen);
	});
<?php echo '</script'; ?>
>
</body>

</html><?php }
}
