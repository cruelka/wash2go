
(function( $ ){



function addItem(i){

    $.ajax({
        type: "GET",
        url: '/cart/'+i,
        headers: {
            'X-CSRF-TOKEN': token,
        },
        processData: false,
        contentType: false,
        
    }).done(function(data) {
        if(data=='success'){
            alert('Done');
        } else {
            alert('Wrong')
        }
        
    });
    
}

window.cart = {};

window.cart.add = addItem;

})( jQuery );

