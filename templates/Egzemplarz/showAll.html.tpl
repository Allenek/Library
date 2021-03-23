{extends '../baseTemplate.html.tpl'}
{block name=pageTitle}Tytuł strony HTML{/block}
{block name=body}
<div>
  {if $currentUser != false}
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="egzemplarz">+ Dodaj</a>
  {/if}
</div>
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Tytuł</th>
        <th>Sygnatura</th>
        <th>Cena Zakupu</th>
        <th>Stan</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>
      {foreach $data as $key => $value}
        <tr>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/{$value['ID_Egzemplarz']}">{$value['ID_Egzemplarz']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/{$value['ID_Egzemplarz']}">{$Ksiazka[$value['ID_Ksiazka']]['Tytul']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/{$value['ID_Egzemplarz']}">{$value['Sygnatura']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/{$value['ID_Egzemplarz']}">{$value['Cena_Zakupu']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/{$value['ID_Egzemplarz']}">{$value['Stan']}</a></td>
          <td>
            {if $currentUser != false}
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/usun/{$value['ID_Egzemplarz']}">Usuń</a>
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz/edytuj/{$value['ID_Egzemplarz']}"class="edit-btn"data-id="{$value['ID_Egzemplarz']}" data-aisyfaefgw="egzemplarz">Edytuj</a>
            {/if}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{/block}
