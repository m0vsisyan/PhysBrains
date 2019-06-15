function signin() {
    window.open('SignIn.html')
}

function Tasks() {
    window.open('Tasks.html', '_blank')
}

function ToDoList() {
    window.open('ToDoList.html', '_blank')
}

function Calendar() {
    window.open('Calendar.html', '_blank')
}

function Contact() {
    window.open('Contact.html', '_blank')
}

function GreatPhysicists() {
    window.open('GreatePhysicists.html', '_blank')
}

function openNav() {
    document.getElementById("settings").style.right = "-70px";
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("settings").style.right = "0px";
    document.getElementById("mySidenav").style.width = "0";
}
// When the user scrolls down 20px from the top of the document, show the butto

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function myFunc() {
    document.getElementsById('it').style.border = "solid grey";
}

function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function () {
        x.className = x.className.replace("show", "");
    }, 6000);
}

        function startDictation() {

            if (window.hasOwnProperty('webkitSpeechRecognition')) {

                var recognition = new webkitSpeechRecognition();

                recognition.continuous = false;
                recognition.interimResults = false;

                recognition.lang = "en-US";
                recognition.start();

                recognition.onresult = function(e) {
                    document.getElementById('transcript').value = e.results[0][0].transcript;
                    recognition.stop();
                    document.getElementById('labnol').submit();
                };

                recognition.onerror = function(e) {
                    recognition.stop();
                }

            }
        }

            function myFunction() {
                var input, filter, ul, li, a, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUL");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";

                    }
                }
            }
/* --- On and Off --- */
            function on1() {
                document.getElementById("overlay").style.display = "block"
            }

            function off1() {
                document.getElementById("overlay").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on2() {
                document.getElementById("overlay2").style.display = "block"
            }

            function off2() {
                document.getElementById("overlay2").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on3() {
                document.getElementById("overlay3").style.display = "block";
            }

            function off3() {
                document.getElementById("overlay3").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on4() {
                document.getElementById("overlay4").style.display = "block";
            }

            function off4() {
                document.getElementById("overlay4").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on5() {
                document.getElementById("overlay5").style.display = "block";
            }

            function off5() {
                document.getElementById("overlay5").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on6() {
                document.getElementById("overlay6").style.display = "block";
            }

            function off6() {
                document.getElementById("overlay6").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on7() {
                document.getElementById("overlay7").style.display = "block";
            }

            function off7() {
                document.getElementById("overlay7").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on8() {
                document.getElementById("overlay8").style.display = "block";
            }

            function off8() {
                document.getElementById("overlay8").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on9() {
                document.getElementById("overlay9").style.display = "block";
            }

            function off9() {
                document.getElementById("overlay9").style.display = "none";
            }
// --------------------------------------------------------------------------- \\
            function on10() {
                document.getElementById("overlay10").style.display = "block";
            }

            function off10() {
                document.getElementById("overlay10").style.display = "none";
            }
            function valid (form) {
                var fail = false;
                var fname = form.name.value;
                if (fname == "" || fname == " ")
                    fail = "You didn't insert your name";
        
                if (fail) {
                    alert(fail);
                    return false;
                } else {
                    return true;
                }
            }
//////////////////////////
$(document).ready(function(){
    $(".f1").click(function(){
       $(".atomLoader").delay("fast").fadeIn();
       $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
     });
    });

         $(document).ready(function(){
            $(".nav-link").click(function(){
               $(".atomLoader").delay("fast").fadeIn();
               $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
             });
            });

function load() {
            $(document).ready(function () {
                setTimeout(function () {
                  window.location.href = "Lessons.html"
                }, /*Math.floor((Math.random() * 6000) + 1000)*/3000);
              });
            }
//////////////////////////
         $(document).ready(function(){
            $(".f3").click(function(){
               $(".atomLoader").delay("fast").fadeIn();
               $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
             });
            });

            $(document).ready(function(){
                $(".f4").click(function(){
                   $(".atomLoader").delay("fast").fadeIn();
                   $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
                 });
                });

function load2() {
            $(document).ready(function () {
                setTimeout(function () {
                  window.location.href = "search.html"
                }, /*Math.floor((Math.random() * 6000) + 1000)*/3000);
              });
            }
/////////////////////////
$(document).ready(function(){
    $(".navbar-brand").click(function(){
       $(".atomLoader").delay("fast").fadeIn();
       $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
     });
    });

    $(document).ready(function(){
        $(".navbar-brand2").click(function(){
           $(".atomLoader").delay("fast").fadeIn();
           $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
         });
        });

        $(document).ready(function(){
            $(".f1").click(function(){
               $(".atomLoader").delay("fast").fadeIn();
               $(".atomLoader").delay(/*Math.floor((Math.random() * 6000) + 1000)*/3000).fadeOut();
             });
            });
function load3() {
    $(document).ready(function () {
        setTimeout(function () {
          window.location.href = "index.html"
        }, /*Math.floor((Math.random() * 6000) + 1000)*/3000);
      });
    }
///////////////////////////////









