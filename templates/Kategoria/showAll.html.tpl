{extends '../baseTemplate.html.tpl'}
{block name=pageTitle}Tytuł strony HTML{/block}
{block name=body}
  <div>
    {if $currentUser != false}
    <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="kategoria">+ Dodaj</a>
    {/if}
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Kategoria</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>
      {foreach $data as $key => $value}
        <tr>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria/{$value['ID_Kategoria']}">{$value['ID_Kategoria']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria/{$value['ID_Kategoria']}">{$value['Nazwa']}</a></td>
          <td>
            {if $currentUser != false}
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria/usun/{$value['ID_Kategoria']}">Usuń</a>
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria/edytuj/{$value['ID_Kategoria']}" class="edit-btn"data-id="{$value['ID_Kategoria']}" data-aisyfaefgw="kategoria">Edytuj</a>
            {/if}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{/block}
