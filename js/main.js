var test = 0;

$(window).scroll(function(){
    console.log($(this).scrollTop());
    if($(this).scrollTop() >= 53){
        document.querySelector('.navbar').style.position = 'fixed';
        document.querySelector('.navbar').style.top = '0';
        document.querySelector('.carousel').style.margin = '53px 0';

    }

    if($(this).scrollTop() < 53){
        document.querySelector('.navbar').style.position = 'relative';
        document.querySelector('.carousel').style.margin = '-10px 0';
    }

    if($(this).scrollTop() >= 1857 && test == 0){
        test = 1;
        animateValue(obj1, 0, nb1, 5000);
        animateValue(obj2, 0, nb2, 5000);
        animateValue(obj3, 0, nb3, 5000);
        animateValue(obj4, 0, nb4, 5000);
    }
});

/* Number Counter Animation Start*/
function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
}
  
var nb1 = Number(document.querySelector('#nb1').innerHTML);
var nb2 = Number(document.querySelector('#nb2').innerHTML);
var nb3 = Number(document.querySelector('#nb3').innerHTML);
var nb4 = Number(document.querySelector('#nb4').innerHTML);

const obj1 = document.getElementById("nb1");
const obj2 = document.getElementById("nb2");
const obj3 = document.getElementById("nb3");
const obj4 = document.getElementById("nb4");
/* Number Counter Animation End*/

/*Start loadingPage script*/
$(window).on('load', function(){
  $('body').css('overflow', 'auto');
  $('.loading-container').css('display', 'none');
});
/*End loadingPage script*/

