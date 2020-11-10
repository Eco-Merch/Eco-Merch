window.onscroll = function () { scrollFunction() };
        function scrollFunction() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                document.getElementById("container").style.padding = "0px";
                document.getElementById("logo").style.width = "100px";
            } else {
                document.getElementById("container").style.padding = "10px 10px";
                document.getElementById("logo").style.width = "120px";
            }
        }

var slideIndex = 0;
        showslides();
        function showslides() {
            var i;
            var slides = document.getElementsByClassName("myslides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showslides, 5000); // Change image every 5 seconds
        }

function overflowFunction() {
    var x = document.getElementById("body");
    x.addEventListener('click', () => body.classList.toggle('overflow'));
}

function showSmallImg1(){
    var productImg = document.getElementById("productImg");
    var smallImg = document.getElementsByClassName("small-img");
    var smallImgCol = document.getElementsByClassName("small-img-col")
    productImg.src = smallImg[0].src;
    smallImgCol[0].style.border='2px solid #64ab05';
    smallImgCol[1].style.border='none';
    smallImgCol[2].style.border='none';
    smallImgCol[3].style.border='none';
}
function showSmallImg2(){
    var productImg = document.getElementById("productImg");
    var smallImg = document.getElementsByClassName("small-img");
    var smallImgCol = document.getElementsByClassName("small-img-col")
    productImg.src = smallImg[1].src;
    smallImgCol[0].style.border='none';
    smallImgCol[1].style.border='2px solid #64ab05';
    smallImgCol[2].style.border='none';
    smallImgCol[3].style.border='none';
}
function showSmallImg3(){
    var productImg = document.getElementById("productImg");
    var smallImg = document.getElementsByClassName("small-img");
    var smallImgCol = document.getElementsByClassName("small-img-col")
    productImg.src = smallImg[2].src;
    smallImgCol[0].style.border='none';
    smallImgCol[1].style.border='none';
    smallImgCol[2].style.border='2px solid #64ab05';
    smallImgCol[3].style.border='none';
}
function showSmallImg4(){
    var productImg = document.getElementById("productImg");
    var smallImg = document.getElementsByClassName("small-img");
    var smallImgCol = document.getElementsByClassName("small-img-col")
    productImg.src = smallImg[3].src;
    smallImgCol[0].style.border='none';
    smallImgCol[1].style.border='none';
    smallImgCol[2].style.border='none';
    smallImgCol[3].style.border='2px solid #64ab05';
}

function dec(){
    var element = document.getElementById('ak');
    var dataID = element.getAttribute('data-id');
    alert("hello");
    qty = document.getElementsById('dataID').value;
    if(qty>1){
        element.getAttribe('qty').value = qty - 1;
    }
}
function inc(){
    var element = document.getElementById('ak');
    var dataID = element.getAttribute('data-id');
    qty = document.getElementsById('dataID').value;
    if(qty>1){
        element.getAttribe('qty').value = qty - 1;
    }
}

// jQuery for footer responsiveness
$(document).ready(function(){
    var viewportWidth = $(window).width();
    if($(window).width()<=800){
        $(".footer-col-1").css({"flex-basis":"100%","text-align":"center"});
        $(".footer-col-1 ul li").css({"display":"inline","padding":"7px"});
        $(".footer-col-2").css({"margin-left":"0px","align-content":"fenter","text-align":"center"});
        $(".footer-col-3").css({"margin-top":"30px","text-align":"center"});
    }
 
  });

//   window.onscroll = function () { scrollFunction() };
//   function scrollFunction() {
//       if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200) {
//           document.getElementById("container").style.padding = "0px";
//           document.getElementById("logo").style.width = "100px";
//           x = document.getElementsByClassName("price-section")[0];
//           x.style.position = "sticky";
//           x.style.top = "130px";
//           // document.getElementsByClassName("price-section")[0].style.position = "sticky";
//           // document.getElementsByClassName("price-section")[0].style.top = "200px";
//       } else {
//           document.getElementById("container").style.padding = "10px 10px";
//           document.getElementById("logo").style.width = "120px";
//           x = document.getElementsByClassName("price-section")[0];
//           x.style.position = "sticky";
//           x.style.top = "164px";
          
//       }
//   }