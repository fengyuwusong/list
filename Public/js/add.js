$(document).ready(function () {

  $(".submit").on("click",function(e){
    var birthday=$("#birthday").val();
       addPeople();
    })
	function addPeople() {
        $.ajax({
            type: "post",
            url :addPeopleURL,
             data:{
                name:$(".name").val(),
                grade:$(".grade").val(),
                sex:$(".sex").val(),
                major:$(".major").val(),
                class:$(".class").val(),
                position:$("#position").val(),
                motto:$("#motto").val(),
                birthday:birthday,
                summary:$("#summary").val(),
             },
            dataType: "json",
            success: function (res) {
               console.log(res);

               if(res.Status==1) alert(res.Mes);
               else if(res.Status==200) alert(res.Mes);
            }
        });
    };
    
})