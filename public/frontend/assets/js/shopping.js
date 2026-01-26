$(function () {

    // Function to update total for a given row
    function updateTotal(row) {
        let basePrice = parseFloat(row.find('.baseprice').text().replace('$', ''));
        let qty = parseInt(row.find('.product_counter').val());
        row.find('.totalprice').text('$' + (basePrice * qty).toFixed(2));
      
      
    }


    // Function to update subtotal (sum of all row totals)
    function updateSubtotal() {
        let sum = 0;
        $('.totalprice').each(function () {
            let val = parseFloat($(this).text().replace('$', ''));
            if (!isNaN(val)) {
                sum += val;
            }
        });
        // update both subtotal spans
        $('.subtotal').text('$' + sum.toFixed(2));
    }

    // Initialize totals on page load
    $('tr').each(function () {
        updateTotal($(this));
    });
    updateSubtotal();

    // Increment button
    $('.increment').on('click', function () {
        let row = $(this).closest('tr');
        let qty = parseInt(row.find('.product_counter').val());

        if (qty < 20) {
            qty++;
            row.find('.product_counter').val(qty);
            updateTotal(row);
            updateSubtotal();
            row.find('.decrement').css({ 'cursor': 'pointer' });
        } else {
            $(this).css({ 'cursor': 'not-allowed' });
        }
    });

    // Decrement button
    $('.decrement').on('click', function () {
        let row = $(this).closest('tr');
        let qty = parseInt(row.find('.product_counter').val());

        if (qty > 1) {
            qty--;
            row.find('.product_counter').val(qty);
            updateTotal(row);
            updateSubtotal();
            row.find('.increment').css({ 'cursor': 'pointer' });
        } else {
            $(this).css({ 'cursor': 'not-allowed' });
        }
    });

    // Manual input change
    $('.product_counter').on('input', function () {
        let row = $(this).closest('tr');
        updateTotal(row);
        updateSubtotal();
    });
});