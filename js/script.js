document.querySelectorAll('.menu li a').forEach((link)=>{
    link.onmouseover = (e) => {
      var art = link.dataset.article;
      var article = document.querySelector('section .' + art);
      var visible = document.querySelector('.visible');
      visible.classList.remove("visible")
      article.classList.add("visible")    
    }
    link.onmouseout = (e) => {
      var visible = document.querySelector('.visible');
      visible.classList.remove("visible");
      document.querySelector('.about').classList.add("visible");  
    }
  })
