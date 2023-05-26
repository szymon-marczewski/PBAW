<?php
/* Smarty version 4.3.1, created on 2023-05-05 11:42:04
  from 'C:\xampp\htdocs\ochrona_routing\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6454cf6c5f10e4_94453387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6217004b2d8a5fc0d405bc701a6f9734f9461a04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ochrona_routing\\app\\views\\templates\\main.tpl',
      1 => 1682346123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6454cf6c5f10e4_94453387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gt_favicon.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">

    </head>
    
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14451460936454cf6c5ed1c2_03039020', 'navigation');
?>


        
        <div class="container text-center">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1268594336454cf6c5edbc6_50793076', 'infos');
?>

        </div>
        

        <!-- Highlights - jumbotron -->
        <div class="jumbotron top-space">
            <div class="container">
                
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16371281676454cf6c5ee3f6_52985761', 'content');
?>

            
            </div>
        </div>

        <footer id="footer" class="top-space">

            <div class="footer1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Kontakt</h3>
                            <div class="widget-body">
                                <p>+48 22 444 4444<br>
                                    <a href="mailto:#">default.email@something.com</a><br>
                                    <br>
                                    Uniwersytet Śląski, Sosnowiec
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Obserwuj</h3>
                            <div class="widget-body">
                                <p class="follow-me-icons">
                                    <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                    <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                    <a href=""><i class="fa fa-github fa-2"></i></a>
                                    <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <h3 class="widget-title">Projekt</h3>
                            <div class="widget-body">
                                <p>Czwarte zadanie z PBAW. Będzie w przyszłości krok po kroku rozwijane z nowymi funkcjami, elementami i możliwościami</p>
                                <p>Testowy tekst na zapełnianie miejsca</p>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>

            <div class="footer2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="simplenav">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php">Kalkulator</a> | 
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/about.php">O projekcie</a> 
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="text-right">
                                    Copyright &copy; 2023
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>	

        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/headroom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/template.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block 'navigation'} */
class Block_14451460936454cf6c5ed1c2_03039020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_14451460936454cf6c5ed1c2_03039020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 ... <?php
}
}
/* {/block 'navigation'} */
/* {block 'infos'} */
class Block_1268594336454cf6c5edbc6_50793076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_1268594336454cf6c5edbc6_50793076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 ...  <?php
}
}
/* {/block 'infos'} */
/* {block 'content'} */
class Block_16371281676454cf6c5ee3f6_52985761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16371281676454cf6c5ee3f6_52985761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 ... <?php
}
}
/* {/block 'content'} */
}
