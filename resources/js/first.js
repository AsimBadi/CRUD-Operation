$(document).ready(function () {
    $('#form').validate({
        rules:{
            name:{
                required: true,
                minlength: 3},
            email:{
                required: true,
                email: true
            },
            description:{
                required: true,
                minlength: 10
            },
            'machines[]':{
                required: true
            },
            gender:{
                required: true
            },
            country:{
                required: true
            },
            categories_id:{
                required: true
            }
        },
        messages:{
            name:{
                required: 'Username is Required',
                minlength: 'Username must contain 3 characters'
            },
            email:{
                required: 'Email is Required',
                email: 'Please enter a valid Email'
            },
            description:{
                required: 'Description is required',
                minlength: 'Description must contain 10 characters'
            },
            'machines[]':{
                required: 'Please Select your Machines'
            },
            gender:{
                required: 'Please select your Gender'
            },
            country:{
                required: 'Please select your country'
            },
            categories_id:{
                required: 'Please select a Category'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
