<script type="text/javascript">
// Class Definition

var ShowErrorMsg = function(form, msg) {
  var alert = $(`
  <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300" role="alert">
    ${msg}
  </div>`);
    
  form.find('.alert').remove();
  alert.prependTo(form);
}

var SetMsgErrManual = async function(name,msg) {
  $(`#${name}`).parent().parent().addClass('validate is-invalid');
  $(`#${name}`).addClass('is-invalid');
  $(`#${name}`).parent().append(`<div id="${name}-error" class="error invalid-feedback">${msg}</div>`);
}

var LoginHandler = function() {
  var FormHandler = function() {
    $('#btnLogin').click(async function(e) {
      e.preventDefault();
      var btn = $(this);
      var form = $(this).closest('form');
		  var frmData = new FormData(form[0]);
      
      btn.attr('disabled', true);

      await $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        url: 'login',
        data: frmData,
        contentType: false,
        processData: false,
        dataType: 'json',
        method: 'POST',
        success: function(resp) {
          if (resp.status == true) {
            location.reload();
          }
          else {
            setTimeout(function() {
              btn.attr('disabled', false);
              ShowErrorMsg(form, resp.message);
            }, 1000);
          }
        }
      });
    });
  }
  
  // Public Functions
  return {
    // public functions
    init: function() {
      FormHandler();
    }
  };
}();

// Class Initialization
jQuery(document).ready(function() {
  LoginHandler.init();
});
</script>