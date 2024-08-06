$(document).ready(function() {

    // Radio box border
    $('.method').on('click', function() {
      $('.method').removeClass('blue-border');
      $(this).addClass('blue-border');
    });

    // Validation
    var $cardInput = $('.input-fields input');

    $('.next-btn').on('click', function(e) {

      $cardInput.removeClass('warning');

      $cardInput.each(function() {
         var $this = $(this);

         if (!$this.val()) {
           $this.addClass('warning');
         }
      });

    });

  });







  function getCakeSizePrice() {
    x = document.getElementById("selectedcake").value;
    return x;
    }
    function getcount() {
     zz = document.getElementById("count").value;
    return zz;
    }
function calculateTotal() {
    var total;
    if(getCakeSizePrice()==1  )
    {
    total = getcount() * 0.040 ;

    }else if(getCakeSizePrice()==2 )
    {

    total = getcount() * 0.028 ;


    }

    document.getElementById('totalPrice').innerHTML =  total+"-TL" ;
    var totalEl = document.getElementById('totalPrice');
    $( "input[name='total_cost']" ).val(total);
    totalEl.style.display = 'block';
    }

    function hideTotal() {
    var totalEl = document.getElementById('totalPrice');
    totalEl.style.display = 'none';
    }








