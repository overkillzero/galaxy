<?php
/* Smarty version 4.3.4, created on 2023-12-17 12:22:02
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/auth/soon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657e776a2b9d16_81441023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e263ae13477a0507f912cbf602dca3c576bdc6c0' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/auth/soon.tpl',
      1 => 1702786916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657e776a2b9d16_81441023 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>
 Coming Soon</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="/favicon.png" rel="shortcut icon">
		<link href="/theme/infinity/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/theme/infinity/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<?php echo '<script'; ?>
>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }<?php echo '</script'; ?>
>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url('/theme/infinity/media/auth/bg9.jpg'); } [data-theme="dark"] body { background-image: url('/theme/infinity/media/auth/bg9-dark.jpg'); }</style>
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<div class="d-flex flex-column flex-center text-center p-10">
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<div class="mb-13">
								<a href="/auth/signin" class="fs-3hx fw-bolder text-dark">
                                    <?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>

								</a>
							</div>
							<h1 class="fw-bolder text-gray-900 mb-7">Hiện tại chưa thể đăng kí tài khoản</h1>
                            <!--
                            <div class="d-flex flex-center pb-10 pt-lg-5 pb-lg-12">
                                <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                    <div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_days"></div>
                                    <div class="fs-7 fw-semibold text-muted">days</div>
                                </div>
                                <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                    <div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_hours"></div>
                                    <div class="fs-7 text-muted">hrs</div>
                                </div>
                                <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                    <div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_minutes"></div>
                                    <div class="fs-7 text-muted">min</div>
                                </div>
                                <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                    <div class="fs-2 fw-bold text-gray-800" id="kt_coming_soon_counter_seconds"></div>
                                    <div class="fs-7 text-muted">sec</div>
                                </div>
                            </div>
                            -->
							<div class="fw-semibold fs-6 text-gray-500 mb-7">Trang web đang tiến hành một số cập nhật
							<br>Hãy thử lại sau</div>
                            <!--
							<form class="w-md-350px mb-2 mx-auto" action="#" id="kt_coming_soon_form">
								<div class="fv-row text-start">
									<div class="d-flex flex-column flex-md-row justify-content-center gap-3">
										<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control" />
										<button class="btn btn-primary text-nowrap" id="kt_coming_soon_submit">
											<span class="indicator-label">Notify Me</span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
								</div>
							</form>
                            -->
							<div class="mb-n5">
								<img src="/theme/infinity/media/auth/chart-graph.png" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="/theme/infinity/media/auth/chart-graph-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo '<script'; ?>
 src="/theme/infinity/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/theme/infinity/js/scripts.bundle.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/theme/infinity/js/custom/authentication/sign-up/coming-soon.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}