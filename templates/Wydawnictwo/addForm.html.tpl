{extends '../baseModal.html.tpl'}
{block name=action}wydawnictwo/dodaj/{/block}
{block name=formTitle}Dodawanie nowego wydawnictwa{/block}
{block name=formBody}
  <label for="name"><strong>Nazwa Wydawnictwa</strong></label>
  <input type="text" name="nazwa" class="form-control" id="name" />
{/block}
