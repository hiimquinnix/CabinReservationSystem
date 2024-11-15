$(document).ready(function () {
    

    $('#example').dataTable({
        order: [[0, 'desc']]
    });

    $("#logoutbtn").click(function (e) { 
        e.preventDefault();
        
        swal("Are you sure you want to logout?", {
            buttons: ["No", "Yes"],
        }).then((val) => {
            if(val) {
                $.ajax({
                    type: "post",
                    url: "functions/functions.php",
                    data: {
                        "logout": true
                    },
                    success: function (response) {
                        window.location.href = "../login.php";
                    }
                });
            }
        });
    });


    $(document).on("click", ".reservebtn", function (e) { 
        e.preventDefault();

        var id = $(this).attr("data-id");
        var email = $(this).attr("data-email");

        swal("Confirm Reservation?", {
            buttons: ["No", "Yes"],
        }).then((val) => {
            if(val) {
                $.ajax({
                    type: "post",
                    url: "functions/functions.php",
                    data: {
                        "reserve": true,
                        "id": id,
                        "email": email
                    },
                    
                    success: function (response) {
                        console.log(response);

                        if (response == 200) {


                            swal({
                                title: "BOOKED!",
                                text: "Reservation has been booked.",
                                icon: "success"
    
                            }).then((val) => {
                                window.location.reload()
                            })

                        } else {
                            swal({
                                title: "ERROR!",
                                text: "An error occured.",
                                icon: "error"
    
                            })
                        }
                        
                    }
                });
            }
        });
    });


    $(document).on("click", ".cancelbtn", function (e) { 
        e.preventDefault();

        var id = $(this).attr("data-id");
        var email = $(this).attr("data-email");

        swal("Decline Reservation?", {
            buttons: ["No", "Yes"],
        }).then((val) => {
            if(val) {
                $.ajax({
                    type: "post",
                    url: "functions/functions.php",
                    data: {
                        "cancel": true,
                        "id": id,
                        "email": email
                        
                    },
                    
                    success: function (response) {
                        console.log(response);

                        if (response == 200) {


                            swal({
                                title: "DECLINED!",
                                text: "Reservation has been declined.",
                                icon: "success"
    
                            }).then((val) => {
                                window.location.reload()
                            })

                        } else {
                            swal({
                                title: "ERROR!",
                                text: "An error occured.",
                                icon: "error"
    
                            })
                        }
                        
                    }
                });
            }
        });
    });

});