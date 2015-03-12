$(document).ready(function() {
    // Slider
    $('.carousel').carousel({
		interval: 5000
    })
	var $f = jQuery.noConflict();

     // Use jQuery via $f(...)
     $f(document).ready(function(){
        $f('.btnAbrir').bind('click', function(){
            if ($f(this).parents(".full").children(".mini").attr('data-estado') == 'fechado'){
                $f(this).parents(".full").children(".mini").addClass('listaAberta');
                $f(this).parents(".full").children(".btnAbrir").addClass('btnFechar')
                $f(this).parents(".full").children(".mini").attr('data-estado','aberto');
            } else {
                $f(this).parents(".full").children(".mini").removeClass('lista listaAberta').addClass('lista mini');

                $f(this).parents(".full").children(".btnAbrir").removeClass('btnFechar');

                $f(this).parents(".full").children(".mini").attr('data-estado', 'fechado');
            }
        })
	});
});
