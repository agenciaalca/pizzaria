/* - Quick Contact Form */
$("#btn_submit").on("click", function(event) {
event.preventDefault();
        var mydata = $("form").serialize();
        $.ajax({
        type: "POST",
                dataType: "json",
                url: "contact.php",
                data: mydata,
                success: function(data) {
                if (data["type"] == "error"){
                $("#alert-msg").html(data["msg"]);
                        $("#alert-msg").removeClass("alert-msg-success");
                        $("#alert-msg").addClass("alert-msg-failure");
                        $("#alert-msg").show();
                } else {
                $("#alert-msg").html(data["msg"]);
                        $("#alert-msg").addClass("alert-msg-success");
                        $("#alert-msg").removeClass("alert-msg-failure");
                        $("#input_name").val("");
                        $("#input_email").val("");
                        $("#input_phone").val("");
                        $("#input_subject").val("");
                        $("#textarea_message").val("");
                        $("#alert-msg").show();
                }
                },
                error: function(xhr, textStatus, errorThrown) {
                alert(textStatus);
                }
        });
});
    


