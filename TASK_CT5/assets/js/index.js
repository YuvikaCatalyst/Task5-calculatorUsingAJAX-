$(document).ready(function(){
    $("#Btn").click(function(e){
        e.preventDefault();
        var value1=$("#value1").val();
        var value2=$("#value2").val();
        var operator=$("#operator").val();

        $.ajax({
            type: "post",
            url: "result.php",
            data:{
                value1: value1,
                value2: value2,
                operator:operator 
            },
            success:function(response){
            
             alert("THE ANSWER ON PERFORMING OPERATION IS :"+response.result);
            }

        })
    })
})



