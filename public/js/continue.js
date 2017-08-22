console.log('Hello');

function marquee(idWrapper,idMarquee,vitesse)
 
{
    var oIdWrapper=$('#'+idWrapper);
    var oIdMarquee=$('#'+idMarquee);
 
    var width=oIdMarquee.width()/2;
    var width2=oIdWrapper.width()/2;
 
    id_inst=setTimeout(function() {marquee(idWrapper,idMarquee,vitesse)},vitesse);
  
    var l=parseInt(oIdMarquee.css('left'));
    oIdMarquee.css({left:(l-1)+'px'});
 
    if((-parseInt(oIdMarquee.css('left')))>=(width))
    {
        oIdMarquee.css({left:(width2)+'px'});
    }
}
 
// $(document).ready(
// function(){
//     marquee('marquee-wrapper','marquee',2);
// }
// );

// $(document).ready(function(){
//      $("#marquee-wrapper").hover(function(){
//         clearTimeout(id_inst);
//     }, function(){
//         marquee("marquee-wrapper","marquee",2);
//     });
// });