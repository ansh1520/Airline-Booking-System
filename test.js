var table = document.getElementById('table'),
    selected = table.getElementsByClassName('selected');
table.onclick = highlight;
function highlight(e) {
    if (selected[0]) selected[0].className = '';
    e.target.parentNode.className = 'selected';
}
function fnselect(){
var $row=$(this).parent().find('td');
    var clickeedID=$row.eq(0).text();
    alert(clickeedID);
}