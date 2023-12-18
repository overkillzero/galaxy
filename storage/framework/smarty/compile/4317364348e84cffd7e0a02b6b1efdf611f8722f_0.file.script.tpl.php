<?php
/* Smarty version 4.3.4, created on 2023-12-05 10:21:49
  from '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/script.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656e893dbcd9a9_99282213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4317364348e84cffd7e0a02b6b1efdf611f8722f' => 
    array (
      0 => '/www/wwwroot/sieuthi5g.com/resources/views/zero/admin/script.tpl',
      1 => 1701742760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656e893dbcd9a9_99282213 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/theme/infinity/plugins/global/plugins.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/infinity/js/scripts.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/infinity/plugins/custom/datatables/datatables.bundle.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    // get result 
function getResult(titles, texts, icons) {
    Swal.fire({
        title: titles,
        text: texts,
        icon: icons,
        buttonsStyling: false,
        confirmButtonText: "OK",
        customClass: {
            confirmButton: "btn btn-primary"
        }
    });
}

function getwarning() {
  return new Promise(function (resolve, reject) {
    Swal.fire({
      text: 'Xác nhận thao tác',
      icon: "warning",
      buttonsStyling: false,
      showCancelButton: true,
      confirmButtonText: "Xác nhận",
      cancelButtonText: "Hủy bỏ",
      customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-light"
      }
    }).then(function (result) {
      if (result.isConfirmed) {
        resolve(); // 点击确定时返回一个已解决的 Promise 对象
      } else {
        reject(); // 点击取消时返回一个已拒绝的 Promise 对象
      }
    });
  });
}

$(document).ready(function (){
    // 获取当前 URL 路径
    var path = window.location.pathname;

    // 使用 split() 切割路径字符串
    var parts = path.split('/');

    // 访问最后一个元素
    var target2 = parts[2];
    var target1 = parts[1];
    $("a.menu-link[href='/"+target1+"/"+target2+"']").addClass('active');
});

//clipboard
var clipboard = new ClipboardJS('.copy-text');
clipboard.on('success', function(e) {
    getResult("Sao chép thành công", "", "success");
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function zeroAdminDelete(type, id){
        getwarning().then(function() {
            $.ajax({
                type: "DELETE",
                url: "/<?php echo $_smarty_tpl->tpl_vars['config']->value['website_admin_path'];?>
/"+type+"/delete",
                dataType: "json",
                data: {
                    id
                },
                success: function(data){
                    if (data.ret === 1){
                        getResult(data.msg, '', 'success');
                        table_1.ajax.reload();
                    }else{
                        getResult('Đã xảy ra lỗi', '', 'error');
                    }
                }
            });
        }).catch(function() {
            Swal.close();
        })
    }
<?php echo '</script'; ?>
><?php }
}
