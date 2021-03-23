{extends '../baseModal.html.tpl'}
{block name=action}autor/dodaj/{/block}
{block name=formTitle}Dodawanie nowego autora{/block}
{block name=formBody}
  <label for=""><strong>Imie Autora</strong></label>
  <input type="text" name="name" class="form-control" />
  <label for=""><strong>Nazwisko Autora</strong></label>
  <input type="text" name="surname" class="form-control" />
{/block}
