$(document).ready(function () {
   
    $("#country").on("change", function () {
       var countryId = $("#country").val();
       
       $.ajax({
           method: "POST",
           url: "ajax.php",
           data: {countryId:countryId},
           dataType: "html",
           success: function (data) {
               $("#state").html(data);
           }
       });
    });
});

$(document).ready(function () {
    
    $("#state").on("change", function () {
        var stateId = $("#state").val();
        
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: {stateId:stateId},
            dataType: "html",
            success: function (data) {
                $("#city").html(data);
            }
        });
    });
    
});

$(document).ready(function () {
   
    $("#date_id").on("change", function () {
    
        var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    
        var date = new Date($('#date_id').val());
        var day = date.getDay();
        var dayname = days[day];
    
        $.ajax({
            method: "POST",
            url: "ajax.php",
            data: {dayname:dayname},
            dataType: "json",
            success: function (data) {
                var response  = JSON.parse(JSON.stringify(data));
                //console.log(response.name);
                //$("#day").html(data);
                $('#day').html("<option value="+response.id+">"+response.day+"</option>");
                $('#period').html("<input type='checkbox' name='p_name' value="+response.id+">" + response.name);
            }
        });
        
    });
});