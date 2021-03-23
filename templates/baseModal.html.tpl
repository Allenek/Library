<div class="modal-header">
  <h5 class="modal-title">{block name=formTitle}{/block}</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form class="modal-form" action="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}{block name=action}{/block}" method="post" id="myform">
    {block name=formBody}{/block}
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-primary" type="submit" onclick="$('.modal-form').submit()">{block name=submit}Prześlij{/block}</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
</div>
