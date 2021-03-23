{extends '../baseModal.html.tpl'}
{block name=action}ksiazka/aktualizuj/{/block}
{block name=formTitle}Edycja Ksiązki nr {$data['ID_Ksiazka']}{/block}
{block name=formBody}
  <input type="hidden" name="ID_Ksiazka" value="{if isset($data['ID_Ksiazka'])}{$data['ID_Ksiazka']}{/if}">
  <label for="">Kategoria</label>
  {if isset($data['ID_Kategoria'])}
    {html_options name=ID_Kategoria options=$kategoria class="form-control" selected=$data['ID_Kategoria']}
  {else}
    {html_options name=ID_Kategoria options=$kategoria class="form-control"}
  {/if}
  <label for=""><strong>Autor</strong></label>
  <select class="form-control" name="ID_Autor[]" multiple>
    {foreach from=$autor item=v key=k}
      {if in_array($k, $ksiazka_autorzy)}
        <option value="{$k}" selected>{$v}</option>
      {else}
        <option value="{$k}">{$v}</option>
      {/if}
    {/foreach}
  </select>
  <label for="">Tytuł</label>
  <input type="text" name="Tytul" value="{if isset($data['Tytul'])}{$data['Tytul']}{/if}" class="form-control" />
  <label for="">Opis</label>
  <input type="text" name="Opis" value="{if isset($data['Opis'])}{$data['Opis']}{/if}" class="form-control" />
  <label for="">Wydawnictwo</label>
  {if isset($data['ID_Wydawnictwo'])}
    {html_options name=ID_Wydawnictwo options=$wydawnictwo class="form-control" selected=$data['ID_Wydawnictwo']}
  {else}
    {html_options name=ID_Wydawnictwo options=$wydawnictwo class="form-control"}
  {/if}
  <label for="">Rok wydania</label>
  <input type="text" name="Rok_Wydania" value="{if isset($data['Rok_Wydania'])}{$data['Rok_Wydania']}{/if}" class="form-control" />
{/block}
