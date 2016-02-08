
$(function (){

//wzor $.ajax({ enter })

    $.ajax({
        url: 'api/books.php',
        type: 'POST',
        dataType: 'json',
        success: function(result){
            $('#name').html(result[0].name);
            $('#autor').html(result[0].autor);
            $('#opis').html(result[0].opis);

        },
        error: function(){
            console.log('Wystapil blad');
        },
        complete: function(){
        console.log('Zakonczono request');
        }

    });

});