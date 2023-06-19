 <!-- Footer-->
 <footer class="py-5 bg-dark">
		<div class="container px-4 px-lg-8">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-8">
		
		<button style="color:white;margin-left:1100px;" class="open-button" onclick="openForm()">Live Chat</button>

            <div class="chat-popup" id="myForm">
              <form action="/action_page.php" class="form-container">
                <h1>Live Chat</h1>
                <label for="msg"><b>Contact Us</b></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
				<li class="nav-item"><a class="nav-link" href="<?php echo getBaseUrl();?>/Send/send-receive.html"><em>P2P Chat power by MetaShop&copy;</em></a></li>
              </form>
            </div>
            <script>
                function openForm() {
                  document.getElementById("myForm").style.display = "block";
                }
                
                function closeForm() {
                  document.getElementById("myForm").style.display = "none";
                }
                
                </script>
              
			<ul style="margin-left: 1200px;"><a href="#" class="top" ><i class="fa fa-angle-up" style="font-size:36px"></i></a></ul>
     
			<li class="nav-item"><a class="nav-link" href="<?php echo getBaseUrl();?>/AboutUs/AboutUs.html"><em>About Us</em></a></li> 
			<li class="nav-item"><a class="nav-link" href="<?php echo getBaseUrl();?>/Terms/terms"><em>Terms of Use / Privacy Policy</em></a></li>
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; MetaShop Website 2022</p></div>
        <ul style="margin-left: 540px;">  
            <a style="  padding: 8px;
            font-size: 18px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            background: #3B5998;
			color: white"href="https://www.facebook.com"  target="_blank" class="fa fa-facebook"></a> 
            <a style="  padding: 8px;
            font-size: 18px;
            width: 40px;
            text-align: center;
            text-decoration: none;
            background: #55ACEE;
			color: white" href="https://www.twitter.com" target="_blank" class="fa fa-twitter"></a>
           <a style="  padding: 8px;
           font-size: 18px;
           width: 40px;
           text-align: center;
           text-decoration: none;
			background: #d61fcd;
			color: white"  href="https://www.instagram.com" target="_blank" class="fa fa-instagram"></a>
        </ul>  
			<li class="nav-item"><a class="nav-link" href="<?php echo getBaseUrl();?>/Shipping/shipping.html"><em>Shipping / Transaction</em></a></li>
			<li class="nav-item"><a class="nav-link" href="<?php echo getBaseUrl();?>/Warranty/warranty.html"><em>Warranty</em></a></li>
		</div>
		</footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>