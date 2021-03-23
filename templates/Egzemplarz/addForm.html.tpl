{extends '../baseModal.html.tpl'}
{block name=action}egzemplarz/dodaj/{/block}
{block name=formTitle}Dodawanie egzemplarza{/block}
{block name=formBody}
  <label for="">Tytuł książki</label>
  {if isset($data['ID_Ksiazka'])}
    {html_options name=id_book options=$ksiazka class="form-control" selected=$data['ID_Ksiazka']}
  {else}
    {html_options name=id_book options=$ksiazka class="form-control"}
  {/if}
  <label for="">Sygnatura</label>
  <input type="text" name="signature" class="form-control" />
  <label for="">Cena Zakupu</label>
  <input type="text" name="price" class="form-control" />
  <label for="">Stan</label>
  <input type="text" name="condition" class="form-control" />
{/block}
