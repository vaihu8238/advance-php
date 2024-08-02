$(document).on("click","#btn_add",function(){
    data =  $('#user_form').serialize();
    console.log(data)

    $.ajax({
        data: data,
        type: "post",
        url: "save.php",
  
     "success":function (result){
        console.log(result)
        console.log(JSON.parse(result))

        dataResult = JSON.parse(result);
        console.log(dataResult.status)

        if(dataResult.status ==200)
        {
            
            $('#exampleModal').hide();
            alert("data added..!");
            window.location.reload();

        }
    }
});
      
});

$(document).ready(function(){
    getdata();
});
function getdata()
{
    $.ajax({
        type:"GET",
        url: "fetch.php",
        success : function (response){
            // console.log(response);
        
        $.each(response, function(key,value){
            console.log(value['name']);

            $('.userdata').append('<tr>'+
              '<td>'+value['id']+'</td>\
              <td>'+value['fname']+'</td>\
              <td>'+value['lname']+'</td>\
              <td>'+value['email']+'</td>\
              <td>\
                <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>\
                <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>\
              </td>\
            </tr>\ ');
            
        })
    }

  });  

}