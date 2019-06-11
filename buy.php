<?php include __DIR__ . '/src/include/top.php'; ?>


<?php if (isset($request_uri) && ($request_uri === 'complete')) : ?>

    <nav class="position">
        <?php
        $class = [];
        if ($request_uri == 'optional' || in_array($request_uri, ['login', 'signup'])) $class []= 'active';
        ?>
        <a class="<?php echo implode(' ' , $class); ?>">1</a>
        <?php
        $class = [];
        if (in_array($request_uri, ['login', 'signup'])) $class []= 'active';
        ?>
        <nav class="option">
            <a class="<?php echo implode(' ' , $class); ?>"></a>
            <a></a>
            <a></a>
        </nav>
        <?php
        $class = [];
        if ($request_uri == 'pay') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ' , $class); ?>">2</a>
        <?php
        $class = [];
        if ($request_uri == 'complete') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ' , $class); ?>">3</a>
    </nav>

    <h1>Thank You</h1>
    
    <nav class="share">
        <a href="" class="instagram"></a>
        <a href="" class="facebook"></a>
        <a href="" class="twitter"></a>
    </nav>


<?php else : ?>

    <h1>Checkout</h1>

    <section class="order">
        <div class="time">You have <time>05:34</time> left to checkout</div>
        <a class="button secondary" href="event.php?uri=event_uri">Cancel Order</a>
    </section>

    <nav class="position">
        <?php
        $class = [];
        if ($request_uri == 'optional' || in_array($request_uri, ['login', 'signup'])) $class []= 'active';
        ?>
        <a class="<?php echo implode(' ' , $class); ?>">1</a>
        <?php
        $class = [];
        if (in_array($request_uri, ['login', 'signup'])) $class []= 'active';
        ?>
        <nav class="option">
            <a class="<?php echo implode(' ' , $class); ?>"></a>
            <a></a>
            <a></a>
        </nav>
        <?php
        $class = [];
        if ($request_uri == 'pay') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ' , $class); ?>">2</a>
        <a>3</a>
    </nav>
    
    <form>

        <section class="overview">
            <article class="event category_festival">
                <a href="event.php?uri=event_uri">
                    <div class="media">
                        <div class="image" style="background-image: url('lib/event_4.jpg');"></div>
                    </div>
                    <h3>LWE presents. Arcadia London 2019</h3>
                    <div class="date">Sat 31 Jan - Sun 01 Feb 2018</div>
                    <div class="time">22:00-06:00 (Last Entry 01:00)</div>
                    <div class="address">Tobacco Dock, Wapping Ln, St Katharine's & Wapping, London E1W 2SF</div>
                    <div class="restriction">18+ only</div>
                </a>    
            </article>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td width="30%">Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Session 1 (Saturday morning) Early Bird</td>
                            <td>£14.00 (+ £1.75)</td>
                        </tr>
                        <tr>
                            <td>Session 1 - Child (Saturday morning)</td>
                            <td>£14.00 (+ £1.75)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- <section class="ticket">

            <article class="ticket">
                <div class="detail">
                    <div class="name">Session 1 (Saturday morning) Early Bird</div>
                    <div class="meta">
                        <a class="info" data-title="Last Entry 11am // This ticket grants you access to the event on Saturday morning only.">Additional Info</a>
                        <div class="alert">Only 11 Left!</div>
                    </div>
                </div>
                <div class="amount">£14.00 (+ £1.75)</div>
                <div class="quantity">
                    <div>
                        <a class="less disabled"></a> 
                        <input type="number" value="1">
                        <a class="more"></a>
                    </div>
                </div>
            </article>

            <article class="ticket">
                <div class="detail">
                    <div class="name">Session 1 - Child (Saturday morning)</div>
                    <div class="meta">
                        <a class="info" data-title="Last Entry 5pm // This ticket grants you access to the event on Saturday morning only.">Additional Info</a>
                    </div>
                </div>
                <div class="amount">£14.00 (+ £1.75)</div>
                <div class="quantity">
                    <div>
                        <a class="less disabled"></a> 
                        <input type="number" value="1">
                        <a class="more"></a>
                    </div>
                </div>
            </article>

            <footer>

                <div class="subtotal">£55.00</div>

                <div class="action"></div>

            </footer>

        </section> -->

       
        
        <?php if (in_array($request_uri, ['login', 'signup'])) : ?>

            <fieldset class="extra">
                <input name="option_diet" required placeholder="Dietary Requirements">
                <input name="option_diet" required placeholder="or any other">
                <input name="option_diet" required placeholder="optional event field">
            </fieldset>
        
            <a href="buy.php?uri=pay" class="button primary">Next</a>

        <?php elseif ($request_uri == 'optional') : ?>

            <section class="user">
                <a href="buy.php?uri=login" class="button primary">Login to Buy</a>
                <a href="buy.php?uri=signup" class="button secondary">Sign Up to Buy</a>
            </section>
    
        <?php elseif ($request_uri === 'pay') : ?>

        <section class="optional">
            <div class="promo">
                <input name="promo" id="promo" placeholder="Promo Code" autocomplete="none">
                <a class="button primary">Add Code</a>
            </div>
            <div class="donate" data-name="Wildlife Works">
                <div class="currency"></div>
                <input name="donate" id="donate" placeholder="Donation amount" value="5">
                <a class="button primary">Donate</a>
            </div>
        </section>

            <div class="area">
                <a class="button cc"></a>
                <a class="button apple"></a>
                <a class="button google"></a>
            </div>

            <fieldset class="card">
                <input name="ccname" id="buy_ccname" required placeholder="Cardholder Name *" autocomplete="cc-name">
                <input name="ccnumber" id="buy_ccnumber" required placeholder="Card Number *" autocomplete="cc-number">
                <select name="cctype" id="buy_cctype" autocomplete="cc-type" required>
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="amex">American Express</option>
                    <option value="diners">Diners Club</option>
                    <option value="discover">Discover</option>
                    <option value="jcb">JCB</option>
                    <option value="maestro">Maestro</option>
                    <option value="uatp">UATP</option>
                </select>
                <div class="group">
                    <label for="buy_ccmonth">Expiry Date:</label>
                    <select name="ccmonth" id="buy_ccmonth" autocomplete="cc-exp-month" required>
                        <option value="1">Janaury</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="ccyear" id="buy_ccyear" autocomplete="cc-exp-year" required>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
                <div class="group">
                    <label for="buy_cccsc">Three digit security code:</label>
                    <input name="cccsc" id="buy_cccsc" required placeholder="CVV *" autocomplete="cc-csc">
                </div>

            </fieldset>

            <a href="buy.php?uri=complete" class="button primary">Pay now</a>
        <?php endif; ?>

    </form>

<?php endif; ?>

<?php include __DIR__ . '/src/include/bottom.php'; ?>


