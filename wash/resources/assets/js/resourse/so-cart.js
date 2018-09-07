import Noty from 'noty';

(function( $ ){

function modalProcced(){

}

function removeItem(hash,id){
    let formData = new FormData();

    formData.append('hash',hash);

    $.ajax({
        type: "POST",
        url: 'https://wash2go.ae/cart/remove',
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: formData,
        processData: false,
        contentType: false,
        
    }).done(function(data) {
        $('.shopping-card__item-'+id).remove();
            let noty = new Noty({

                theme: 'relax',
                type: 'success',
                layout: 'center',
                text: 'Removed',
            
            }).show();

            console.log(Noty);

            

        
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
                layout: 'center',
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

function update(hash,id,action){

    let formData = new FormData();

    let qut = $('.shopping-card__qty-'+id).text().trim();

    if(action=='minus'){
        qut = Number(qut) - 1;
        if(qut<1){
            var n = new Noty({
                theme: 'relax',
                type: 'success',
                layout: 'bottomCenter',
                text: 'Minimum quantity',
              });
              n.show();
            return false;
        }
    }

    if(action=='plus'){
        qut = Number(qut) + 1;
    }

    formData.append('hash',hash);
    formData.append('qty',qut);

    $.ajax({
        type: "POST",
        url: '/cart/update',
        headers: {
            'X-CSRF-TOKEN': token,
        },
        data: formData,
        processData: false,
        contentType: false,
        
    }).done(function(data) {
              $('.shopping-card__qty-'+id).text(qut);
    });
    
}

function remove(hash,id){
    var n = new Noty({
        theme: 'relax',
        type: 'success',
        layout: 'center',
        text: 'Do you want to remove from cart?',
        buttons: [
          Noty.button('YES', 'btn btn-success', function () {
              removeItem(hash,id);
              
              n.close();
          }, {id: 'button1', 'data-status': 'ok'}),
      
          Noty.button('NO', 'btn btn-error', function () {
              
              n.close();
          })
        ]
      });
      n.show();
}

function calc(){
    $('.shopping-card__item').each(function(){
        let price = $(this).find('.shopping-card__item-price-data').text().trim();
        let qty = $(this).find('shopping-card__qty').text().trim();
        let totalPrice = Number(price) * Number(qty);

        $(this).find('.shopping-card__item-price-total').empty().append(totalPrice);
    });
}


window.cart = {};

window.cart.add = addItem;

window.cart.update = update;

window.cart.remove = remove;

})( jQuery );

