
// $(function(){
//         $('#form').printPage();

// });
// $("#print").each(function() {
//     $('#form').printPage();
// });

$(document).ready(function(){
        $("#print").printPage();
        printJS('#print', 'html')


});

$("#btnprn").printPreview({

      obj2print:'#main'

    });



