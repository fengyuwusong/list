$(document).ready(function () {
	function getPeople() {
        $.ajax({
            type: "post",
            url :getPeopleURL,
             data:{
             },
            dataType: "json",
            success: function (res) {
               // console.log(res);
               console.log(res.Data[0].class);
               for (var i = 0; i < res.Data.length; i++) {
                   var str='<tr><td>'+res.Data[i].key+'</td><td>'+res.Data[i].name
                          +'</td><td>'+res.Data[i].sex+'</td><td>'+res.Data[i].grade
                          +'</td><td>'+res.Data[i].major+'</td><td>'+res.Data[i].class
                          +'</td><td>'+res.Data[i].position+'</td><td>'+res.Data[i].motto
                          +'</td><td>'+res.Data[i].summary+'</td></tr>'
                        $(".showMes").append(str);
               };
            }
        });
    };
    getPeople();
})