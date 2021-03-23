{extends '../baseTemplate.html.tpl'}
{block name=body}
{if $currentUser != false}
<div>
  <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/formularz/" class="btn btn-primary add-btn" data-aisyfaefgw="ksiazka">+ Dodaj</a>
</div>
{/if}
  <table class="table table-striped" id="table_id">
    <thead class="thead-dark">
      <tr>
        <th>Id</th>
        <th>Autor</th>
        <th>Kategoria</th>
        <th>Tytul</th>
        <th>Opis</th>
        <th>Wydawnictwo</th>
        <th>Rok_Wydania</th>
        {if $currentUser != false}
        <th>Opcje</th>
        {/if}
      </tr>
    </thead>
    <tbody>
      {foreach $data as $key => $value}
        <tr>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$value['ID_Ksiazka']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">
            {if isset($ksiazka_autor[$value['ID_Ksiazka']])}
              {foreach from=$ksiazka_autor[$value['ID_Ksiazka']] item=$v}
                <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/autor/{$v['ID_Autor']}">{$Autor[$v['ID_Autor']]['Imie']} {$Autor[$v['ID_Autor']]['Nazwisko']}</a>,
              {/foreach}
            {/if}
          </a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$Kategoria[$value['ID_Kategoria']]['Nazwa']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$value['Tytul']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$value['Opis']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$Wydawnictwo[$value['ID_Wydawnictwo']]['Nazwa']}</a></td>
          <td><a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/{$value['ID_Ksiazka']}">{$value['Rok_Wydania']}</a></td>
          <td>
            {if $currentUser != false}
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/usun/{$value['ID_Ksiazka']}">Usuń</a>
            <a href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka/edytuj/{$value['ID_Ksiazka']}" class="edit-btn" data-id="{$value['ID_Ksiazka']}" data-aisyfaefgw="ksiazka">Edytuj</a>
            {/if}
          </td>
        </tr>
      {/foreach}
    </tbody>
  </table>
{/block}
