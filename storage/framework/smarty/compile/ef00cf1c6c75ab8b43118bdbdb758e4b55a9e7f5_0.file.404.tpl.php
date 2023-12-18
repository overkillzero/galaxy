<?php
/* Smarty version 4.3.4, created on 2023-12-05 19:09:26
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656f04e67c62b4_75221358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef00cf1c6c75ab8b43118bdbdb758e4b55a9e7f5' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/404.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656f04e67c62b4_75221358 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="vi">
	
	<head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value['website_name'];?>
</title>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		
		
		<link href="/theme/galaxy/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/theme/galaxy/css/style.bundle.css" rel="stylesheet" type="text/css" />
		
	</head>
	
	
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		
		<?php echo '<script'; ?>
>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }<?php echo '</script'; ?>
>
		
		
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			
			<style>body { background-image: url('theme/galaxy/media/auth/bg1.jpg'); } [data-theme="dark"] body { background-image: url('theme/galaxy/media/auth/bg1-dark.jpg'); }</style>
			
			
			<div class="d-flex flex-column flex-center flex-column-fluid">
				
				<div class="d-flex flex-column flex-center text-center p-10">
					
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							
							<h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!</h1>
							
							
							<div class="fw-semibold fs-6 text-gray-500 mb-7">We can't find that page.</div>
							
							
							<div class="mb-3">
								<img src="/theme/galaxy/media/auth/404-error.png" class="mw-100 mh-300px theme-light-show" alt="" />
								<img src="/theme/galaxy/media/auth/404-error-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
							</div>
							
							
							<div class="mb-0">
								<a href="/user/dashboard" class="btn btn-sm btn-primary">Return Home</a>
							</div>
							
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		
		<?php echo '<script'; ?>
>var hostUrl = "assets/";<?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="/theme/galaxy/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/theme/galaxy/js/scripts.bundle.js"><?php echo '</script'; ?>
>
		
		
	</body>
	
</html><?php }
}
