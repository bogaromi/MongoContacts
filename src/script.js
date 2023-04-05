var addRowButton = document.getElementById("addRow");

addRowButton.onclick = function(evt)
{
 evt.preventDefault();
  
  var html = '<div class="row">';
   html += ('<div class="col-6">');
   html += ('<select class="form-control"><option>Lorem ipsum</option></select>');
   html += ('</div>');
   html += ('<div class="col-6">');
   html += ('<input type="text" class="form-control">');
   html += ('</div>');
   html += ('</div>');
   
  var formDynamicElem = document.getElementById("formDynamic");
  var item = document.createElement("div");
  item.classList.add("mb-3");
  item.innerHTML = html;
  
  formDynamicElem.appendChild(item);
  
};
