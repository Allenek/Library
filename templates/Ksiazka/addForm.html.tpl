{extends '../baseModal.html.tpl'}
{block name=action}ksiazka/dodaj/{/block}
{block name=formTitle}Dodawanie nowej Ksiązki{/block}
{block name=formBody}
<label for="">Kategoria</label>
{if isset($data['ID_Kategoria'])}
  {html_options name=ID_Kategoria options=$kategoria class="form-control" selected=$data['ID_Kategoria']}
{else}
  {html_options name=ID_Kategoria options=$kategoria class="form-control"}
{/if}
  <label for=""><strong>Autor</strong></label>
  <select class="form-control" name="ID_Autor[]" multiple>
    {html_options options=$autor}
  </select>
  <label for=""><strong>Tytul</strong></label>
  <input type="text" name="Tytul" class="form-control" />
  <label for=""><strong>Opis</strong></label>
  <input type="text" name="Opis" class="form-control" />
  <label for=""><strong>Wydawnictwo</strong></label>
  {if isset($data['ID_Wydawnictwo'])}
    {html_options name=ID_Wydawnictwo options=$wydawnictwo class="form-control" selected=$data['ID_Wydawnictwo']}
  {else}
    {html_options name=ID_Wydawnictwo options=$wydawnictwo class="form-control"}
  {/if}
  <label for""><strong>Rok wydania</strong></label>
  <input type="text" name="Rok_Wydania" class="form-control" />
{/block}
