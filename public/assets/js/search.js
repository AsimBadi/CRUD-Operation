$(document).ready(function () {
    $('#form').validate({
        rules:{
            search: {
                required: true
            },
            data_type:{
                required: true
            }
        },
        messages:{
            search:{
                required: "Please Enter Search"
            },
            data_type:{
                required: "Select Type You want to search"
            },
            submitHandler: function(form) {
                form.submit(); // Allow form submission
            }
        }
    });
});
