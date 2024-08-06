

function getCakeSizePrice() {


x = document.getElementById("selectedcake").value;


return x;
}


function getFillingPrice() {


y = document.getElementById("filling").value;
return y;
}
function getcount() {


zz = document.getElementById("count").value;
return zz;
}







function calculateTotal() {
var   total;
var floatvalue ;
if(getCakeSizePrice()==1  )
{
floatvalue = getcount() * 0.045 ;
total = floatvalue.toFixed(2);

}else if(getCakeSizePrice()==2)
{

floatvalue = getcount() * 0.028 ;
total = floatvalue.toFixed(2);

}


}

document.getElementById('totalPrice').innerHTML = " Total is: $" + total;
var totalEl = document.getElementById('totalPrice');
$( "input[name='total_cost']" ).val(total);
totalEl.style.display = 'block';
}

function hideTotal() {
var totalEl = document.getElementById('totalPrice');
totalEl.style.display = 'none';
}

