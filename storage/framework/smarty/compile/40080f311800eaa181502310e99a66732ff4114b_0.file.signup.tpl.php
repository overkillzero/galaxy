<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e44bd1_74343851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40080f311800eaa181502310e99a66732ff4114b' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/signup.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e44bd1_74343851 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                <div class="tab-pane fade" id="zero_admin_nav_account" role="tabpanel" aria-labelledby="zero_admin_nav_account_tab" tabindex="0">
                                                    <div class="card card-bordered mb-5">
                                                        <div class="card-header">
                                                            <div class="card-title fw-bolder">Cấu hình đăng ký</div>
                                                            <div class="card-toolbar">
                                                                <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('register')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-5">
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="reg_mode">Chế độ đăng ký</label>
                                                                    <select class="form-select mb-5" id="reg_mode" data-control="select2" data-hide-search="true">
                                                                        <option value="close">Đóng đăng ký</option>
                                                                        <option value="open">Mở đăng ký</option>
                                                                        <option value="invite">Chỉ đăng ký bằng lời mời</option>
                                                                    </select>
                                                                    <label class="form-label" for="signup_default_class">Cấp độ mặc định</label>
                                                                    <input class="form-control mb-5" id="signup_default_class" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['signup_default_class'];?>
" type="text" placeholder="Cấp độ mặc định" />
                                                                    <label class="form-label" for="signup_default_class_time">Thời gian hiệu lực của cấp độ</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="signup_default_class_time" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['signup_default_class_time'];?>
" type="text" placeholder="Thời gian hiệu lực" />
                                                                        <span class="input-group-text">Ngày</span>
                                                                    </div>
                                                                    <label class="form-label" for="verify_email">Xác nhận Email<i class="bi bi-question-circle ms-2" data-bs-toggle="tooltip" title="Sau khi chức năng được bật, người dùng không xác minh địa chỉ email của mình sẽ không thể mua gói dịch vụ"></i></label>
                                                                    <select class="form-select mb-5" id="verify_email" data-control="select2" data-hide-search="true">
                                                                        <option value="close">Tắt</option>
                                                                        <option value="open">Bật</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="signup_default_traffic">Lưu lượng truy cập mặc định</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="signup_default_traffic" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['signup_default_traffic'];?>
" type="text" placeholder="Lưu lượng truy cập" />
                                                                        <span class="input-group-text">GB</span>
                                                                    </div>
                                                                    <label class="form-label" for="signup_default_ip_limit">Giới hạn thiết bị mặc định</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="signup_default_ip_limit" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['signup_default_ip_limit'];?>
" type="text" placeholder="Giới hạn thiết bị" />
                                                                        <span class="input-group-text">IP</span>
                                                                    </div>
                                                                    <label class="form-label" for="signup_default_speed_limit">Giới hạn tốc độ mặc định</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="signup_default_speed_limit" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['signup_default_speed_limit'];?>
" type="text" placeholder="Tốc độ giới hạn" />
                                                                        <span class="input-group-text">Mbps</span>
                                                                    </div>
                                                                    <label class="form-label" for="limit_email_suffix">Giới hạn đuôi email<i class="bi bi-question-circle ms-2" data-bs-toggle="tooltip" title="Sau khi bật chức năng, chỉ có hậu tố email đã đặt mới được phép đăng ký tài khoản"></i></label>
                                                                    <select class="form-select" id="limit_email_suffix" data-control="select2" data-placeholder="Chỉ định đuôi email" data-allow-clear="true" multiple="multiple" data-tags="true" >
                                                                        <option></option>                              
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, json_decode($_smarty_tpl->tpl_vars['settings']->value['limit_email_suffix']), 'email_domain');
$_smarty_tpl->tpl_vars['email_domain']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['email_domain']->value) {
$_smarty_tpl->tpl_vars['email_domain']->do_else = false;
?>
                                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['email_domain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['email_domain']->value;?>
</option>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-bordered mb-5">
                                                        <div class="card-header">
                                                            <div class="card-title fw-bolder">Cấu hình xác minh người dùng</div>
                                                            <div class="card-toolbar">
                                                                <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('captcha')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row -g-5">
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="captcha_provider">Nhà cung cấp captcha</label>
                                                                    <select id="captcha_provider" class="form-select mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="turnstile">Turnstile</option>
                                                                    </select>
                                                                    <label class="form-label" for="enable_signup_captcha">Mã xác minh đăng ký</label>
                                                                    <select id="enable_signup_captcha" class="form-select mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                    <label class="form-label" for="enable_signin_captcha">Mã xác minh đăng nhập</label>
                                                                    <select id="enable_signin_captcha" class="form-select" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="turnstile_sitekey">Turnstile Site Key</label>
                                                                    <input class="form-select mb-5" id="turnstile_sitekey" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['turnstile_sitekey'];?>
">
                                                                    <label class="form-label" for="turnstile_secret">Turnstile Secret</label>
                                                                    <input class="form-select mb-5" id="turnstile_secret" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['turnstile_secret'];?>
">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card card-bordered">
                                                        <div class="card-header">
                                                            <div class="card-title fw-bolder">Cấu hình dịch vụ khách hàng</div>
                                                            <div class="card-toolbar">
                                                                <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('live_chat')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-5">
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="live_chat">Hệ thống hỗ trợ khách hàng</label>
                                                                    <select id="live_chat" class="form-control mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="none">Chưa bật</option>
                                                                        <option value="tawk">Tawk</option>
                                                                        <option value="crisp">Crisp</option>
                                                                        <option value="livechat">LiveChat</option>
                                                                        <option value="mylivechat">MyLiveChat</option>
                                                                    </select>
                                                                    <label class="form-label" for="tawk_id">Tawk</label>
                                                                    <input class="form-control mb-5" id="tawk_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['tawk_id'];?>
">
                                                                    <label class="form-label" for="crisp_id">Crisp</label>
                                                                    <input class="form-control" id="crisp_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['crisp_id'];?>
">
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="livechat_id">LiveChat</label>
                                                                    <input class="form-control mb-5" id="livechat_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['livechat_id'];?>
">
                                                                    <label class="form-label" for="mylivechat_id">MyLiveChat</label>
                                                                    <input class="form-control mb-5" id="mylivechat_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['mylivechat_id'];?>
">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php }
}
