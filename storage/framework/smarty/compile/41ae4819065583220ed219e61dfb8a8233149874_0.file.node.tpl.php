<?php
/* Smarty version 4.3.4, created on 2023-12-05 10:21:25
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/node.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656e89255c6768_18948467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ae4819065583220ed219e61dfb8a8233149874' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/user/node.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/index/menu.tpl' => 1,
    'file:include/index/news.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_656e89255c6768_18948467 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
 Node</title>
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
<?php $_smarty_tpl->_subTemplateRender('file:include/index/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <div class="d-flex flex-column flex-column-fluid mt-10">
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card" id="kt_pricing">
                    <div class="card-body p-lg-17">
                        <div class="d-flex flex-column">
                            <?php if (!$_smarty_tpl->tpl_vars['class']->value->isEmpty()) {?>
                                <div class="nav-group nav-group-outline mx-auto mb-15 nav" data-kt-buttons="true">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'grade');
$_smarty_tpl->tpl_vars['grade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
$_smarty_tpl->tpl_vars['grade']->do_else = false;
?>
                                        <button
                                            class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 <?php if ($_smarty_tpl->tpl_vars['grade']->value['node_class'] == $_smarty_tpl->tpl_vars['min_node_class']->value) {?>active<?php }?>"
                                            data-bs-toggle="tab"
                                            data-bs-target="#node_show_<?php echo $_smarty_tpl->tpl_vars['grade']->value['node_class'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPermission($_smarty_tpl->tpl_vars['grade']->value['node_class']);?>
</button>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php } else { ?>
                                <span class="fw-bold fs-3 text-center">Hiện không có máy chủ nào trên hệ thống</span>
                            <?php }?>
                            <div class="tab-content">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'grade');
$_smarty_tpl->tpl_vars['grade']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grade']->value) {
$_smarty_tpl->tpl_vars['grade']->do_else = false;
?>
                                    <div class="tab-pane fade show <?php if ($_smarty_tpl->tpl_vars['grade']->value['node_class'] == $_smarty_tpl->tpl_vars['min_node_class']->value) {?>active show<?php }?>"
                                        id="node_show_<?php echo $_smarty_tpl->tpl_vars['grade']->value['node_class'];?>
">
                                        <div class="row g-10">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['server']->value->node_class == $_smarty_tpl->tpl_vars['grade']->value['node_class']) {?>
                                                    <div class="col-xl-4">
                                                        <div class="d-flex h-100 align-items-center flex-wrap" type="button"
                                                            onclick="KTUsersShowNodeInfo(<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
, <?php echo $_smarty_tpl->tpl_vars['server']->value->node_class;?>
)">
                                                            <div
                                                                class="w-100 rounded-3 bg-light bg-opacity-75 px-10 py-5 d-flex flex-wrap">
                                                                <div class="d-flex flex-column flex-grow-1">
                                                                    <img alt="image" class="rounded-circle" width="35"
                                                                        src="/theme/infinity/media/flags/<?php echo $_smarty_tpl->tpl_vars['server']->value->node_flag;?>
.svg">
                                                                </div>
                                                                <div class="fw-bold fs-5">
                                                                    <?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app_footer py-4 d-flex flex-lg-column" id="kt_app_footer">
        <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
            <div class="text-dark-75 order-2 order-md-1">
                &copy;<?php echo '<script'; ?>
>
                    document.write(new Date().getFullYear());
                <?php echo '</script'; ?>
>,&nbsp;<a><?php echo $_smarty_tpl->tpl_vars['config']->value["website_name"];?>
,&nbsp;Inc.&nbsp;All rights reserved.</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:include/index/news.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- vmess modal -->
<div class="modal fade" id="zero_modal_vmess_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="zero_modal_vmess_node_info_title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong id="zero_modal_vmess_node_info_remark">Tên máy chủ</strong>
                </h4>
            </div>
            <div class="modal-body align-items-center" id="zero_modal_vmess_node_info_body">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true"
                        data-bs-target="#zero_modal_tab_vmess_qrcode">
                        QR Code
                    </button>
                    <button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false"
                        data-bs-target="#zero_modal_tab_vmess_config">
                        Cấu hình
                    </button>
                </nav>
                <div class="tab-content m-0 p-0">
                    <div class="tab-pane fade active show" id="zero_modal_tab_vmess_qrcode">

                        <div class="text-center pt-10" id="zero_modal_vmess_node_info_qrcode">
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="zero_modal_tab_vmess_config">
                        <div class="pt-10 pl-10 ms-10 text-start fs-4">
                            <p>nodeprotocol: <span
                                    class="badge badge-secondary badge-lg">VMESS</span></p>
                            <p>address: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_address"></span></p>
                            <p>port: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_port"></span></p>
                            <p>alter id: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_aid"></span></p>
                            <p>uuid: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_uuid"></span></p>
                            <p>network: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_net"></span></p>
                            <p>path: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_path"></span></p>
                            <p>host: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_host"></span></p>
                            <p>grpc servicename: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_servicename"></span></p>
                            <p>protocol: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_type"></span></p>
                            <p>security: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vmess_node_info_security"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button"
                    style="padding: 10px 15px; margin-left: 1%; background-color: #0077cc; border-radius: 5px; color: #fff; border: none;"
                    onclick="copyVMessConfig()">Sao chép cấu hình</button>
                <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- vless modal -->
<div class="modal fade" id="zero_modal_vless_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="zero_modal_vless_node_info_title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong id="zero_modal_vless_node_info_remark">Tên máy chủ</strong>
                </h4>
            </div>
            <div class="modal-body align-items-center" id="zero_modal_vless_node_info_body">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true"
                        data-bs-target="#zero_modal_tab_vless_qrcode">
                        QR Code
                    </button>
                    <button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false"
                        data-bs-target="#zero_modal_tab_vless_config">
                        Cấu hình
                    </button>
                </nav>
                <div class="tab-content m-0 p-0">
                    <div class="tab-pane fade active show" id="zero_modal_tab_vless_qrcode">

                        <div class="text-center pt-10" id="zero_modal_vless_node_info_qrcode">
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="zero_modal_tab_vless_config">
                        <div class="pt-10 pl-10 ms-10 text-start fs-4">
                            <p>nodeprotocol: <span
                                    class="badge badge-secondary badge-lg">VLESS</span></p>
                            <p>address: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_address"></span></p>
                            <p>port: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_port"></span></p>
                            <p>uuid: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_uuid"></span></p>
                            <p>network: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_net"></span></p>
                            <p>path: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_path"></span></p>
                            <p>host: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_host"></span></p>
                            <p>grpc servicename: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_servicename"></span></p>
                            <p>protocol: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_type"></span></p>
                            <p>security: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_security"></span></p>
                            <p>flow: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_flow"></span></p>
                            <p>sni: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_sni"></span></p>
                            <p>public_key: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_pbk"></span></p>
                            <p>short_id: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_sid"></span></p>
                            <p>fingerprint: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_vless_node_info_fp"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Hủy
                </button>
            </div>
        </div>
    </div>
</div>
<!-- ss modal -->
<div class="modal fade" id="zero_modal_shadowsocks_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="zero_modal_shadowsocks_node_info_title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong id="zero_modal_shadowsocks_node_info_remark">Tên máy chủ</strong>
                </h4>
            </div>
            <div class="modal-body align-items-center" id="zero_modal_shadowsocks_node_info_body">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true"
                        data-bs-target="#zero_modal_tab_shadowsocks_qrcode">
                        QR Code
                    </button>
                    <button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false"
                        data-bs-target="#zero_modal_tab_shadowsocks_config">
                        Cấu hình
                    </button>
                </nav>
                <div class="tab-content m-0 p-0">
                    <div class="tab-pane fade active show" id="zero_modal_tab_shadowsocks_qrcode">

                        <div class="text-center pt-10" id="zero_modal_shadowsocks_node_info_qrcode">
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="zero_modal_tab_shadowsocks_config">
                        <div class="pt-10 pl-10 ms-10 text-start fs-4">
                            <p>nodeprotocol: <span
                                    class="badge badge-secondary badge-lg">Shadowsocks</span></p>
                            <p>address: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_shadowsocks_node_info_address"></span></p>
                            <p>port: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_shadowsocks_node_info_port"></span></p>
                            <p>encrypt: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_shadowsocks_node_info_method"></span></p>
                            <p>passwd: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_shadowsocks_node_info_passwd"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Hủy
                </button>
            </div>
        </div>
    </div>
</div>

<!-- trojan modal -->
<div class="modal fade" id="zero_modal_trojan_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="zero_modal_trojan_node_info_title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong id="zero_modal_trojan_node_info_remark">Tên máy chủ</strong>
                </h4>
            </div>
            <div class="modal-body align-items-center" id="zero_modal_trojan_node_info_body">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true"
                        data-bs-target="#zero_modal_tab_trojan_qrcode">
                        QR Code
                    </button>
                    <button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false"
                        data-bs-target="#zero_modal_tab_trojan_config">
                        Cấu hình
                    </button>
                </nav>
                <div class="tab-content m-0 p-0">
                    <div class="tab-pane fade active show" id="zero_modal_tab_trojan_qrcode">

                        <div class="text-center pt-10" id="zero_modal_trojan_node_info_qrcode">
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="zero_modal_tab_trojan_config">
                        <div class="pt-10 pl-10 ms-10 text-start fs-4">
                            <p>nodeprotocol: <span
                                    class="badge badge-secondary badge-lg">Trojan</span></p>
                            <p>address: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_address"></span></p>
                            <p>port: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_port"></span></p>
                            <p>sni: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_sni"></span></p>
                            <p>uuid: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_uuid"></span></p>
                            <p>security: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_security"></span></p>
                            <p>flow: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_trojan_node_info_flow"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Hủy
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="zero_modal_hysteria_node_info" data-bs-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="zero_modal_hysteria_node_info_title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg">
            <div class="modal-header">
                <h4 class="modal-title">
                    <strong id="zero_modal_hysteria_node_info_remark">Tên máy chủ</strong>
                </h4>
            </div>
            <div class="modal-body align-items-center" id="zero_modal_hysteria_node_info_body">
                <nav class="nav nav-tabs nav-justified" role="tablist">
                    <button class="nav-link active" type="button" data-bs-toggle="tab" aria-selected="true"
                        data-bs-target="#zero_modal_tab_hysteria_qrcode">
                        QR Code
                    </button>
                    <button class="nav-link" type="button" data-bs-toggle="tab" aria-selected="false"
                        data-bs-target="#zero_modal_tab_hysteria_config">
                        Cấu hình
                    </button>
                </nav>
                <div class="tab-content m-0 p-0">
                    <div class="tab-pane fade active show" id="zero_modal_tab_hysteria_qrcode">

                        <div class="text-center pt-10" id="zero_modal_hysteria_node_info_qrcode">
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="zero_modal_tab_hysteria_config">
                        <div class="pt-10 pl-10 ms-10 text-start fs-4">
                            <p>nodeprotocol: <span
                                    class="badge badge-secondary badge-lg">Hysteria</span></p>
                            <p>address: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_address"></span></p>
                            <p>port: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_port"></span></p>
                            <p>peer: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_peer"></span></p>
                            <p>passwd: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_obfsParam"></span></p>
                            <p>protocol: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_protocol"></span></p>
                            <p>上传: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_upspeed"></span></p>
                            <p>downspeed: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_downspeed"></span></p>
                            <p>obfs: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_obfs"></span></p>
                            <p>alpn: <span class="badge badge-secondary badge-lg"
                                    id="zero_modal_hysteria_node_info_alpn"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light fw-bold" data-bs-dismiss="modal">Hủy
                </button>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="/js/qrcode.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function copyVMessConfig() {
        var address = document.getElementById('zero_modal_vmess_node_info_address').innerText;
        var port = document.getElementById('zero_modal_vmess_node_info_port').innerText;
        var aid = document.getElementById('zero_modal_vmess_node_info_aid').innerText;
        var uuid = document.getElementById('zero_modal_vmess_node_info_uuid').innerText;
        var net = document.getElementById('zero_modal_vmess_node_info_net').innerText;
        var path = document.getElementById('zero_modal_vmess_node_info_path').innerText;
        var host = document.getElementById('zero_modal_vmess_node_info_host').innerText;
        var remark = document.getElementById('zero_modal_vmess_node_info_remark').innerText;
        var type = document.getElementById('zero_modal_vmess_node_info_type').innerText;
        var security = document.getElementById('zero_modal_vmess_node_info_security').innerText;

        var vmessConfig = {
            id: uuid,
            add: address,
            port: port,
            host: host,
            path: path,
            aid: '0',
            scy: 'auto',
            sni: host,
            tls: '',
            type: '',
            net: net,
            ps: remark,
            v: '2'
        };

        var encodedConfig = 'vmess://' + b64EncodeUnicode(JSON.stringify(vmessConfig)) + '\n';
        navigator.clipboard.writeText(encodedConfig).then(function() {
            alert('Sao chép thành công!');
        }).catch(function(err) {});
    }
    function b64EncodeUnicode(str) {
        return btoa(unescape(encodeURIComponent(str)));
    }
<?php echo '</script'; ?>
>
</body>

</html><?php }
}