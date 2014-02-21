$(document).ready(function() {
    $('.buy').click(function(){
        if ($('qty-' + $(this).attr("data-art")) < 0){
            alert("Invalid quantity");
            return;
        }
        $.get('./cart.php', { 'id' : $(this).attr("data-art"), 'count' : $('#qty-' + $(this).attr("data-art")).val()},
            function( data ) {
                $('#artCount').text(data);
            }
            )
    });

    $('#emptyCart').click(function(){
        $.get('./cart.php', { 'emptyCart' : 1 }, 
            function( ) {
                location.reload();
            }
            )
    });
});