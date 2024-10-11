
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }
       
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }
      
      function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
      }
      
      function closeModal() {
          var modalContent = document.getElementById('modal-content');
          modalContent.classList.add('zoom-out');
          setTimeout(function() {
            document.getElementById('id01').style.display = 'none';
            modalContent.classList.remove('zoom-out'); 
          }, 500);
        }
      