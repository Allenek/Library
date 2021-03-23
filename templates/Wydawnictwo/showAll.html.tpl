{extends '../baseTemplate.html.tpl'}
{block name=pageTitle}Tytuł strony HTML{/block}
{block name=body}
  <div>
    {if $currentUser != false}
    <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="wydawnictwo">+ Dodaj</a>
    {/if}
  </div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Wydawnictwo</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>
      {foreach $data as $key => $value}
        <tr>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo/{$value['ID_Wydawnictwo']}">{$value['ID_Wydawnictwo']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo/{$value['ID_Wydawnictwo']}">{$value['Nazwa']}</a></td>
          <td>
            {if $currentUser != false}
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo/usun/{$value['ID_Wydawnictwo']}">Usuń</a>
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo/edytuj/{$value['ID_Wydawnictwo']}"class="edit-btn" data-id="{$value['ID_Wydawnictwo']}" data-aisyfaefgw="wydawnictwo">Edytuj</a>
            {/if}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{/block}
