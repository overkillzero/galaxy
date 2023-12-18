<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/subscribe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e2f078_18139768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d02ce91c0aecf928195bd94508aa6838872866e' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/subscribe.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e2f078_18139768 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                <div class="tab-pane fade" id="zero_admin_nav_sub" role="tabpanel" aria-labelledby="zero_admin_nav_sub_tab" tabindex="0">                                                   
                                                    <div class="card card-bordered">
                                                        <div class="card-header">
                                                            <div class="card-title fw-bolder">Cấu hình gói đăng ký</div>
                                                            <div class="card-toolbar">
                                                                <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('subscribe')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-5">
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="subscribe_address_url">Địa chỉ Link Sub</label>
                                                                    <input class="form-control mb-5" id="subscribe_address_url" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['subscribe_address_url'];?>
" type="text" placeholder="Địa chỉ đăng ký" />
                                                                    <label class="form-label" for="enable_subscribe_extend">Tạo máy chủ ảo hiển thị lưu lượng và hạn sử dụng của gói</label>
                                                                    <select class="form-select mb-5" id="enable_subscribe_extend" data-control="select2" data-hide-search="true">
                                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_extend'] == false) {?>selected<?php }?>>Tắt</option>
                                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_extend'] == true) {?>selected<?php }?>>Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="enable_subscribe_emoji">Tạo máy chủ ảo hiển thị tin nhắn</label>
                                                                    <select class="form-select mb-5" id="enable_subscribe_emoji" data-control="select2" data-hide-search="true">
                                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_emoji'] == false) {?>selected<?php }?>>Tắt</option>
                                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_emoji'] == true) {?>selected<?php }?>>Bật</option>
                                                                    </select>
                                                                    
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="subscribe_diy_message">Nội dung tin nhắn của máy chủ ảo</label>
                                                                    <input class="form-control mb-5" id="subscribe_diy_message" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['subscribe_diy_message'];?>
" type="text" placeholder="Nhập nội dung tin nhắn của máy chủ ảo" />
                                                                    <label class="form-label" for="enable_subscribe_log">Lịch sử đồng bộ máy chủ</label>
                                                                    <select class="form-select mb-5" id="enable_subscribe_log" data-control="select2" data-hide-search="true">
                                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_log'] == false) {?>selected<?php }?>>Tắt</option>
                                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_subscribe_log'] == true) {?>selected<?php }?>>Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="subscribe_log_keep_time">Thời gian lưu giữ lịch sử đồng bộ máy chủ</label>
                                                                    <input class="form-control" id="subscribe_log_keep_time" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['subscribe_log_keep_time'];?>
" type="text" placeholder="Thời gian lưu giữ nhật ký đăng ký" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                                      
                                                </div><?php }
}
