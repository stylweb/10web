/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
    
    $('#single-item-home').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-profile').position().top}, 'slow');
    });
    
    $('#single-item-news').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-news-content').position().top - 100}, 'slow');
    });

     $('#single-item-about').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-about-content').position().top - 100}, 'slow');
    });
    
    $('#single-item-contact').click(function ()
    {
        $("body, html").animate({scrollTop: $('#single-contact-content').position().top - 100}, 'slow');
    });
    
    $(window).scroll(function()
    {
        if ($(window).scrollTop() >= 5) 
        {
            $('#single-header').addClass("hidden");
        }
        if ($(window).scrollTop() < 5) 
        {
            $('#single-header').removeClass("hidden");
        }
    });

   
});