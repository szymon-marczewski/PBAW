<?php
/* Smarty version 4.3.1, created on 2023-05-05 12:16:33
  from 'C:\xampp\htdocs\ochrona_routing\app\views\credit_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6454d781e16225_85468652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b475f8397ad86ee706335a32869c8487a86cc1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ochrona_routing\\app\\views\\credit_calc.tpl',
      1 => 1683281789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6454d781e16225_85468652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17982172256454d781e0a5e2_57609832', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15636341306454d781e0d4a3_10954972', 'infos');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18385880766454d781e0dd16_49333208', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_17982172256454d781e0a5e2_57609832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_17982172256454d781e0a5e2_57609832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body class="home">
        <!-- Fixed navbar -->
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
                        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/ctrl.php">Kalkulator</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/about.php">O projekcie</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <!-- Header -->
        <header id="head">
            <div class="container">
                <div class="row">
                    <h1 class="lead">PROSTY, DARMOWY I SKUTECZNY</h1>
                    <p class="tagline"><b>Przekonaj się sam</b></p>
                </div>
            </div>
        </header>
        <!-- /Header -->
<?php
}
}
/* {/block 'navigation'} */
/* {block 'infos'} */
class Block_15636341306454d781e0d4a3_10954972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_15636341306454d781e0d4a3_10954972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br> <br>
    <h2 class="thin">Kalkulator kredytowy - Oblicz miesięczną ratę na podstawie podanych danych</h2>
    </p>

<?php
}
}
/* {/block 'infos'} */
/* {block 'content'} */
class Block_18385880766454d781e0dd16_49333208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18385880766454d781e0dd16_49333208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2>Kalkulator kredytowy</h2>



	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
credit" method="post">
        <fieldset>
        <label for="x">Podaj kwotę: </label>
	<input id="x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
"/><br />
        
        <label for="y">Podaj ilość lat spłaty: </label>
	<input id="y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br />
        
	<label for="pro">Wybierz oprocentowanie: </label>
	<select name="pro">
		<option value="low">15%</option>
		<option value="medium">18%</option>
                <option value="high">21%</option>
	</select><br />
	<input type="submit" value="Wylicz"/>
        </fieldset>
	</form>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

<div class="container">
<h2 class="text-center top-space">SPOSÓB KORZYSTANIA</h2>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <h3>1. Wypełnij puste okienka</h3>
                    <p>Wpisz kwotę na jaką chcesz wziąć kredyt oraz podaj liczbę lat które będziesz spłacał. Kalkulator sam przetworzy lata na miesiące.</p>
                </div>
                <div class="col-sm-6">
                    <h3>2. Wybierz oprocentowanie kredytu i naciśnij "wylicz"</h3>
                    <p> Otrzymasz dokładne wyliczenia wielkości miesięcznej raty!
                        <b><br>TAK! To takie proste! Sprawdź już teraz!</b>
                        </p>
                </div>
            </div> 
</div>           
<?php
}
}
/* {/block 'content'} */
}
