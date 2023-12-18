<?php
/* Smarty version 4.3.4, created on 2023-12-05 14:41:57
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/ticket/ticket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656ec6358b9886_23748530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d184609095029c4876367cea3eeae46923ea9e' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/ticket/ticket.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/menu.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:admin/script.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_656ec6358b9886_23748530 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Quản lý hỗ trợ</title>
        
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
        <link href="/theme/infinity/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/infinity/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/theme/infinity/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="/favicon.png" rel="shortcut icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">
    </head>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid mt-10">
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">Quản lý phiếu hỗ trợ</div>
                                            <div class="card-toolbar">
												<button class="btn btn-primary fw-bold btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#zero_modal_create_ticket">
                                                <i class="bi bi-cloud-plus fs-3"></i>Tạo phiếu hỗ trợ
                                                </button>
											</div>
                                        </div>
                                        <div class="card-body">
                                            <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal -->
        <div class="modal fade" id="zero_modal_create_ticket" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content rounded">
                    <div class="modal-header justify-content-end border-0 pb-0">
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">                       
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                            
                        </div>
                    </div>
                    <div class="modal-body scroll-y pt-0 pb-15 px-5 px-xl-20">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Tạo phiếu hỗ trợ</h1>
                        </div>
                        <form class="rounded border mt-10">
							<div class="d-block">
                                <div class="border-bottom">
                                    <select class="form-select" id="zero_admin_create_ticket_userid" data-control="select2" data-placeholder="Chọn một người dùng">
                                        <option></option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'allUser');
$_smarty_tpl->tpl_vars['allUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['allUser']->value) {
$_smarty_tpl->tpl_vars['allUser']->do_else = false;
?>
                                            <option value=<?php echo $_smarty_tpl->tpl_vars['allUser']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['allUser']->value->email;?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
								<div class="border-bottom">
									<select id="zero_admin_create_ticket_type" class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Loại phiếu hỗ trợ">
										<option></option>
										<option value="support">Hỗ trợ chung</option>
										<option value="account">Tài khoản</option>
										<option value="billing">Thanh toán</option>
										<option value="sales">Mua hàng</option>
									</select>
								</div>															
								<div class="border-bottom">
									<input class="form-control border-0 px-8 min-h-45px" id="zero_admin_create_ticket_subject" placeholder="Tiêu đề" />
								</div>
								<div id="zero_admin_ticket_editor" class="border-0 h-250px px-3"></div>
							</div>
							<div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
								<div class="d-flex align-items-center me-3">
									<button class="btn btn-primary fs-bold px-6" data-kt-users-action="submit" onclick="zeroAdminCreateTicket()">
										<span class="indicator-label">Tạo phiếu</span>
										<span class="indicator-progress">Vui lòng chờ
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</div>
						</form>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php echo '<script'; ?>
>
			var quill = new Quill("#zero_admin_ticket_editor", {
				modules: {
					toolbar: [
						[{
							header: [1, 2, !1]
						}],
						["bold", "italic", "underline"],
					]
				},
				placeholder: "",
				theme: "snow"
   			});
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.addEventListener('load', () => {
                <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminCreateTicket(){
                const submitButton = document.querySelector('[data-kt-admin-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                var text = editorsCreate.getData();
                setTimeout(function () {
                    $.ajax({
                        type: "POST",
                        url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/ticket/create",
                        dataType: "json",
                        data: {
                            subject: $("#zero_admin_create_ticket_subject").val(),
                            user_id: $("#zero_admin_create_ticket_userid").val(),
                            type: $("#zero_admin_create_ticket_type").val(),
                            content: text
                        },
                        success: function (data) {
                            if (data.ret == 1) {
                                getResult(data.msg, '', 'success');
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                                $('#zero_modal_create_ticket').modal('hide');
                                table_1.ajax.reload();
                            } else {
                                getResult(data.msg, '', 'error');
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;
                            }
                        }
                    });
                }, 2000);
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminCloseTicket(id) {
                $.ajax({
                    type: "PUT",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/ticket/close",
                    dataType: "json",
                    data: {
                        id
                    },
                    success: function (data) {
                        getResult(data.msg, '', 'success');
                        table_1.ajax.reload();
                    }
                });
            }
        <?php echo '</script'; ?>
>
        
    </body>
</html><?php }
}
