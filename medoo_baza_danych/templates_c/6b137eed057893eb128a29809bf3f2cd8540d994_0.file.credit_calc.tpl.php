<?php
/* Smarty version 4.3.1, created on 2023-04-24 16:21:39
  from 'C:\xampp\htdocs\obiektowosc_namespaces\app\views\credit_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64469073ebac22_29086754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b137eed057893eb128a29809bf3f2cd8540d994' => 
    array (
      0 => 'C:\\xampp\\htdocs\\obiektowosc_namespaces\\app\\views\\credit_calc.tpl',
      1 => 1682346014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64469073ebac22_29086754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131136523864469073ea6c93_09164428', 'navigation');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181321721764469073ea93e9_20278550', 'infos');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14642336864469073ea9c78_33036313', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'navigation'} */
class Block_131136523864469073ea6c93_09164428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_131136523864469073ea6c93_09164428',
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
class Block_181321721764469073ea93e9_20278550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'infos' => 
  array (
    0 => 'Block_181321721764469073ea93e9_20278550',
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
class Block_14642336864469073ea9c78_33036313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14642336864469073ea9c78_33036313',
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
</div>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

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
