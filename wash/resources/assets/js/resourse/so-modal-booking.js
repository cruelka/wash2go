(function( $ ){

    function openBookingForm(){
        soModal.open('.so-modal__booking-form');
    };

    window.soBooking = {};
    window.soBooking.open = openBookingForm;

    function createDatePicker(){
        
    let dayinner = $('#booking-form__day');

    let date = new Date();

    let day = date.getDate();

    let month = date.getMonth();

    var array = [];

    for(i=0;i<7;i++){

        let dayS = day,
            monthS = month;
        

        if(String(day).length==1){
            dayS = '0'+ day;
        }

        if(String(month).length==1){
            monthS = '0'+ month;
        }

        
        let s = dayS+'/'+monthS;

        if(Number(day)>29){
            day = 1;
            

            if(Number(month)==12){
                month = 1;
            } else {
                month = month + 1;
            }
            
        } else {
            day = day +1;
        }

        
        
        
        array.push(s);
    }

    array.map(item => {
        dayinner.append(`<option>${item}</option>`)
    });

    };

    function createTimePicker(){
        let array = [10,11,12,13,14,15,16,17,18,19,20,21,22];

        let timeInner = $('#booking-form__time');

        array.map(item => {
            let timeS = item;
            if(String(timeS).length==1){
                timeS = '0'+ timeS;
            }
            let itemTime = timeS + ':00';
            timeInner.append(`<option>${itemTime}</option>`);
        });
    }

    function priceChange(item){
        let washingtype = $('#booking-form__washing-type');
        let inner = $('#booking-form__item-total');

        let thisvalue = Number($('#booking-form__washing-type').val());

        inner.empty().append(thisvalue);


        $(inner).each(function () {
            var $this = $(this);
            $({ Counter: 0 }).animate({ Counter: $this.text() }, {
              duration: 1000,
              easing: 'swing',
              step: function () {
                $this.text(Math.ceil(this.Counter));
              }
            });
          });
        

        

        


    }
    

    $(document).ready(function(){
        createDatePicker();
        createTimePicker();
    });

    window.soBookingForm = {};
    window.soBookingForm.priceChange = priceChange;


})( jQuery );

