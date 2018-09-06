var qty = 1;
var result = document.getElementById("qty");

function plus(){
  qty++;
  result.value = qty;
}

function minus(){
  if(qty > 0){
  qty--;
  result.value = qty;
 }
}
