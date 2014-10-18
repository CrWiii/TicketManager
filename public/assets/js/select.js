$(document).ready(function() {
    $('#Class').change(function(event) {
        var $term=$("select#Class").val();
        $.get('getCategory',{term:$term},function(responseJson) {
            var $select = $('#Category');
            $select.find('option').remove();
            $.each(responseJson, function(key, value) {
                $('<option>').val(key).text(value).appendTo($select);
            });
            $('<option value="" selected="selected">Seleccione Categoria</option>').appendTo($select);
        });
    });
    $('#Category').change(function(event) {
        var $term=$("select#Category").val();
        $.get('getSubCategory',{term:$term},function(responseJson) {
            var $select = $('#SubCategory');
            $select.find('option').remove();
            $.each(responseJson, function(key, value) {
                $('<option>').val(key).text(value).appendTo($select);
            });
            $('<option value="" selected="selected">Seleccione SubCategoria</option>').appendTo($select);
        });
    });
    $('#SubCategory').change(function(event) {
        var $term=$("select#SubCategory").val();
        $.get('getSpecify',{term:$term},function(responseJson) {
            var $select = $('#Specify');
            $select.find('option').remove();
            $.each(responseJson, function(key, value) {
                $('<option>').val(key).text(value).appendTo($select);
            });
            $('<option value="" selected="selected">Seleccione Especifico</option>').appendTo($select);
        });
    });
});















/*
$("#Class").change(function() {
    $("#Category").load("getCategory?term=" + $("#Class").val());
});*/