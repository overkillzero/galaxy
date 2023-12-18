<?php
/* Smarty version 4.3.4, created on 2023-12-17 12:19:47
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/auth/signin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657e76e3841b32_35118237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c985c86917ba0ae17342ad73c3bafcee123a659' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/auth/signin.tpl',
      1 => 1702786785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657e76e3841b32_35118237 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>
 - Đăng nhập</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<link rel="shortcut icon" href="/favicon.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="/theme/infinity/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/theme/infinity/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<?php echo '<script'; ?>
>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }<?php echo '</script'; ?>
>
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url(<?php if (empty($_smarty_tpl->tpl_vars['config']->value['website_auth_background_image'])) {?>'/theme/infinity/media/auth/bg4.jpg'<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['website_auth_background_image'];
}?>); } [data-bs-theme="dark"] body { background-image: url(<?php if (empty($_smarty_tpl->tpl_vars['config']->value['website_auth_background_image'])) {?>'/theme/infinity/media/auth/bg4-dark.jpg'<?php } else {
echo $_smarty_tpl->tpl_vars['config']->value['website_auth_background_image'];
}?>); }</style>
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<div class="d-flex flex-center flex-lg-start flex-column">
						<a href="" class="mb-7 fs-3hx fw-bold text-white"><?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>
</a>						
					</div>
				</div>
				<div class="d-flex flex-center w-lg-50 p-10">
					<div class="card rounded-3 w-md-550px">
						<div class="card-body p-10 p-lg-20">							
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="/user/dashboard" action="#">								
								<div class="text-center mb-11">
									<h1 class="text-dark fw-bolder mb-6">Đăng nhập</h1>
								</div>
								<div class="fv-row mb-8">
									<input type="text" placeholder="Email" name="email" autocomplete="off" id="signin-email" data-kt-translate="sign-in-input-email" class="form-control form-control-lg bg-transparent" />
								</div>
								<div class="fv-row mb-8">
									<input type="password" placeholder="Mật khẩu" name="password" autocomplete="off" id="signin-passwd" data-kt-translate="sign-in-input-password" class="form-control form-control-lg bg-transparent" />
								</div>
								<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_signin_captcha'] == true && $_smarty_tpl->tpl_vars['config']->value['captcha_provider'] == 'turnstile' && $_smarty_tpl->tpl_vars['captcha']->value['turnstile_sitekey'] != '') {?>
									<div class="fv-row mb-8">
										<div class="cf-turnstile" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['captcha']->value['turnstile_sitekey'];?>
" data-theme="light"></div>
									</div>
								<?php }?>
								<div class="d-grid mb-10">
									<button id="kt_sign_in_submit" class="btn btn-primary">
										<span class="indicator-label" data-kt-translate="sign-in-submit">Đăng nhập</span>
										<span class="indicator-progress">
											<span data-kt-translate="general-progress">Vui lòng chờ</span>
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
										</span>
									</button>									
								</div>
								<div class="text-gray-500 text-center fw-semibold fs-6">
									<span><a class="link-primary" href="/auth/signup">Đăng ký</a></span>
									|
									<span><a href="/password/reset" class="link-primary" data-kt-translate="sign-in-forgot-password">Quên mật khẩu</a></span>
								</div>
							</form>
						</div>
					</div>
				</div>				
			</div>
			<div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
				<div class="app-container container-fluid d-flex flex-column flex-center py-3">
					<div class="text-white order-2 order-md-1 text-center">
						&copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>,&nbsp;<span>Bản quyền thuộc về&nbsp;<?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
</span>
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
 src="/js/auth/signin.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/js/i18nextBrowserLanguageDetector.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/js/i18next.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/js/language.js"><?php echo '</script'; ?>
>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_signin_captcha'] === true && $_smarty_tpl->tpl_vars['config']->value['captcha_provider'] === 'turnstile') {?>
			<?php echo '<script'; ?>
 src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer><?php echo '</script'; ?>
>
		<?php }?>
	</body>
</html><?php }
}
