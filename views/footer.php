	<footer id="main-footer">
    <p>Hotel BT &copy; 2019, All RIghts Reserved</p>
  </footer>
	<script type="text/javascript">
    
      document.getElementById('navbar').addEventListener('click', e => {
        const item = e.target.closest('.navItem');
        if (item) {
            const items = document.getElementsByClassName('navItem');
            const arr = Array.from(items);
            arr.forEach(el => {
              el.classList.remove('current');

            }); 
            item.classList.add('current');   
        }
      });
      const controlNavBar = ()=> {
        const item = window.location.search.replace('?page=', '');
        console.log(item);
        if(item) {
          document.getElementById(`${item}`).classList.add('current');
        }
      }
      ['hashchange', 'load'].forEach(event => window.addEventListener(event, controlNavBar));
      window.onresize = ()=> {
			if(document.body.clientWidth >= 758) {
				document.querySelector("#show-menu-btn").style.display = "none";
				document.querySelector("#hide-menu-btn").style.display = "none";
				document.querySelector(".menu").style.display = "block";
			} else {
				document.querySelector("#show-menu-btn").style.display = "block";
				document.querySelector(".menu").style.display = "none";
			}
			
		}
		document.querySelector("#show-menu-btn").onclick = ()=> {
			
			document.querySelector(".menu").style.display = "block";
			
			document.querySelector("#hide-menu-btn").style.display = "block";
			document.querySelector("#show-menu-btn").style.display = "none";
				
		}
		document.querySelector("#hide-menu-btn").onclick = ()=> {
			
			document.querySelector(".menu").style.display = "none";
			
			document.querySelector("#show-menu-btn").style.display = "block";
			document.querySelector("#hide-menu-btn").style.display = "none";
				
		}
      
      
  </script>
</body>
</html>
