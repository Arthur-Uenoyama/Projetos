// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").addEventListener("click", function() {
    var x = document.getElementById("demo1");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  });
  
  function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "<i class='fa fa-thumbs-up'></i> Liked";
  }


  function playEngineSound() {
    var audio = document.getElementById('engineSound');
    audio.play();
  }