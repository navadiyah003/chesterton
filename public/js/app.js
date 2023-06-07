// console.clear();
// ScrollTrigger.matchMedia({
//  "(min-width: 1200px)": function () {
 var sections = gsap.utils.toArray(".sections").forEach(function(elem) {
// select the relevant elements
 var round = elem.querySelectorAll(".round");
 var pinpointer = elem.querySelectorAll(".pinpointer");
 var square = elem.querySelectorAll(".square");

 var tl = gsap.timeline({
    scrollTrigger: {
       start: "top 50%",
       end: "top 5%",
       scrub:0,
      toggleActions:"restart none none none",  
             //   toggleActions:"restart pause resume complete",
                 //   play pause resume reverse restart reset complete none+
                 //steps   onEnter onLeave onEnterBack onLeaveBack    
       trigger:square,
       pin:round,
       pinSpacing: 20,   
       marker:true,        
    },
  })
  .from(round,{duration: 6, opacity: 0.2,},0)
  .to({}, {duration:1}) // a little pause at the end
  .from(square,{duration: 6, opacity: 0.2,},0)
  .to({}, {duration:1}) // a little pause at the end
  .from(pinpointer,{duration: 6, opacity: 0.2,},0)
  .to({}, {duration:1}) // a little pause at the end
 });
//  return function() {
//     animation.kill();
//     console.log('kill it max-width');
//   }
// }
// });
