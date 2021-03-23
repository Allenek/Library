{extends './baseTemplate.html.tpl'}
{block name=body}
    <form class="p-4" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=action}{/block}" method="post" id="myform">
      <h3>{block name=formTitle}{/block}</h3>
      {block name=formBody}
        <div class="form-group">
          <label for="input1">Pole nr 1</label>
          <input type="text" name="input1" id="input1" class="form-control">
        </div>
      {/block}
      <input type="submit" name="{block name=submit}Prześlij{/block}" class="btn btn-primary mt-2 float-right">
    </form>
    <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=redirect}{/block}" class="btn btn-dark">{block name=redirectName}Powrót{/block}</a>
<script src="./js/form.js"></script>
{/block}
