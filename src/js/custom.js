

$(document).ready(function () {
    $("#regform").submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "post",
            url: "functions.php",
            data: $(this).serialize(),
        
            success: function (response) {
                if (response == 203) {
                    
                    swal({
                        title: "Success!",
                        text: "You have been registered!",
                        icon: "success",
                    }).then((value) => {
                        window.location.href = "login.php";
                    });
                }

                else if (response == 405) {
                    swal({
                        title: "Error!",
                        text: "User with same email already exist.",
                        icon: "error",
                    });
                }
            }
        });
    });

    $("#reserveform").submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "post",
            url: "functions.php",
            data: $(this).serialize(),
        
            success: function (response) {
                console.log(response);
                if (response == 203) {
                    
                    swal({
                        title: "Success!",
                        text: "Your reservation has been sent for verification.",
                        icon: "success",
                    }).then((value) => {
                        window.location.href = "user_panel.php";
                    });
                }

                else if (response == 405) {
                    swal({
                        title: "Error!",
                        text: "Date is not available for booking.",
                        icon: "error",
                    });
                }
                else  {
                    swal({
                        title: "Error!",
                        text: "Internal Error",
                        icon: "error",
                    });
                }
            }
        });
    });


    $("#loginform").submit(function (e) { 
        e.preventDefault();
        
        $.ajax({
            type: "post",
            url: "functions.php",
            data: $(this).serialize(),
        
            success: function (response) {
                if (response == 200) {
                    
                    swal({
                        title: "Success!",
                        text: "Welcome User!",
                        icon: "success",
                    }).then((value) => {
                        window.location.href = "user_panel.php";
                    });
                }

                else if (response == 201) {
                    swal({
                        title: "Success!",
                        text: "Welcome Admin!",
                        icon: "success",
                    }).then((value) => {
                        window.location.href = "admin/index.php";
                    });
                }

                else if (response == 403) {
                    swal({
                        title: "Error!",
                        text: "Email or Password is incorrect.",
                        icon: "error",
                    });
                }
            }
        });
    });


    $("#logoutbtn").click(function (e) { 
        e.preventDefault();
        
        swal("Are you sure you want to logout?", {
            buttons: ["No", "Yes"],
        }).then((val) => {
            if(val) {
                $.ajax({
                    type: "post",
                    url: "functions.php",
                    data: {
                        "logout": true
                    },
                    
                    success: function (response) {
                        window.location.href = "index.html";
                    }
                });
            }
        });
    });

    $(document).on("click", ".reservebtn", function (e) { 
        e.preventDefault();
        var id = $(this).attr("data-id");
        swal("Confirm Reservation?", {
            buttons: ["No", "Yes"],
        }).then((val) => {
            if(val) {
                $.ajax({
                    type: "post",
                    url: "functions.php",
                    data: {
                        "reserve": true,
                        "id": id
                    },
                    
                    success: function (response) {
                        swal({
                            title: "BOOKED!",
                            text: "Reservation has been booked.",
                            icon: "success"

                        })
                    }
                });
            }
        });
    });


});