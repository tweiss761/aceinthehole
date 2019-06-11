/*the lines below are to prevent false errors from jslint or eslint in Brackets*/

/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

/*
File Name: menu.js
Date: 4/30/18
Programmer: Tammy Weiss
*/

$(document).ready(function() {

    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").show();

    $(".hamburger").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".hamburger").hide();
        $(".cross").show();
    });

    $(".cross").on("click", function () {
        $(".menu").slideToggle("slow");
        $(".cross").hide();
        $(".hamburger").show();
    });

});

$("#slideshow > div").hide();

setInterval(function() {
    $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
},  5000);

    
