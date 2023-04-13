$(document).ready(function () {
    $('.cart').click(function () {
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'server/cart/add_to_cart.php',
            type: 'POST',
            data: { id: id },
            success: function (data) {
                alert('Product added to cart.');
            },
            error: function (data) {
                alert('Error: ' + data);
            }
        });
    });
});