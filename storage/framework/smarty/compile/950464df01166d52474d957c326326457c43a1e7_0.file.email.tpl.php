<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e0f2e9_47219532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '950464df01166d52474d957c326326457c43a1e7' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/email.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e0f2e9_47219532 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                <div class="tab-pane fade" id="zero_admin_nav_email" role="tabpanel" aria-labelledby="zero_admin_nav_email_tab" tabindex="0">
                                                    <div class="row g-5">
                                                        <div class="col-xxl-6">                                                   
                                                            <div class="card card-bordered mb-5">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hình email</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('mail')">
                                                                            <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="mail_driver">Nhà cung cấp dịch vụ thư điện tử</label>
                                                                    <select class="form-select" id="mail_driver" data-control="select2" data-hide-search="true">
                                                                        <option value="none">Không</option>
                                                                        <option value="mailgun">MailGun</option>
                                                                        <option value="sendgrid">SendGrid</option>
                                                                        <option value="ses">SES</option>
                                                                        <option value="smtp">STMP</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Sao lưu email</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('backup')">
                                                                            <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="auto_backup_email">Email để nhận bản sao lưu</label>
                                                                    <input class="form-control mb-5" id="auto_backup_email" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['auto_backup_email'];?>
" type="text" placeholder="Nhập email" />
                                                                    <label class="form-label" for="auto_backup_password">Mật khẩu tệp sao lưu</label>
                                                                    <input class="form-control mb-5" id="auto_backup_password" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['auto_backup_password'];?>
" type="text" placeholder="Mật khẩu giải nén tệp sao lưu" />
                                                                    <label class="form-label" for="auto_backup_notify">Bật/tắt sao lưu</label>
                                                                    <select class="form-select mb-5" id="auto_backup_notify" data-control="select2" data-hide-search="true">
                                                                        <option value="0">Tắt</option>
                                                                        <option value="1">Bật</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="card card-bordered mb-5">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Kiểm tra email</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" onclick="sendTestEmail()">
                                                                            <i class="bi bi-send"></i>Gửi
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="test_email_address">Kiểm tra email</label>
                                                                    <input class="form-control" id="test_email_address" value="" type="text" placeholder="Nhập email" />
                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hình SENDGRID</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('sendgrid')">
                                                                            <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="sendgrid_key">Key SENDGRID</label>
                                                                    <input class="form-control mb-5" id="sendgrid_key" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['sendgrid_key'];?>
" type="text" placeholder="Nhập key" />
                                                                    <label class="form-label" for="sendgrid_sender">Email gửi thư</label>
                                                                    <input class="form-control mb-5" id="sendgrid_sender" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['sendgrid_sender'];?>
" type="text" placeholder="Nhập email" />
                                                                    <label class="form-label" for="sendgrid_name">Tên người gửi thư</label>
                                                                    <input class="form-control mb-5" id="sendgrid_name" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['sendgrid_name'];?>
" type="text" placeholder="Nhập tên" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator border-primary my-10"></div>
                                                    <div class="row g-5">
                                                        <div class="col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hình SMTP</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('smtp')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="smtp_host">Địa chỉ máy chủ SMTP</label>
                                                                    <input class="form-control mb-5" id="smtp_host" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_host'];?>
" type="text" />
                                                                    <label class="form-label" for="smtp_username">Tài khoản SMTP</label>
                                                                    <input class="form-control mb-5" id="smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_username'];?>
" type="text" />
                                                                    <label class="form-label" for="smtp_password">Mật khẩu SMTP</label>
                                                                    <input class="form-control mb-5" id="smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_password'];?>
" type="text" />
                                                                    <label class="form-label" for="smtp_port">Cổng SMTP</label>
                                                                    <select class="form-select mb-5" id="smtp_port" data-control="select2" data-hide-search="true">
                                                                        <option value="465">465</option>
                                                                        <option value="587">587</option>
                                                                        <option value="2525">2525</option>
                                                                        <option value="25">25</option>
                                                                    </select>
                                                                    <label class="form-label" for="smtp_name">Tên gửi SMTP</label>
                                                                    <input class="form-control mb-5" id="smtp_name" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_name'];?>
" type="text" />
                                                                    <label class="form-label" for="smtp_sender">Địa chỉ gửi SMTP</label>
                                                                    <input class="form-control mb-5" id="smtp_sender" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['smtp_sender'];?>
" type="text" />
                                                                    <label class="form-label" for="smtp_ssl">Sử dụng TLS/SSL để gửi thư</label>
                                                                    <select id="smtp_ssl" class="form-select mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="1">Bật</option>
                                                                        <option value="0">Tắt</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6">
                                                            <div class="card card-bordered mb-5">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hình MAILGUN</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('mailgun')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="mailgun_key">Key MAILGUN</label>
                                                                    <input class="form-control mb-5" id="mailgun_key" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailgun_key'];?>
" type="text" placeholder="Nhập key">
                                                                    <label class="form-label" for="mailgun_domain">Tên miền</label>
                                                                    <input class="form-control mb-5" id="mailgun_domain" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailgun_domain'];?>
" type="text" placeholder="Tên miền">
                                                                    <label class="form-label" for="mailgun_sender">Tên gửi</label>
                                                                    <input class="form-control mb-5" id="mailgun_sender" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['mailgun_sender'];?>
" type="text" placeholder="Tên gửi">
                                                                </div>
                                                            </div>
                                                            <div class="card card-bordered">
                                                                <div class="card-header">
                                                                    <div class="card-title fw-bolder">Cấu hình SES</div>
                                                                    <div class="card-toolbar">
                                                                        <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('ses')">
                                                                        <i class="bi bi-save"></i>Lưu cấu hình
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    <label class="form-label" for="aws_access_key_id">ID SES</label>
                                                                    <input class="form-control mb-5" id="aws_access_key_id" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['aws_access_key_id'];?>
" type="text" placeholder="ID SED" />
                                                                    <label class="form-label" for="aws_secret_access_key">KEY SES</label>
                                                                    <input class="form-control mb-5" id="aws_secret_access_key" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['aws_secret_access_key'];?>
" type="text" placeholder="KEY SES" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php }
}
