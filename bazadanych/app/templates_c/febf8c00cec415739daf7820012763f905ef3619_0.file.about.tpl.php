<?php
/* Smarty version 4.3.1, created on 2023-05-05 12:16:46
  from 'C:\xampp\htdocs\ochrona_routing\app\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6454d78e904937_59869080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'febf8c00cec415739daf7820012763f905ef3619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ochrona_routing\\app\\about.tpl',
      1 => 1683281770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6454d78e904937_59869080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<link rel="stylesheet" href="/css/main.css">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13733423646454d78e8fb929_78831548', 'navigation');
?>
   

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15109300376454d78e902333_73154765', 'infos');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20408184656454d78e902c25_13349382', 'content');
?>
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_13733423646454d78e8fb929_78831548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_13733423646454d78e8fb929_78831548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php"><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php">Kalkulator</a></li>
                        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/about.php">O projekcie</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
<?php
}
}
/* {/block 'navigation'} */
/* {block 'infos'} */
class Block_15109300376454d78e902333_73154765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_15109300376454d78e902333_73154765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p></p>
<?php
}
}
/* {/block 'infos'} */
/* {block 'content'} */
class Block_20408184656454d78e902c25_13349382 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20408184656454d78e902c25_13349382',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
        
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php">Kalkulator</a></li>
			<li class="active">O projekcie</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">O projekcie</h1>
				</header>
				<h3>O co chodzi?</h3>
				<p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" >Dla wszystkich którzy chcą mieć wszystko wyłożone na tacy.</p>
                                <p>Dla tych co chcą przetestować.</p>
                                <p>Dla tych co trafili tu przypadkiem.</p>
                                
                                <h3>Główne założenie</h3>
                                <p>Prosty kalkulator zrobiony na potrzeby zajęć PBAW,  mający na celu korzystać ze starych i coraz nowszych elementów.<br>
                                    Co tydzień zyskuje nowe funkcjonalności i elementy wzbogacające<br></p>
                                
                                <p>Główne zadanie - przygotowanie nas do końcowego projektu z przedmiotu :)</p>
                                
                                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/2.jpg">
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Inne kalkulatory</h4>
					<ul class="list-unstyled list-spaces">
                                            <li>Kalkulator BMI<br><span class="small text-muted">Oblicz czy waga jest w normie.</span></li>
                                            <li>Kalkulator spalania paliwa<br><span class="small text-muted">Przygotuj się do podróży i wylicz ile paliwa spali twój samochód</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
<?php
}
}
/* {/block 'content'} */
}
