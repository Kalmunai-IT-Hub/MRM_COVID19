$('#submit_form').click(function(e) {
    e.preventDefault();
});


function formValidation(){

    var n_patt = new RegExp(/^[0-9]*$/);
    var s_patt = new RegExp(/^[A-Za-z ]+$/);
    var bprice = $("#bprice");
    var sprice = $("#sprice");

    if ($("#name").val() == "") {
        $("#name").addClass("border-danger");
        $("#name_error").html("<span class='text-danger'>Please Enter Your Name</span>");
    }
    else if($("#name").val() != "") {
        $("#name").removeClass("border-danger");
        $("#name_error").html("");
    }
    if ($("#nic").val() == "") {
        $("#nic").addClass("border-danger");
        $("#nic_error").html("<span class='text-danger'>Please Enter NIC No</span>");
    }
    else if($("#nic").val() != "") {
        $("#nic").removeClass("border-danger");
        $("#nic_error").html("");
    }
    if ($("#address").val() == "") {
        $("#address").addClass("border-danger");
        $("#address_error").html("<span class='text-danger'>Please Your Address</span>");
    }
    else if($("#address").val() != "0") {
        $("#address").removeClass("border-danger");
        $("#address_error").html("");
    }
    if ($("#mobile").val() == "") {
        $("#mobile").addClass("border-danger");
        $("#mobile_error").html("<span class='text-danger'>Please Your Mobile No</span>");
    }
    else if($("#mobile").val() != "") {
        $("#mobile").removeClass("border-danger");
        $("#mobile_error").html("");
    }
    if ($("#password").val() == "") {
        $("#password").addClass("border-danger");
        $("#pwd_error").html("<span class='text-danger'>Please Enter Password</span>");
    }
    else if ($("#password").val() != "") {
        $("#password").removeClass("border-danger");
        $("#pwd_error").html("");
    }
    if ($("#user_type").val() == "0") {
        $("#user_type").addClass("border-danger");
        $("#type_error").html("<span class='text-danger'>Please Choose User Type</span>");
    }
    else if ($("#user_type").val() != "0") {
        $("#user_type").removeClass("border-danger");
        $("#type_error").html("");
    }
    if (($("#name").val() != "")&&($("#nic").val() != "")&&($("#address").val() != "")&&($("#mobile").val() != "0")&&
        ($("#password").val() != "")&&($("#user_type").val() != "0")){
        return true;
    }
}