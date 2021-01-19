
function pDriveIntegration() {
    var name  = $("input[name = 'name']").val();
    var label  = $('#label option:selected').val();
    var phone = $("input[name = 'phone']").val();
    var phone_label  = $('#phone_label option:selected').val();
    var email = $("input[name = 'email']").val();
    var email_label  = $('#email_label option:selected').val();

    // Essential fro API's
    var url = "https://api.pipedrive.com/v1";
    var rsrc_deals = "/persons";
    var api_token = "05d18ba52491821e4339deafe45c609238f91f8a";
    // Create JSON Data 
    var dealJson = '{'+'"name": "'+name+'","label": "'+label+'","email":'+'[{'+'"label": "'+email_label+'","value": "'+email+'","primary": true'+'}]'+',"phone":'+'[{'+'"label": "'+phone_label+'","value": "'+phone+'","primary": true'+'}]}'; 
    
    var xhrDeal = new XMLHttpRequest();
    xhrDeal.onreadystatechange = function () {
        if (xhrDeal.readyState == 4 && xhrDeal.status == 201) {
            var obj = JSON.parse(xhrDeal.responseText);
            var deal_id = obj.data.id;
            window.location.href = 'http://localhost/pipeline/deal.php';


            // Call Deals api here
        }
    }
    xhrDeal.open("POST", url + rsrc_deals + "?" + "api_token" + "=" + api_token, false);
    xhrDeal.setRequestHeader("Content-type", "application/json");
    xhrDeal.send(dealJson);

}


function makeDeal() {
    var title  = $("input[name = 'title']").val();
    var person_id  = $("input[name = 'person_id']").val();
    var value  = $("input[name = 'value']").val();
    var expected_close_date  = $("input[name = 'expected_close_date']").val();
    var protype  = $('#pro_type option:selected').val(); 
    var bedrooms  = $("input[name = 'bedrooms']").val();
    var pro_address  = $('textarea#pro_address').val();
    var sell_date  = $("input[name = 'sell_date']").val();

    // Essential fro API's
    var url = "https://api.pipedrive.com/v1";
    var rsrc_deals = "/deals";
    var api_token = "05d18ba52491821e4339deafe45c609238f91f8a";
    // Create JSON Data 
    var dealJson = '{' + '"title":"'+title+'"' + ',"person_id": "'+person_id+'"' + ',"value":"'+value+'"' + ',"expected_close_date": "'+expected_close_date+'"' + ', "c1fc0b83dea0d9cc50f6186f168a390cccba33a0": "'+protype+'"' + ',"2cffd855a084b1f88d7d03fdbd216375fc906648": "'+bedrooms+'"' + ', "bc33a7dde64dd5d6866a45c6711abb8521caa2fc": "'+sell_date+'"' + ',"7889d108c3c53563ab4796a071587c71fb601dcc": "'+pro_address+'"' + '}'; 
    
    var xhrDeal = new XMLHttpRequest();
    xhrDeal.onreadystatechange = function () {
        if (xhrDeal.readyState == 4 && xhrDeal.status == 201) {
            var obj = JSON.parse(xhrDeal.responseText);
            var deal_id = obj.data.id;
        }
    }
    xhrDeal.open("POST", url + rsrc_deals + "?" + "api_token" + "=" + api_token, false);
    xhrDeal.setRequestHeader("Content-type", "application/json");
    xhrDeal.send(dealJson);
}
