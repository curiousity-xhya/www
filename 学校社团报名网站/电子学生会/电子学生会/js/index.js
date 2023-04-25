window.onload = function () {

   $('#sign').click(function () {

      var loginname = $('#loginname').val();
      var professionalname = $("#professionalname").val();
      var collegename = $("#collegename").val();
      var departmentone = $('#departmentone option:selected').val()
      var departmenttwo = $('#departmenttwo option:selected').val()
      var gender = $('input[type=radio][name=gender]:checked').val()
      var reason = $("#reason").val();
      var qq = $("#QQ").val();
      var phone = $("#phone").val();

      //alert(loginname+professionalname+collegename+departmentone+departmentone+gender+reason+qq+phone);


      if (loginname == '' || professionalname == '' || collegename == '' || departmentone == '' || departmenttwo == '' || gender == '' || reason == '' || phone == '' || qq == '') {
         alert("所有数据均必填");
      } else {

         $.ajax({
            type: "POST",
            url: "server/signup.php",
            dataType: "JSON",
            data: {
               "loginname": loginname,
               "professionalname": professionalname,
               "collegename": collegename,
               "departmentone": departmentone,
               "departmenttwo": departmenttwo,
               "gender": gender,
               "reason": reason,
               "phone": phone,
               "qq": qq,
            }

         })
         alert("报名成功");
         $('#myModal').modal('hide');

      }
   })


   $("#myModal").on("hidden.bs.modal", function () {
      $(this).removeData("bs.modal");
   });
}