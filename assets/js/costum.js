$(document).ready(function() {

    $("#formAddPhone").submit(function(e) {

        e.preventDefault();

        $.ajax({
            url: "http://phonebook.php/Contacts/add",
            method: "POST",
            data: $("#formAddPhone").serialize(),
            success: function(res) {
                $(".responseMsg").show();
                $(".responseMsg").html(res);
            },
            error: function(err) {

            }
        })
    })

})