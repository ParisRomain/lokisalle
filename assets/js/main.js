
$(function(){
    var $select = $(".1-500");
    for (i=1;i<=500;i++){
        $select.append($('<option></option>').val(i).html(i))
    }
});