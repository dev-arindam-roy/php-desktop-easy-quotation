/* Init */
$('.select2').select2({
    placeholder: "Select Your Requirement",
});
$("select").on("select2:open", function(event) {
    $('input.select2-search__field').attr('placeholder', 'Search..');
});
$('.multi').multiselect({
    buttonWidth : '100%',
    includeSelectAllOption : true,
    nonSelectedText: 'Select Your Requirement',
    enableFiltering: true,
    filterPlaceholder: 'Search..',
    enableCaseInsensitiveFiltering: true,
    //enableClickableOptGroups: true,
    //enableCollapsibleOptGroups: true,
    selectAllText: 'Select All',
    maxHeight: 200,
    numberDisplayed: 2,
    onChange: function(element, checked) {
      console.log('change');
    },
    onDropdownHide: function(event) {
      console.log('hide');
      if($('#application').val().length > 0) {
        $('#application').closest('.form-group').removeClass('has-error');
        $('#application-error').html('');
      }
    }
});

/* Validation and Form Submit */
$('#Qfrmx').validate({
  errorElement: 'span',
  errorClass : 'roy-vali-error',
  ignore: [],
  normalizer: function( value ) {
  return $.trim( value );
  },
  rules: {
    "application[]" : {
      required : true
    },
    project_type : {
      required : true
    },
    
  },
  messages: {
    "application[]" : {
      required : "Please select your application type."
    },
    project_type : {
      required : "Please select your project type."
    },
    
  },
  errorPlacement: function(error, element) {
      //element.parent('.form-group').addClass('has-error');
      //element.closest('.form-group').addClass('has-error');

      if(element.hasClass('select2')) {
        error.insertAfter(element.next('span'));
      } else if (element.hasClass('multi')) {
        error.insertAfter(element.parent());
      } else if (element.attr("data-error-container")) { 
        error.appendTo(element.attr("data-error-container"));
      } else {
        error.insertAfter(element);
      }
  },
  success: function(label) {
      label.closest('.form-group').removeClass('has-error');
  },
  submitHandler : function(form) { 
      $.ajax({
        type: form.method,
        url: form.action,
        data: $(form).serialize(),
        cache: false,
        beforeSend: function() {
          $('#Qform').block({ 
            message: '<h5>Quotation Process<br/>Please wait...</h5>', 
            css: { 
              border: '5px solid #ccc', 
              borderRadius: '5px',
              padding: '15px', 
              backgroundColor: '#000', 
              '-webkit-border-radius': '10px', 
              '-moz-border-radius': '10px', 
              opacity: .5, 
              color: '#fff' 
            } 
          });
        },
        success: function(rtnHtml) {
          if(rtnHtml != '') {
            $('#Qform').unblock();
            $('#FormBox').hide(function() { 
              $('#QuotBox').show();
              $('#QuotBox #tabHolder').html(rtnHtml);
            } );
          }
          //form.reset();
        },
        error: function(ajx_err) {
          
        }
      });
      //return false;
  }
});

/** select2 onchange **/
$('.select2').on('change', function() { 
  $(this).closest('.form-group').removeClass('has-error');
  $('#' + $(this).attr('id') + '-error').text('');
} );


/** Back **/
$('#backFrm').on('click', function() { 
  $('#QuotBox').hide(function() { 
    $('#FormBox').show();
  } );
} );

function printdiv1(printpage) {
  if(confirm('Are you sure to download this PDF ?')) {
    $('#backFrm').hide();
    var headstr = "<html><head><title>Creative Syntax Solutions - Instant Quotation</title></head><body>";
    var footstr = "</body>";
    var newstr = document.all.item(printpage).innerHTML;
    var oldstr = document.body.innerHTML;
    document.body.innerHTML = headstr+"<p style='text-align:center; color:silver;'><i>We believe in transparency and very happy to help you, Thankyou!</i></p>"+newstr+footstr;

    window.print();
    document.body.innerHTML = oldstr;
    return false;
  }
}