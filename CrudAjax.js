$(document).ready(function () {
    var form = $('#myform');

    display();

    // $("#submit").click(function () {
    //     $.ajax({
    //         url: "insert.php",
    //         type: 'post',
    //         data: $("#myform input").serialize(),
    //         success: function (data) {
    //             console.log("insert done");


    //         }
    //     });

    // });


    // $( "#myform" ).submit(function( event ) {
    //     alert( "Handler for .submit() called." );
    //     event.preventDefault();
    //   });


    $("#myform").submit(function ( even ) {


        var username = document.getElementById("username").value;
        var password = document.getElementById("pass").value;
        if(username.trim()==""){
            document.getElementById("username").focus();
            alert("Username should be write");
    
            
    
        }else if(password.trim()==""){
            document.getElementById("pass").focus();
            alert("Password should be set");
        }
        else{

        $.ajax({
            url: 'insert.php',
            type: 'POST',
            data: {
                username: username,
                password: password
            },
            success: function (responce) {

                console.log('insert Operation Is Work');
                var username = document.getElementById("username").value = "";
                var password = document.getElementById("pass").value = "";
               
                display();


            }


        });

    } 
        event.preventDefault();
    

    });



    $("#Update").click(function () {


        var id = document.getElementById("id").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("pass").value;

        $.ajax({
            url: 'Update.php',
            type: 'POST',
            data: {
                id: id,
                username: username,
                password: password
            },
            success: function (responce) {

                console.log('Update Operation Is Work');
                var id = document.getElementById("id").value = "";
                var username = document.getElementById("username").value = "";
                var password = document.getElementById("pass").value = "";
                document.getElementById("Update").style.display="none";
                document.getElementById("submit").style.display="block";
                display();


            }


        });


    });


    $("#searchstring").keyup(function () {

        var search = document.getElementById("searchstring").value;
        $.ajax({
            url: 'search.php',
            type: 'POST',
            data: {
                search: search
            },
            success: function (responce) {
                $("#responce").html(responce);
            }

        });

    });


});

function Delete(id) {
    console.log(id);
    $.ajax({
        url: 'delete.php',
        type: 'POST',
        data: {
            id: id
        },
        success: function (responce) {

            console.log('Delete Operation Is Work');
            display();


        }

    });
}



function display() {

    $.ajax({
        url: 'display.php',
        type: 'post',
        success: function (responcedata) {
            $('#responce').html(responcedata);
        }


    });

}

function Edit(id, username, password) {

    document.getElementById("username").value = username;
    document.getElementById("id").value = id;
    document.getElementById("pass").value = password;
    document.getElementById("Update").style.display="block";
    document.getElementById("submit").style.display="none";

    document.getElementById("username").focus();



}

// Validation Function 


