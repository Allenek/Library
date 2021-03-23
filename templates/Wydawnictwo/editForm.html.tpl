{extends '../baseModal.html.tpl'}
{block name=action}wydawnictwo/aktualizuj/{/block}
{block name=formTitle}Edycja Wydawnictwa nr {$data['ID_Wydawnictwo']}{/block}
{block name=formBody}
  <input type="hidden" name="ID_Wydawnictwo" value="{if isset($data['ID_Wydawnictwo'])}{$data['ID_Wydawnictwo']}{/if}">
  <label for="">Nazwa Wydawnictwa</label>
  <input type="text" name="name" value="{if isset($data['Nazwa'])}{$data['Nazwa']}{/if}" class="form-control" id="name" />
{/block}
{block name=redirect}wydawnictwo/{/block}
{block name=redirectName}Lista wydawnictw{/block}
