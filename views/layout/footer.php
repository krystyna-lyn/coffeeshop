</div>
</div>

<div class="bg">
			<h3>Awaken Your Senses with Our Exciting</h3>
			<h1>New Coffee Creation<br></h1>
			<button class="btn">Buy Now</button>
</div>

<?php
require_once 'blog.php';
require_once 'services.php';
require_once 'contact.php';
?>

<!-- Footer Section -->
<section class="footer">


    <div class="container">
        <div class="footer-box">
            <h3>about us </h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non laborum nisi id amet sit? Cum, rem?
                Nam, in at. Officiis?</p>
            <p>Copyrights &copy; <?= date('Y') ?> All rights reserved By KrysLyn</p>

        </div>
        <div class="footer-box">
            <h3>Newsletter</h3>
            <p>Stay updaet with our latests</p>
            <form>
                <input type="email" name="email" placeholder="krys@gmail.com">
                <button type="submit"><i class="fa-solid fa-right-long"></i></button>
            </form>
        </div>
        <div class="footer-box">
            <h3>Follow Us</h3>
            <p>Connect With Us On:</p>
            <div>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </div>


        </div>
    </div>
</section>
<!-- Footer Section End -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

$(document).ready(function(){

    $(function() {

        var dropdown = $('#user #lateral')
        .on('focus', 'input', function() {

            dropdown.css('display', 'block');
        })
        .on('blur', 'input', function() {

            dropdown.removeAttr('style');
        });
    });
    
});

let menu = document.getElementById("nav");
    let open = document.getElementById("menu-btn");
    let close = document.getElementById("close");

    function openmenu() {
        menu.style.left = "0";
        open.style.display = "none";
        close.style.display = "block";
    }

    function closemenu() {
        menu.style.left = "-100%";
        open.style.display = "block";
        close.style.display = "none";
    }

</script>
</body>

</html>