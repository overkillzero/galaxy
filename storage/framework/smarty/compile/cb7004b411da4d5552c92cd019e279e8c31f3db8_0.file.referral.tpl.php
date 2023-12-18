<?php
/* Smarty version 4.3.4, created on 2023-12-17 00:31:48
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/referral.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657dd0f4e4c608_84624507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7004b411da4d5552c92cd019e279e8c31f3db8' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/setting/referral.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657dd0f4e4c608_84624507 (Smarty_Internal_Template $_smarty_tpl) {
?>                                                <div class="tab-pane fade" id="zero_admin_nav_referral" role="tabpanel" aria-labelledby="zero_admin_nav_referral_tab" tabindex="0">
                                                    <div class="card card-bordered">
                                                        <div class="card-header">
                                                            <div class="card-title fw-bolder">Cấu hình lời mời</div>
                                                            <div class="card-toolbar">
                                                                <button class="btn btn-light-primary btn-sm" type="button" onclick="updateAdminConfigSettings('invite')">
                                                                <i class="bi bi-save"></i>Lưu cấu hình
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row g-5">
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="invitation_mode">Chế độ mời</label>
                                                                    <select id="invitation_mode" class="form-select mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="registration_only">Chỉ sử dụng để đăng ký tài khoản, không giảm giá</option>
                                                                        <option value="after_topup">Dùng để đăng ký tài khoản và nhận hoa hồng khi người được mời nạp tiền</option>
                                                                        <option value="after_purchase">Dùng để đăng ký tài khoản và nhận hoa hồng khi người được mời mua gói</option>
                                                                    </select>
                                                                    <label class="form-label" for="invite_rebate_mode">Chế độ hoa hồng</label>
                                                                    <select id="invite_rebate_mode" class="form-select mb-5" data-control="select2" data-hide-search="true">
                                                                        <option value="continued">Nhận hoa hồng trọn đời</option>
                                                                        <option value="limit_frequency">Giới hạn số lần nhận hoa hồng</option>
                                                                        <option value="limit_amount">Giới hạn số tiền hoa hồng</option>
                                                                        <option value="limit_time_range">Giới hạn thời gian nhận hoa hồng</option>
                                                                    </select>
                                                                    <label class="form-label" for="rebate_ratio">Tỷ lệ hoa hồng</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="rebate_ratio" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['rebate_ratio'];?>
" type="number">
                                                                        <span class="input-group-text">%</span>
                                                                    </div>
                                                                    <label class="form-label" for="rebate_time_range_limit">Giới hạn thời gian nhận hoa hồng</label>
                                                                    <div class="input-group">
                                                                        <input class="form-control" id="rebate_time_range_limit" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['rebate_time_range_limit'];?>
" type="number">
                                                                        <span class="input-group-text">Ngày</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-6">
                                                                    <label class="form-label" for="rebate_frequency_limit">Số lần nhận hoa hồng</label>
                                                                    <input class="form-control mb-5" id="rebate_frequency_limit" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['rebate_frequency_limit'];?>
" type="number">
                                                                    <label class="form-label" for="rebate_amount_limit">Tổng số tiền hoa hồng</label>
                                                                    <div class="input-group mb-5">
                                                                        <input class="form-control" id="rebate_amount_limit" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['rebate_amount_limit'];?>
" type="number">
                                                                        <span class="input-group-text">đ</span>
                                                                    </div>
                                                                    <label class="form-label" for="invitation_to_signup_credit_reward">Số tiền người đăng kí bằng mã mời nhận được</label>
                                                                    <div class="input-group mb-5">
                                                                    <input class="form-control" id="invitation_to_signup_credit_reward" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['invitation_to_signup_credit_reward'];?>
" type="number">
                                                                        <span class="input-group-text">đ</span>
                                                                    </div>          
                                                                    <label class="form-label" for="invitation_to_signup_traffic_reward">Lưu lượng người đăng kí bằng mã mời nhận được</label>
                                                                    <div class="input-group">
                                                                        <input class="form-control" id="invitation_to_signup_traffic_reward" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['invitation_to_signup_traffic_reward'];?>
" type="number"> 
                                                                        <span class="input-group-text">GB</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><?php }
}
