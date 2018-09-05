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
            let noty = new Noty({

                text: 'Some notification text',
            
            }).show();

            console.log(Noty);

            
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

            var n = new Noty({
                theme: 'relax',
                type: 'success',
                layout: 'bottomRight',
                text: 'Do you want to continue?',
                buttons: [
                  Noty.button('YES', 'btn btn-success', function () {
                      console.log('button 1 clicked');
                      window.location = 'https://wash2go.ae/cart';
                  }, {id: 'button1', 'data-status': 'ok'}),
              
                  Noty.button('NO', 'btn btn-error', function () {
                      console.log('button 2 clicked');
                      n.close();
                  })
                ]
              });
              n.show();


            
        } else {
            alert('Wrong');
        }
        
    });
    
}

window.cart = {};

window.cart.add = addItem;

})( jQuery );

