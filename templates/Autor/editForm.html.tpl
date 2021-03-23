{extends '../baseModal.html.tpl'}
{block name=action}autor/aktualizuj/{/block}
{block name=formTitle}Edycja Autora nr {$data['ID_Autor']}{/block}
{block name=formBody}
  <input type="hidden" name="ID_Autor" value="{if isset($data['ID_Autor'])}{$data['ID_Autor']}{/if}">
  <label for="">Imie</label>
  <input type="text" name="name" value="{if isset($data['Imie'])}{$data['Imie']}{/if}" class="form-control" />
  <label for="">Nazwisko</label>
  <input type="text" name="surname" value="{if isset($data['Nazwisko'])}{$data['Nazwisko']}{/if}" class="form-control" />
{/block}
