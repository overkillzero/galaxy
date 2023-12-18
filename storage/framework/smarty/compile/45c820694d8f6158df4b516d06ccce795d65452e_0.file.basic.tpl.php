<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e00dc2_96436373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45c820694d8f6158df4b516d06ccce795d65452e' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/basic.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e00dc2_96436373 (Smarty_Internal_Template $_smarty_tpl) {
?>
                                            <div class="tab-pane fade show active" id="zero_admin_nav_website" role="tabpanel" aria-labelledby="zero_admin_nav_website_tab" tabindex="0">
                                                <div class="card card-bordered mb-5">
                                                    <div class="card-header">
                                                        <div class="card-title fw-bolder">Cấu hình cơ bản</div>
                                                        <div class="card-toolbar">
                                                            <button class="btn btn-light-primary btn-sm" onclick="updateAdminConfigSettings('website')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row g-5">
                                                            <div class="col-xxl-6">
                                                                <label class="form-label" for="website_url">Địa chỉ trang web</label>
                                                                <input class="form-control mb-5" id="website_url" name="website_url" type="text" placeholder="Địa chỉ trang web" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_url'];?>
" />
                                                                <label class="form-label" for="website_name">Tên trang web</label>
                                                                <input class="form-control mb-5" id="website_name" name="website_name" type="text" placeholder="Tên trang web" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_name'];?>
" />
                                                                <label class="form-label" for="website_landing_index">LANDING INDEX</label>
                                                                <input class="form-control mb-5" data-bs-toggle="tooltip" title="Không chỉnh sửa nếu không hiểu rõ" id="website_landing_index" name="website_landing_index" type="text" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_landing_index'];?>
" />
                                                                <label class="form-label" for="website_admin_path">Đường đẫn trang quản lý</label>
                                                                <input class="form-control mb-5" id="website_admin_path" name="website_admin_path" type="text" placeholder="Đường dẫn trang quản " value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_admin_path'];?>
" />
                                                            </div>
                                                            <div class="col-xxl-6">
                                                                <label class="form-label" for="website_security_token">TOKEN Bảo mật</label>
                                                                <input class="form-control mb-5" data-bs-toggle="tooltip" title="Điền theo ý muốn, phức tạp nhất có thể" id="website_security_token" name="website_security_token" type="text" placeholder="TOKEN" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_security_token'];?>
" />
                                                                <label class="form-label" for="website_backend_token">TOKEN Phụ trợ</label>
                                                                <input class="form-control mb-5" data-bs-toggle="tooltip" title="Cần dùng khi chạy node" id="website_backend_token" name="website_backend_token" type="text" placeholder="token" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_backend_token'];?>
" />
                                                                <label class="form-label" for="website_auth_background_image">Hình nền trang web</label>
                                                                <input class="form-control mb-5" data-bs-toggle="tooltip" title="Hình nền ở trang đăng nhập" id="website_auth_background_image" name="website_auth_background_image" type="text" placeholder="Nhập link hình ảnh" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['website_auth_background_image'];?>
" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-5">
                                                    <div class="col-xxl-6">
                                                        <div class="card card-bordered">
                                                            <div class="card-header">
                                                                <div class="card-title fw-bolder">Tùy chỉnh nhóm quyền</div>
                                                                <div class="card-toolbar">
                                                                    <button class="btn btn-light-primary btn-sm" onclick="updateAdminConfigSettings('permission_group')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">                                                                  
                                                                <label class="form-label" for="enable_permission_group">Bật/tắt tùy chỉnh nhóm quyền</label>
                                                                <select class="form-select mb-5" id="enable_permission_group" data-control="select2" data-hide-search="true">
                                                                    <option value="0">Tắt</option>
                                                                    <option value="1">Bật</option>
                                                                </select>
                                                                <span class="form-label">Cài đặt tên nhóm quyền</span>
                                                                <div id="permission_group_detail" class="mt-3"></div>                                                                   
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }
}
