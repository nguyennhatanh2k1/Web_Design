<?php include("res-header.php") ?>

    <!-- Order Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="./img/menu-momo.jpg" alt="China Momo" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                    <a href="#"><h4>China Momo</h4></a>                        
                        <p class="food-price">$1.5</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Nguyễn Nhật Anh" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0985xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. nguyennhatanh2k1@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Ngọc Lương, Yên Thủy, Hòa Bình. Việt Nam" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
    <!-- Order End Here -->

<?php include("res-footer.php") ?>