<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['aci_status'] = array (
  'systemVersion' => '1.2.0',
  'installED' => true,
);
$config['aci_module'] = array (
  'welcome' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'welcome',
    'modulePath' => '',
    'moduleCaption' => '首页',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => '',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => '',
        'controller' => 'welcome',
        'method' => '',
        'caption' => '欢迎界面',
      ),
    ),
  ),
  'adminpanel' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '后台管理中心',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'index',
        'caption' => '管理中心-首页',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'logout',
        'caption' => '管理中心-注销',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'profile',
        'method' => 'change_pwd',
        'caption' => '管理中心-修改密码',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'login',
        'caption' => '管理中心-登录',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'go',
        'caption' => '管理中心-URL转向',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'manage',
        'method' => 'cache',
        'caption' => '管理中心-全局缓存',
      ),
    ),
  ),
  'user' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'user',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '用户 / 用户组管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/user',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'index',
        'caption' => '用户管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'check_username',
        'caption' => '用户管理-检测用户名',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'delete',
        'caption' => '用户管理-删除',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'lock',
        'caption' => '用户管理-锁定',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'edit',
        'caption' => '用户管理-编辑',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'add',
        'caption' => '用户管理-新增',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'upload',
        'caption' => '用户管理-上传图像',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'index',
        'caption' => '用户组管理-列表',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'setting',
        'caption' => '用户组管理-权限设置',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'add',
        'caption' => '用户组管理-新增',
      ),
      10 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'edit',
        'caption' => '用户组管理-编辑',
      ),
      11 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'delete_one',
        'caption' => '用户组管理-删除',
      ),
      12 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'user',
        'method' => 'user_window',
        'caption' => '用户-弹窗',
      ),
      13 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'role',
        'method' => 'group_window',
        'caption' => '用户组-弹窗',
      ),
    ),
  ),
  'moduleMenu' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'moduleMenu',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '菜单管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleMenu',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'index',
        'caption' => '菜单管理-列表',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'add',
        'caption' => '菜单管理-新增',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'edit',
        'caption' => '菜单管理-编辑',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'delete',
        'caption' => '菜单管理-删除',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleMenu',
        'method' => 'set_menu',
        'caption' => '菜单管理-设置菜单',
      ),
    ),
  ),
  'moduleManage' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'module',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '模块安装管理',
    'description' => '由autoCodeigniter 系统的模块',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/moduleManage',
    'system' => true,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleManage',
        'method' => 'index',
        'caption' => '模块管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'index',
        'caption' => '模块管理-开始',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'check',
        'caption' => '模块管理-检查',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'setup',
        'caption' => '模块管理-安装',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'uninstall',
        'caption' => '模块管理-卸载',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'reinstall',
        'caption' => '模块管理-重新安装',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'moduleInstall',
        'method' => 'delete',
        'caption' => '模块管理-删除',
      ),
    ),
  ),
  'helloWorld' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2015-10-09 20:10:10',
    'moduleName' => 'helloWorld',
    'modulePath' => 'adminpanel',
    'moduleCaption' => 'Hello World',
    'description' => '这里一个演示模块，来自于吸心大法第三章',
    'fileList' => NULL,
    'works' => true,
    'moduleUrl' => 'adminpanel/helloWorld',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'helloWorld',
        'method' => 'index',
        'menu_name' => NULL,
        'caption' => NULL,
      ),
    ),
  ),
  'question' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 01:19:48',
    'moduleName' => 'question',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '常见问题',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/question/edit.php',
      1 => 'scripts/adminpanel/question/edit.js',
      2 => 'application/views/adminpanel/question/readonly.php',
      3 => 'application/views/adminpanel/question/lists.php',
      4 => 'scripts/adminpanel/question/lists.js',
      5 => 'application/views/adminpanel/question/choose.php',
      6 => 'application/controllers/adminpanel/Question.php',
      7 => 'application/models/Question_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/question',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'index',
        'menu_name' => '管理常见问题',
        'caption' => '管理常见问题',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'index',
        'menu_name' => '常见问题列表',
        'caption' => '常见问题列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'question',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'productimage' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 15:37:17',
    'moduleName' => 'productimage',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '产品图片',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/productimage/edit.php',
      1 => 'scripts/adminpanel/productimage/edit.js',
      2 => 'application/views/adminpanel/productimage/readonly.php',
      3 => 'application/views/adminpanel/productimage/lists.php',
      4 => 'scripts/adminpanel/productimage/lists.js',
      5 => 'application/views/adminpanel/productimage/choose.php',
      6 => 'application/views/adminpanel/productimage/upload.php',
      7 => 'application/controllers/adminpanel/Productimage.php',
      8 => 'application/models/Productimage_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/productimage',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'index',
        'menu_name' => '管理产品图片',
        'caption' => '管理产品图片',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'index',
        'menu_name' => '产品图片列表',
        'caption' => '产品图片列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'productimage',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'fashionhair' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 00:57:08',
    'moduleName' => 'fashionhair',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '潮流发型',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/fashionhair/edit.php',
      1 => 'scripts/adminpanel/fashionhair/edit.js',
      2 => 'application/views/adminpanel/fashionhair/readonly.php',
      3 => 'application/views/adminpanel/fashionhair/lists.php',
      4 => 'scripts/adminpanel/fashionhair/lists.js',
      5 => 'application/views/adminpanel/fashionhair/choose.php',
      6 => 'application/views/adminpanel/fashionhair/upload.php',
      7 => 'application/controllers/adminpanel/Fashionhair.php',
      8 => 'application/models/Fashionhair_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/fashionhair',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'index',
        'menu_name' => '管理潮流发型',
        'caption' => '管理潮流发型',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'index',
        'menu_name' => '潮流发型列表',
        'caption' => '潮流发型列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'fashionhair',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'magicshow' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 01:05:03',
    'moduleName' => 'magicshow',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '魔发秀',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/magicshow/edit.php',
      1 => 'scripts/adminpanel/magicshow/edit.js',
      2 => 'application/views/adminpanel/magicshow/readonly.php',
      3 => 'application/views/adminpanel/magicshow/lists.php',
      4 => 'scripts/adminpanel/magicshow/lists.js',
      5 => 'application/views/adminpanel/magicshow/choose.php',
      6 => 'application/views/adminpanel/magicshow/upload.php',
      7 => 'application/controllers/adminpanel/Magicshow.php',
      8 => 'application/models/Magicshow_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/magicshow',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'index',
        'menu_name' => '管理魔发秀',
        'caption' => '管理魔发秀',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'index',
        'menu_name' => '魔发秀列表',
        'caption' => '魔发秀列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'magicshow',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'showgroud' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 01:12:07',
    'moduleName' => 'showgroud',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '达人秀场',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/showgroud/edit.php',
      1 => 'scripts/adminpanel/showgroud/edit.js',
      2 => 'application/views/adminpanel/showgroud/readonly.php',
      3 => 'application/views/adminpanel/showgroud/lists.php',
      4 => 'scripts/adminpanel/showgroud/lists.js',
      5 => 'application/views/adminpanel/showgroud/choose.php',
      6 => 'application/views/adminpanel/showgroud/upload.php',
      7 => 'application/controllers/adminpanel/Showgroud.php',
      8 => 'application/models/Showgroud_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/showgroud',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'index',
        'menu_name' => '管理达人秀场',
        'caption' => '管理达人秀场',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'index',
        'menu_name' => '达人秀场列表',
        'caption' => '达人秀场列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'showgroud',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'news' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 00:47:03',
    'moduleName' => 'news',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '新闻管理',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/news/edit.php',
      1 => 'scripts/adminpanel/news/edit.js',
      2 => 'application/views/adminpanel/news/readonly.php',
      3 => 'application/views/adminpanel/news/lists.php',
      4 => 'scripts/adminpanel/news/lists.js',
      5 => 'application/views/adminpanel/news/choose.php',
      6 => 'application/views/adminpanel/news/upload.php',
      7 => 'application/controllers/adminpanel/News.php',
      8 => 'application/models/News_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/news',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'index',
        'menu_name' => '管理新闻管理',
        'caption' => '管理新闻管理',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'index',
        'menu_name' => '新闻管理列表',
        'caption' => '新闻管理列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'news',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
    ),
  ),
  'product' => 
  array (
    'version' => '1',
    'charset' => 'utf-8',
    'lastUpdate' => '2017-06-25 15:24:34',
    'moduleName' => 'product',
    'modulePath' => 'adminpanel',
    'moduleCaption' => '产品',
    'description' => '由autoCodeigniter 自动生成的模块',
    'fileList' => 
    array (
      0 => 'application/views/adminpanel/product/edit.php',
      1 => 'scripts/adminpanel/product/edit.js',
      2 => 'application/views/adminpanel/product/readonly.php',
      3 => 'application/views/adminpanel/product/lists.php',
      4 => 'scripts/adminpanel/product/lists.js',
      5 => 'application/views/adminpanel/product/choose.php',
      6 => 'application/views/adminpanel/product/upload.php',
      7 => 'application/controllers/adminpanel/Product.php',
      8 => 'application/models/Product_model.php',
    ),
    'works' => true,
    'moduleUrl' => 'adminpanel/product',
    'system' => false,
    'coder' => '胡子锅',
    'website' => 'http://',
    'moduleDetails' => 
    array (
      0 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'index',
        'menu_name' => '管理产品',
        'caption' => '管理产品',
      ),
      1 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'index',
        'menu_name' => '产品列表',
        'caption' => '产品列表',
      ),
      2 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'add',
        'menu_name' => '新增',
        'caption' => '新增',
      ),
      3 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'edit',
        'menu_name' => '修改',
        'caption' => '修改',
      ),
      4 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'choose',
        'menu_name' => '选择弹窗',
        'caption' => '选择弹窗',
      ),
      5 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'delete_one',
        'menu_name' => '删除单个',
        'caption' => '删除单个',
      ),
      6 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'delete_all',
        'menu_name' => '删除多个',
        'caption' => '删除多个',
      ),
      7 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'readonly',
        'menu_name' => '查看',
        'caption' => '查看',
      ),
      8 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'upload',
        'menu_name' => '上传',
        'caption' => '上传',
      ),
      9 => 
      array (
        'folder' => 'adminpanel',
        'controller' => 'product',
        'method' => 'product_window',
        'menu_name' => '产品',
        'caption' => '产品',
      ),
    ),
  ),
);

/* End of file aci.php */
/* Location: ./application/config/aci.php */
