/**
 * Created by FMMBUGUA on 6/19/2017.
 */
/*
 *
 * This code is written by Joseph Nzioka
 * You may only use APIs inferred to in here with permission from TrioPoint Solutions,
 * otherwise the code is yours if you understand it -:)
 *
 * This code is meant for Ticko System.
 * When I created it this, only God and I understood it, now, only God. Please increment hours wasted for the
 * next lazy developer!
 * TIME WASTED: 12 HRS
 */

$(document).ready(function () {
    getClientDetails()

});

function getClientDetails() {
    $('#client-first-name').empty();
    $('#client-full-name').empty();
    $('#client_prof_fullname').empty();
    $('#client_prof_username').empty();
    $('#client_prof_phone_number').empty();

    var url = "/ticko/Controllers/getClientDetails/";

    $.ajax({
        type        : 'GET', // define the type of HTTP verb we want to use (POST for our form)
        url         : url, // the url where we want to POST // our data object
        dataType    : 'json', // what type of data do we expect back from the server
        encode      : true
        // dataSrc : 'data'

    })
    // using the done promise callback

        .done(function(data) {

            // log data to the console so we can see
            // console.log(data);

            $(data.data).each(function(key,value){

                if(value.response === true){

                    // For all pages
                    $('#client-first-name').html(data.data.c_f_name);
                    $('#client-full-name').html(data.data.c_f_name+" "+data.data.c_l_name);

                    // For profile page
                    $('#client_prof_fullname').html(data.data.c_f_name+" "+data.data.c_l_name);
                    $('#client_prof_username').html(data.data.c_username);
                    $('#client_prof_phone_number').html(data.data.c_phone);

                }else{



                }

            });
            // here we will handle errors and validation messages
        })

        .fail(function() {



        });
}
