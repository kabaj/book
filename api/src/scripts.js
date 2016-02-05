/**
 * Created by paulina on 05.02.2016.
 */
$(function (){

//wzor $.ajax({ enter })

    $.ajax({
        url: 'book.php',
        type: 'GET', //pobierz metoda GET
        dataType: 'json',
        success: function(result){
            console.log(result);
            console.log(result.date);

            $('#aktualnyczas').html(result.time);
            $('#timestamp').html(result.milliseconds_since_epoch);
            $('#data').html(result.date);


        },
        error: function(){
            console.log('Wystapil blad');
        },
        complete: function(){
        console.log('Zakonczono request');
        }

    });

});