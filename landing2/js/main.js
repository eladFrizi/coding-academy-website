/**
 * Created by Itay Amar on 12/17/2015.
 */

"use strict";


$(document).ready(function () {

    /***********CLOSE NAVBAR ON CLICK- MOBILE******************/

    $('#navbar a').click(function () {
        if ($('#navbar').hasClass('in')) {

            $('#navbar').collapse('hide');
        }
    });

    /**************CONTACT FORM SUBMITTED***************************/

    $('#contactForm').submit(function (e) {
        $('#contactSubmit').addClass('disabled');
        e.preventDefault();
        // Google conversion tracking
        var google_conversion_id = 1013445257;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "ZS6gCJjYo2UQieWf4wM";
        var google_conversion_value = 0;

        function trackConversion() {
            document.write = function(text) {
                $('#contactSubmit').append(text);
            };
            $.getScript('https://www.googleadservices.com/pagead/conversion.js');
            console.log('tracking conversion');
        }

        /* then somewhere in your UI code: */
        trackConversion();

        var data = {
            name: $('#name').val(),
            email: $('#email-user').val(),
            phone: $('#phone').val(),
            msg: $('#message').val(),
			captcha: $('#captcha').val(),
            emp: $('#emp').val()
        };
        console.log(data)
        $.ajax({
            type: "POST",
            url: 'contact.php',
            data: data,
            success: function (response) {
				
                doWhenFinish(response.trim());
            },
            error: function (error) {
                console.log('Error:', error);
                doWhenFinish();
            }
        });

        function doWhenFinish(res) {
            var resParsed = JSON.parse(res)
			$('#contactSubmit').removeClass('disabled');
			if (resParsed.alert !== 'success'){
    		  alert('Something Went Wrong, please try again');
			} 
			else {
				window.location.assign('http://coding-academy.org/thank.html')    
				$('#contactForm').addClass('hide-only');
				$('#thank-you').fadeIn();
				$('#name').val('');
				$('#emai1').val('');
				$('#phone').val('');
				$('#message').val('');
				$('#captcha').val('');
				setTimeout(function () {
					$('#contactForm').removeClass('hide-only');
					$('#thank-you').hide();
				}, 7000);
			}
        }
    });


});