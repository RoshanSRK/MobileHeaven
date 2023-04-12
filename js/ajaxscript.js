function loadCart() {
      $.ajax({    
        type: "GET",
        url: "backend-script.php",             
        dataType: "html",                  
        success: function(data){                    
            $("#table-container").html(data); 
        }
    });
});

var ajax_call = function() {
  //your jQuery ajax code
};

var interval = 1000 * 60 * X; // where X is your every X minutes

setInterval(ajax_call, interval);

var $producid


INSERT INTO shoppingcart(sid,productId,quantity) VALUES ('$sid','$productid','quantity')