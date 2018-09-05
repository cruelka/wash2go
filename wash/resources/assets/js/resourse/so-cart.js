import Noty from 'noty';

(function( $ ){

function modalProcced(){

}

function removeItem(hash){
    let formData = new FormData();

    formData.append('hash',hash);

    $.ajax({
        type: "POST",
        url: '/cart/remove/',
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: formData,
        processData: false,
        contentType: false,
        
    }).done(function(data) {
        if(data=='success'){
            alert('Done');
            new Noty({

                text: 'Some notification text',
            
            }).show();
            
        } else {
            alert('Wrong');
        }
        
    });
    
}


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

