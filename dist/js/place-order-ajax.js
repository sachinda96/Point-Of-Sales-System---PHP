/**
 * Created by Amila Harshana on 12/3/2017.
 */
$("#combo").on('change',function () {

    var querystring=$("#combo").val();
    var httpRequest=new XMLHttpRequest();


    httpRequest.onreadystatechange=function () {
        if(httpRequest.readyState===4 && httpRequest.status===200){
            var output=httpRequest.responseText;
            $("#custName").val(output);
        }
    };

    httpRequest.open('GET','customer-service.php?id='+querystring+'',true);

    httpRequest.send();
});

$("#cmbItem1").change(function(){

    var httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function(){
        if (httpRequest.readyState === 4 & httpRequest.status === 200){
            var item = JSON.parse(httpRequest.responseText);

            $("#description").val(item.description);
            $("#price").val(item.unitPrice);
            $("#qtyOnHand").val(item.qtyOnHand);
        }
    };

    var queryString = encodeURIComponent($("#cmbItem1").val());

    httpRequest.open('GET','item-service.php?id=' + queryString,true);

    httpRequest.send();
});

