<?php
/* Smarty version 4.3.4, created on 2023-12-17 21:49:18
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/ban.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657efc5ec7d380_92473711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7afed65050021f6c81fef6b5eed22c7defba76d' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/ban.tpl',
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
    'file:table/lang_chinese.tpl' => 2,
  ),
),false)) {
function content_657efc5ec7d380_92473711 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="vi">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Quản lý lệnh cấm</title>
        
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
                                    <div class="card mb-9">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">Quản lý lệnh cấm</div>
                                            <div class="card-toolbar">
                                                <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#zero_modal_create_ban_rule">Thêm quy tắc</button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                        </div>  
                                    </div>
                                    <div class="card mb-9">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">Lịch sử cấm</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_ban_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">  
                                                        <th>ID</th>
                                                        <th>USER ID</th>
                                                        <th>Số lần vi phạm</th>
                                                        <th>Thời gian cấm (phút)</th>
                                                        <th>Thời gian bắt đầu</th>
                                                        <th>Thời gian kết thúc</th>
                                                        <th>Tổng số lần cấm</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-600 fw-semibold"></tbody>
                                            </table>
                                        </div>  
                                    </div>
                                    <div class="card mb-9">
                                        <div class="card-header">
                                            <div class="card-title text-dark fs-3 fw-bolder">Lịch sử kiểm tra</div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table align-middle table-striped table-row-bordered text-nowrap gy-5 gs-7" id="zero_admin_detect_record">
                                                <thead>
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">  
                                                        <th>ID</th>
                                                        <th>USER ID</th>
                                                        <th>ID Máy chủ</th>
                                                        <th>ID Quy tắc</th>
                                                        <th>Thời gian</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="text-gray-600 fw-semibold"></tbody>
                                            </table>
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

        <!--create modal-->
        <div class="modal fade" id="zero_modal_create_ban_rule" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
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
                            <h1 class="mb-3">Thêm quy tắc</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="zero_create_ban_rule_name">
                                <span class="required">Tên quy tắc</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Nhập tên quy tắc" id="zero_create_ban_rule_name">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="zero_create_ban_rule_description">
                                <span class="required">Mô tả quy tắc</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Mô tả quy tắc" id="zero_create_ban_rule_description">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2" for="zero_create_ban_rule_regular_expressions">
                                <span class="required">Biểu hiện</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Nhập biểu hiện vi phạm" id="zero_create_ban_rule_regular_expressions">
                        </div>                   
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2" for="zero_create_ban_rule_type">
                                <span class="required">Loại quy tắc</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="zero_create_ban_rule_type">
                                <option value="1">Khớp dữ liệu gói tin</option>
                                <option value="2">Phù hợp HEX của gói tin</option>
                            </select>
                        </div>
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-create-ban-rule-action="submit" onclick="zeroAdminCreateBanRule()">
                                <span class="indicator-label">Thêm quy tắc</span>
                                <span class="indicator-progress">Vui lòng chờ
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!--编辑-->
        <div class="modal fade" id="zero_modal_update_ban_rule" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
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
                            <h1 class="mb-3">Chỉnh sửa quy tắc</h1>
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="zero_update_ban_rule_name">
                                <span class="required">Tên quy tắc</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Nhập tên quy tắc" id="zero_update_ban_rule_name">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2" for="zero_update_ban_rule_description">
                                <span class="required">Mô tả quy tắc</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Mô tả quy tắc" id="zero_update_ban_rule_description">
                        </div>
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2" for="zero_update_ban_rule_regular_expressions">
                                <span class="required">Biểu hiện</span>
                            </label>
                            <input type="text" value="" class="form-control form-control-solid" placeholder="Nhập biểu hiện vi phạm" id="zero_update_ban_rule_regular_expressions">
                        </div>                   
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2" for="zero_update_ban_rule_type">
                                <span class="required">Loại quy tắc</span>
                            </label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" id="zero_update_ban_rule_type">
                                <option value="1">Khớp dữ liệu gói tin</option>
                                <option value="2">Phù hợp HEX của gói tin</option>
                            </select>
                        </div>
                        <div class="d-flex flex-center flex-row-fluid pt-12">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" data-kt-admin-update-ban-rule-action="submit" onclick="">
                                <span class="indicator-label">Lưu thay đổi</span>
                                <span class="indicator-progress">Vui lòng chờ
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:admin/script.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            function zeroAdminUpdateBanRule(type, id) {
                const submitButton = document.querySelector('[data-kt-admin-update-ban-rule-action="submit"]');
                switch (type){
                    case 'request':
                        $.ajax({
                            type: "POST",
                            url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/ban/rule/request",
                            dataType: "json",
                            data:{
                                id,
                            },
                            success: function(data){
                                $('#zero_update_ban_rule_name').val(data.name);
                                $('#zero_update_ban_rule_description').val(data.text);
                                $('#zero_update_ban_rule_regular_expressions').val(data.regex);
                                $('#zero_update_ban_rule_type').val(data.type);
                                submitButton.setAttribute('onclick', 'zeroAdminUpdateBanRule("update", '+data.id+')')
                                $('#zero_modal_update_ban_rule').modal('show');
                            }
                        });
                        break;
                    case 'update':
                        submitButton.setAttribute('data-kt-indicator', 'on');
                        submitButton.disabled = true;
                        setTimeout(function () {
                            $.ajax({
                                type: "PUT",
                                url: "ban/rule/update",
                                dataType: "json",
                                data: {
                                    name: $('#zero_update_ban_rule_name').val(),
                                    text: $('#zero_update_ban_rule_description').val(),
                                    regex: $('#zero_update_ban_rule_regular_expressions').val(),
                                    type: $('#zero_update_ban_rule_type').val(),
                                    id
                                },
                                success: function (data) {
                                    if (data.ret == 1) {
                                        setTimeout(function() {
                                           // getResult(data.msg, '', 'success');
                                            submitButton.removeAttribute('data-kt-indicator');
                                            submitButton.disabled = false;
                                            location.reload();
                                        }, 1500);
                                    } else {
                                        getResult(data.msg, '', 'error');
                                        submitButton.removeAttribute('data-kt-indicator');
                                        submitButton.disabled = false;
                                    }
                                }
                            });
                        }, 2000);
                        break;
                }
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            function zeroAdminCreateBanRule(){
                const submitButton = document.querySelector('[data-kt-admin-create-ban-rule-action="submit"]');
                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;
                $.ajax({
                    type: "POST",
                    url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/ban/rule/create",
                    dataType: "json",
                    data: {
                        name: $('#zero_create_ban_rule_name').val(),
                        text: $('#zero_create_ban_rule_description').val(),
                        regex: $('#zero_create_ban_rule_regular_expressions').val(),
                        type: $('#zero_create_ban_rule_type').val()
                    },
                    success: function (data) {
                        if (data.ret == 1) {
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;
                            location.reload();
                        } else {
                            getResult(data.msg, '', 'error');
                            submitButton.removeAttribute('data-kt-indicator');
                            submitButton.disabled = false;
                        }
                    }
                });
            }
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            KTAdminBanRecord = $('#zero_admin_ban_record').DataTable({
            ajax: {
            url: "<?php echo $_smarty_tpl->tpl_vars['table_config_ban_record']->value['ajax_url'];?>
",
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 },
                { orderable: false, targets: '_all' },
                { orderable: true, targets: 0}
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_ban_record']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            })
    
            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
    
        <?php echo '</script'; ?>
>
    
        <?php echo '<script'; ?>
>
            KTAdminDetectRecord = $('#zero_admin_detect_record').DataTable({
            ajax: {
            url: "<?php echo $_smarty_tpl->tpl_vars['table_config_detect_record']->value['ajax_url'];?>
",
            type: "POST"
            },
            processing: true,
            serverSide: true,
            order: [[ 0, 'desc' ]],
            stateSave: true,
            columnDefs: [
                { className: 'text-end', targets: -1 },
                { orderable: false, targets: '_all' },
                { orderable: true, targets: 0}
            ],
            columns: [
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config_detect_record']->value['total_column'], 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            ],
            <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            })
    
            var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
