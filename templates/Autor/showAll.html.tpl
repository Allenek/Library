{extends '../baseTemplate.html.tpl'}
{block name=pageTitle}Tytuł strony HTML{/block}
{block name=body}
  <div>
    {if $currentUser != false}
      <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="autor">+ Dodaj</a>
    {/if}
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>
      {foreach $data as $key => $value}
        <tr>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/{$value['ID_Autor']}">{$value['ID_Autor']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/{$value['ID_Autor']}">{$value['Imie']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/{$value['ID_Autor']}">{$value['Nazwisko']}</a></td>
          <td>
            {if $currentUser != false}
              <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/usun/{$value['ID_Autor']}">Usuń</a>
              <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor/edytuj/{$value['ID_Autor']}"class="edit-btn" data-id="{$value['ID_Autor']}" data-aisyfaefgw="autor">Edytuj</a>
            {/if}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{/block}
