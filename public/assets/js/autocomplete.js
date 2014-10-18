$(function(){
    $("#local").autocomplete({
        source: "getLocal",
        delay:200,
        //minLength: 2,
        focus: function( e, ui ) {
            $( "#local" ).val( ui.item.value );
            return false;
        },
        select: function( e, ui ) {
            console.log(ui);
            $( "#Local_Id" ).val( ui.item.id );
            return false;
        }
    });

    $("#Person").autocomplete({
        source: "getPerson",
        minLength: 4,
        delay:200,
        focus: function( e, ui ) {
            $( "#Person" ).val( ui.item.value );
            return false;
        },
        select: function( e, ui ) {
            console.log(ui);
            $( "#Person_Id" ).val( ui.item.id );
            return false;
        }
    });

});