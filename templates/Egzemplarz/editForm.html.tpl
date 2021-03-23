{extends '../baseModal.html.tpl'}
{block name=action}egzemplarz/aktualizuj/{/block}
{block name=formTitle}Edycja egzemplarza nr {$data['ID_Egzemplarz']}{/block}
{block name=formBody}
  <input type="hidden" name="ID_Egzemplarz" value="{if isset($data['ID_Egzemplarz'])}{$data['ID_Egzemplarz']}{/if}">
  <label for="">Tytuł książki</label>
  {if isset($data['ID_Ksiazka'])}
    {html_options name=id_book options=$ksiazka class="form-control" selected=$data['ID_Ksiazka']}
  {else}
    {html_options name=id_book options=$ksiazka class="form-control"}
  {/if}
  <label for="">Sygnatura</label>
  <input type="text" name="signature" value="{if isset($data['Sygnatura'])}{$data['Sygnatura']}{/if}" class="form-control" />
  <label for="">Cena_Zakupu</label>
  <input type="text" name="price" value="{if isset($data['Cena_Zakupu'])}{$data['Cena_Zakupu']}{/if}" class="form-control" />
  <label for="">Stan</label>
  <input type="text" name="condition" value="{if isset($data['Stan'])}{$data['Stan']}{/if}" class="form-control" />
{/block}
