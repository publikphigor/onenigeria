$('document').ready(function(){

    $('form').on('submit', function(){


        $.ajax({

            url: '',
            method: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){

            },
            error: function(data){

            },
            fail: function(data){
                
            }

        })

        return false;

    })

})