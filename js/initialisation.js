var host = window.location.origin + "/";
var appDir = window.location.pathname.substr(1);
appDir = appDir.substr(0, appDir.indexOf('\/')) + "/";
var appAddress = host + appDir;
console.log(appAddress);
$(document).ready( function () {
    $('#table_id').DataTable();

    $('.add-btn').click(function(event) {
      var route = appAddress + this.dataset.aisyfaefgw + "/formularz/";
      $('.modal-content').load(route, function() {
        $('.modal-form').validate(validatorRules);
        $('#modal-base').modal('show');
      });
      event.preventDefault();
    });

    $('.edit-btn').click(function(event) {
      var route = appAddress + this.dataset.aisyfaefgw + "/edytuj/" + this.dataset.id;
      $('.modal-content').load(route, function() {
        $('.modal-form').validate(validatorRules);
        $('#modal-base').modal('show');
      });
      event.preventDefault();
    });
} );