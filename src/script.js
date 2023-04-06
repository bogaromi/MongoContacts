var addRowButton = document.getElementById("addRow");

addRowButton.onclick = function(evt)
{
 evt.preventDefault();
  
  var html = '<div class="row">';
   html += '<div class="col-4">';
   html += '<select class="form-control">';
   html += '<option value="nickname">Becenév</option>';
   html += '<option value="title">Kinevezés</option>';
   html += '<option value="phonenumbers[]">További telefonszám</option>';
   html += '<option value="emails[]">További E-mail cím</option>';
   html += '<option value="adress">Cím</option>';
   html += '<option value="facebook">Facebook</option>';
   html += '<option value="instagram">Instagram</option>';
   html += '</select>';
   html += '</div>';
   html += '<div class="col-8">';
   html += '<input type="text" name="nickname" class="form-control">';
   html += '</div>';
   html += '</div>';
   
  var formDynamicElem = document.getElementById("formDynamic");
  var item = document.createElement("div");
  item.classList.add("mb-3");
  item.innerHTML = html;
  
  formDynamicElem.appendChild(item);
  
  var select = item.querySelector("select");
  select.onchange = function()
  {
   var key = select.value;
   var input = item.querySelector("input");
   input.setAttribute("name", key);
  };
  
};
