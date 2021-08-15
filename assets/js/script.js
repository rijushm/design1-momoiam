var toggle = document.querySelector(".nav_toggle_box");
		var menu = document.querySelector(".nav_link_box");
		toggle.onclick = () =>{
			menu.classList.toggle("toggle");
			toggle.classList.toggle("toggle");
		};

		$(".menuBox").removeAttr("data-scroll-speed");

		(function () {
	        var scroll = new LocomotiveScroll({
	        	el: document.querySelector('[data-scroll-container]'),
			    smooth: true,
			    smartphone: {
			    	smooth: true
			    }
	        });
	    })();

	    Splitting();

	    function scrollSmoothTo(elementId) {
		  window.scrollTo(300, 500);
		}

		
		loader();
		function loader(_success) {
		    var obj = document.querySelector('.screen_loader'),
		    inner = document.querySelector('.preloader_inner'),
		    page = document.querySelector('body');
		    obj.classList.add('show');
		    page.classList.remove('show');
		    var w = 0,
		        t = setInterval(function() {
		            w = w + 1;
		            inner.textContent = w+'%';
		            inner.style.left = w+"%";
		            if (w === 100){
		                obj.classList.remove('show');
		                page.classList.add('show');
		                clearInterval(t);
		                w = 0;
		                if (_success){
		                    return _success();
		                }
		            }
		        }, 10);
		}