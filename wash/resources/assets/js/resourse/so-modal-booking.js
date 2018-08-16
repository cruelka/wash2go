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

    let month = Number(date.getMonth())+1;

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
    
    /*
    $(document).ready(function(){
        createDatePicker();
        createTimePicker();
    });
    */

    $('.booking-steps__card-item_body-type').click(function(){
        if($(this).hasClass('booking-steps__card-item_selected')){
            soBookingForm.changePage(5,'bodytype');
        } else {
            $('.booking-steps__card-item_body-type').removeClass('booking-steps__card-item_selected');
            $(this).addClass('booking-steps__card-item_selected');
        }

        

    });

    function changePage(page,required){
        
        if(required && required=='bodytype'){
            let checkSelection = 0;

            $('.booking-steps__card-item_body-type').each(function(){
                if($(this).hasClass('booking-steps__card-item_selected')){
                    checkSelection += 1;
                }
            });

            console.log(checkSelection);

            if(checkSelection==0){
             return false;
            }
    
        }

        

        $('.booking-steps__item').hide();
        $('#booking-steps__item-'+page).show();
    };

    $('.booking-steps__list-item').click(function(){
        let priceInner = $('.booking-steps__list-lable-total-data');

        

        if($(this).attr('oneandonly')){

            let status = 0;

         
            if($(this).hasClass('booking-steps__list-item_selected')){
                status = 1;
                
            }

            let attr = $(this).attr('oneandonly');
            $('.'+attr).removeClass('booking-steps__list-item_selected');
            $('.'+attr).find('.booking-steps__list-item-checkbox').removeClass('booking-steps__list-item-checkbox_selected');
            
            console.log(status);
            if(status==0){
                $(this).addClass('booking-steps__list-item_selected');
                $(this).find('.booking-steps__list-item-checkbox').addClass('booking-steps__list-item-checkbox_selected');
            } else {
                $(this).removeClass('booking-steps__list-item_selected');
                $(this).find('.booking-steps__list-item-checkbox').removeClass('booking-steps__list-item-checkbox_selected');
            }
            
        } else {
            //$(this).addClass('booking-steps__list-item_selected');
            //$(this).find('.booking-steps__list-item-checkbox').addClass('booking-steps__list-item-checkbox_selected');
        }

        let steamcount = 0;
        let price = 0;
        let nosteamcount = 0;

        $('.booking-steps__list-item_steam').each(function(){
            if($(this).hasClass('booking-steps__list-item_selected')){
                steamcount += 1;
            }
            
        });

        $('.booking-steps__list-item_no-steam').each(function(){
            if($(this).hasClass('booking-steps__list-item_selected')){
                nosteamcount += 1;
            }
            
        });

        console.log(steamcount);

        if(nosteamcount==2){
            priceInner.empty().append('40 AED - Discount 10');
        } else if(steamcount==2){
            priceInner.empty().append('70 AED - Discount 15');
        } else  {
            $('.booking-steps__list-item_selected').each(function(){
                price += Number($(this).attr('value'));
            });

            priceInner.empty().append(price);
        }

        

        

        
    });






    window.soBookingForm = {};
    window.soBookingForm.changePage = changePage;
    window.soBookingForm.priceChange = priceChange;

    $(document).ready(function(){
        $(function () {
                    $('#datetimepicker2').datetimepicker({ 
                        format: 'DD.MM.YYYY',
                        startDate: new Date('2018-1-5'),
                        endDate: new Date('2018-1-12')
                    });
                });

                $(function () {
                    $('#datetimepicker3').datetimepicker({
                        format: 'LT',
                        stepping: 30,
                        enabledHours: [8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18]
                    });
                });
      });

      


})( jQuery );

