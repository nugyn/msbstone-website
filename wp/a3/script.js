var qty = 1;
var result = document.getElementById("qty");
var price = parseFloat(document.getElementById("pricechange").innerHTML);
var temp = price;

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

function checkinput(){
  result.value = qty;
}

function submitValue(){
  if(typeof Number(result.value) == "number" && result.value > 0 && Number.isInteger(Number(result.value)))
  {
    return true;
  }
  else {
    alert("Quantity must be a integer bigger than 0!");
    return false;
  }
}

function updatePrice(){
  var final = temp * result.value;
  document.getElementById("pricechange").innerHTML = final.toFixed(2);

}
