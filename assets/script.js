$(document).ready(function(){
    // delete 
    $('.remove').click(function() {
        var el = this;
        console.log(el);
        // // Delete id
        var id = $(this).data('id');
        console.log(id);
        var confirmalert = confirm("Do you want to remove this item?");
        if (confirmalert == true) {
            // console.log("HI");
        //     // AJAX Request
            $.ajax({
                url: 'api/remove.php',
                type: 'POST',
                data: { id:id },
                success: function(response){
                    console.log(response);
                    if(response == 1){
                        // Remove row from HTML Table
                        $(el).closest('tr').css('background','tomato');
                        $(el).closest('tr').fadeOut(800,function(){
                            $(this).remove();
                        });
                    }else{
                        alert('Invalid ID.');
                    }
                }
            });
        }
    });
});