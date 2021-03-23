{extends '../baseModal.html.tpl'}
{block name=action}kategoria/aktualizuj/{/block}
{block name=formTitle}Edycja Kategorii nr {$data['ID_Kategoria']}{/block}
{block name=formBody}
  <input type="hidden" name="ID_Kategoria" value="{if isset($data['ID_Kategoria'])}{$data['ID_Kategoria']}{/if}">
  <label for="">Nazwa Kategorii</label>
  <input type="text" name="name" value="{if isset($data['Nazwa'])}{$data['Nazwa']}{/if}" class="form-control" id="name" />
{/block}
