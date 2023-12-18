<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/telegram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e20fa0_16310810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34305f02f4ff3a8ef9dfdd12ae173662406780b0' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/telegram.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e20fa0_16310810 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                <div class="tab-pane fade" id="zero_admin_nav_tg" role="tabpanel" aria-labelledby="zero_admin_nav_tg_tab" tabindex="0">
                                                    <div class="row g-5">
                                                        <div class="col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hìnhTelegram</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('telegram')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="telegram_group_id">ID Nhóm</label>
                                                                    <input class="form-control mb-5" id="telegram_group_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_group_id'];?>
" type="text" placeholder="ID" />
                                                                    <label class="form-label" for="telegram_group_url">Link nhóm</label>
                                                                    <input class="form-control mb-5" id="telegram_group_url" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_group_url'];?>
" type="text" placeholder="URL" />
                                                                    <label class="form-label" for="telegram_channel_id">ID Kênh</label>
                                                                    <input class="form-control mb-5" id="telegram_channel_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_channel_id'];?>
" type="text" placeholder="ID Kênh" />
                                                                    <label class="form-label" for="telegram_admin_id">ADMIN ID</label>
                                                                    <select class="form-select" id="telegram_admin_id" data-control="select2" data-close-on-select="true" data-placeholder="Chọn quản trị viên" data-allow-clear="true" multiple="multiple">
                                                                        <option></option>
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminUsers']->value, 'adminUser');
$_smarty_tpl->tpl_vars['adminUser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['adminUser']->value) {
$_smarty_tpl->tpl_vars['adminUser']->do_else = false;
?>
                                                                            <option value=<?php echo $_smarty_tpl->tpl_vars['adminUser']->value->telegram_id;?>
><?php echo $_smarty_tpl->tpl_vars['adminUser']->value->email;?>
</option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Telegram BOT</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('telegram_bot')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="enable_telegram_bot">Bật/tắt BOT</label>
                                                                    <select class="form-select mb-5" id="enable_telegram_bot" data-control="select2" data-hide-search="true">
                                                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_telegram_bot'] == false) {?> selected<?php }?>>Tắt</option>
                                                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_telegram_bot'] == true) {?> selected<?php }?>>Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="telegram_bot_token">BOT TOKEN</label>
                                                                    <input class="form-control mb-5" id="telegram_bot_token" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_bot_token'];?>
" type="text" placeholder="TOKEN" />
                                                                    <label class="form-label" for="telegram_bot_id">BOT ID</label>
                                                                    <input class="form-control mb-5" id="telegram_bot_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_bot_id'];?>
" type="text" placeholder="BOT ID" />
                                                                    <label class="form-label" for="telegram_bot_request_token">TOKEN Yêu cầu</label>
                                                                    <input class="form-control mb-5" id="telegram_bot_request_token" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['telegram_bot_request_token'];?>
" type="text" placeholder="TOKEN" />
                                                                    <label class="form-label" for="enable_push_top_up_message">BOT gửi thông báo nạp tiền</label>
                                                                    <select class="form-select mb-5" id="enable_push_top_up_message" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="enable_push_ticket_message">BOT gửi yêu cầu hỗ trợ</label>
                                                                    <select class="form-select mb-5" id="enable_push_ticket_message" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="enable_push_system_report">BOT thông báo tình trạng hoạt động của hệ thống</label>
                                                                    <select class="form-select mb-5" id="enable_push_system_report" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php }
}
