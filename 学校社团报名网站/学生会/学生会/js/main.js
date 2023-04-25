function come() {
    $("html,body").animate({ scrollTop: $("#come").offset().top }, 500); //定位到加入我们
}

function person() {
    $("html,body").animate({ scrollTop: $("#person").offset().top }, 500); //定位到加入我们
}

function C_close() {
    // $('#myModal').modal('hide');

    var loginname = document.getElementById("loginname").value;
    var professionalname = document.getElementById("professionalname").value;
    var collegename = document.getElementById("collegename").value;
    var phone = document.getElementById("phone").value;
    var QQNum = document.getElementById("QQ").value;
    var reason = document.getElementById("reason").value;
    // department
    var myType = document.getElementById("department"); //获取select对象
    var index = myType.selectedIndex; //获取选项中的索引，selectIndex表示的是当前所选中的index
    var depart = myType.options[index].value; //获取选项中options的value值


    if (loginname === "" || professionalname === "" || collegename === "" || phone === "" || QQNum === "") {
        alert("请补全信息再提交嗷！")
    } else {
        $('#myModal').modal('hide');
        alert("提交成功，" + "\n姓名:" + loginname + "，部门:" + depart + "，专业:" + professionalname + "，院系:" + collegename + "，手机号:" + phone + "，QQ:" + QQNum);
        alert("提交成功！" + "欢迎" + loginname + "祝您大学生活更加精彩!o(*￣▽￣*)o")
    }
}