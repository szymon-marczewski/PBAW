{extends file="main.tpl"}

{block name=content}

<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="{$conf->action_url}personList">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="data" name="date" value="{$searchForm->date}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	

<div class="bottom-margin">
<a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowy kredyt</a>
</div>	

<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>kwota</th>
		<th>lata</th>
		<th>oprocentowanie</th>
	</tr>
</thead>
<tbody>
{foreach $credit as $p}
{strip}
	<tr>
		<td>{$p["x"]}</td>
		<td>{$p["y"]}</td>
		<td>{$p["pro"]}</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}