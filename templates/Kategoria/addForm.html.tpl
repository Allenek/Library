{extends '../baseModal.html.tpl'}
{block name=action}kategoria/dodaj/{/block}
{block name=formTitle}Dodawanie nowej kategorii{/block}
{block name=formBody}
  <label for="name"><strong>Nazwa Kategorii</strong></label>
  <input type="text" name="nazwa" class="form-control" id="name" />
{/block}
