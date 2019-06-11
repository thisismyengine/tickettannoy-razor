<?php include __DIR__ . '/src/include/top.php'; ?>

<article>

    <?php $referrer = $_SERVER['HTTP_REFERER']; ?>   
    <?php if(strpos($referrer, 'search'))  : ?>
        <a class="button secondary previous" href="<?php echo $referrer; ?>" data-title="Search"></a>
    <?php elseif(strpos($referrer, 'club'))  : ?>
    <a class="button secondary previous" href="<?php echo $referrer; ?>" data-title="Clubs"></a>
    <?php elseif(strpos($referrer, 'festival'))  : ?>
        <a class="button secondary previous" href="<?php echo $referrer; ?>" data-title="Festivals"></a>
    <?php elseif(strpos($referrer, 'culture'))  : ?>
        <a class="button secondary previous" href="<?php echo $referrer; ?>" data-title="Culture"></a>
    <?php else : ?>
        <a class="button secondary previous" href="<?php echo $referrer; ?>" data-title="Homepage"></a>
    <?php endif; ?>

    <a class="button secondary more" href="promoter.php?uri=promoter_uri" data-name="Fabric London"></a>

    <h1>Waff, Paul Paul Woolford and Secondcity join the Abode in the Park line-up</h1>

    <div class="detail">
        <div class="date">Sat 31 Jan - Sun 01 Feb 2018</div>
        <div class="time">22:00-06:00 (Last Entry 01:00)</div>
        <div class="location">
            <address>
                Tobacco Dock<br>
                Wapping Ln<br>
                St Katharine's & Wapping<br>
                London E1W 2SF
            </address>
            <a>View on map</a>
        </div>
        <div class="restriction">18+ only</div>
    </div>

</article>

<h2>Tickets</h2>

<section class="ticket">

    <!--
    <div class="dropdown" data-value="Saturday">
        <div class="area">
            <a class="value active">Saturday</a>
            <a class="value">Sunday</a>
        </div>
    </div>
    -->

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
                <input type="number" value="0">
                <a class="more"></a>
            </div>
        </div>
    </article>

    <article class="ticket">
        <div class="detail">
            <div class="name">Session 1 - Child (Saturday morning)</div>
            <div class="meta">
                <a class="info" data-title="Last Entry 11am // This ticket grants you access to the event on Saturday morning only.">Additional Info</a>
            </div>
        </div>
        <div class="amount">£14.00 (+ £1.75)</div>
        <div class="label">
            <span>Not Available</span>
        </div>
    </article>

    <article class="ticket">
        <div class="detail">
            <div class="name">Session 2 (Saturday afternoon) Early Bird</div>
            <div class="meta">
                <a class="info" data-title="Last Entry 5pm // This ticket grants you access to the event on Saturday afternoon only.">Additional Info</a>
                <div class="alert">Only 8 Left!</div>
            </div>
        </div>
        <div class="amount">£14.00 (+ £1.75)</div>
        <div class="quantity">
            <div>
                <a class="less disabled"></a> 
                <input type="number" value="0">
                <a class="more"></a>
            </div>
        </div>
    </article>

    <article class="ticket">
        <div class="detail">
            <div class="name">Session 2 (Saturday afternoon) Early Bird</div>
            <div class="meta">
                <a class="info" data-title="Last Entry 5pm // This ticket grants you access to the event on Saturday afternoon only.">Additional Info</a>
            </div>
        </div>
        <div class="amount">£14.00 (+ £1.75)</div>
        <div class="quantity">
            <div>
                <a class="less disabled"></a> 
                <input type="number" value="0">
                <a class="more"></a>
            </div>
        </div>
    </article>

    <article class="ticket">
        <div class="detail">
            <div class="name">Session 2 (Saturday afternoon) Early Bird</div>
            <div class="meta">
                <a class="info" data-title="Last Entry 5pm // This ticket grants you access to the event on Saturday afternoon only.">Additional Info</a>
            </div>
        </div>
        <div class="amount">£14.00 (+ £1.75)</div>
        <div class="label">
            <span>Sold Out</span>
        </div>
    </article>

    <footer>

        <div class="subtotal">£55.00</div>

        <div class="action">
            <a class="button" href="buy.php?uri=optional">Buy Tickets</a>
        </div>

    </footer>

</section>

<article>

    <div class="deck">
        <div class="card display"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="control">
            <a class="prev"></a>
            <a class="next"></a>
        </div>
        <div class="dot">
            <a class="active"></a>
            <a></a>
            <a></a>
            <a></a>
            <a></a>
        </div>
    </div>

    <div class="content">
        <h2>Unbound Events x Killekill: Explorations #005 &mdash; Killekill 10 Year Anniversary</h2>
        <p>We’re throwing the biggest celebration of brunch London has ever seen. There will be coffee, there will be booze, also workshops, talks, music and most importantly … more awesome brunch food than you can shake a sausage at.</p>
        <p><strong>What to expect<br>Brunch food</strong></p>
        <p>Say goodbye to brunch FOMO. We’ve searched high and low to bring London’s best menus to one place. Now you can brunch to your heart’s content, enjoying the widest variety of top-notch eateries a single London postcode has ever seen!</p>
        <p>Brunch Headliners include Waffle On, Cafe Miami, Urban Pantry, On Cafe, Benitos Hat, The Joint, Zoes Ghana Kitchen, Finest Fayre and Aranchini Bros! </p>
        <p><strong>Drink</strong></p>
        <p>Nothing celebrates brunch quite like the perfect cocktail. The Pickle House - AKA London’s most epic Bloody Mary brand - will be serving up BMs all weekend long. If you’re more of a Mimosa or Bellini type, don’t fret - we’ve got you covered. We even have a dedicated Kombucha Bar run by our friends at Real Kombucha.</p>
        <p>Drink vendors include Origin Coffee Roasters, The Gentleman Baristas, Good and Proper Tea, Real Kombucha, The Pickle House and We are Tea. </p>
        <p><strong>Shop</strong></p>
        <p>Have a mosey around our marketplace and explore over 50 brunch brands selling and sampling all things brunch-related, from smoothies to juices, teas from around the world, granolas, yogurts and much more.</p>
        <p><strong>Talks and workshops</strong></p>
        <p>Hit up our masterclass sessions to learn how to brew your own coffee, make your own nut mylk, and create granola from scratch.
        <p>You can also check out what the founders of your favourite brands have to say about hot brunch topics like - what the heck Kombucha is, and how a peanut butter empire is born.</p>
        <p><strong>Boogie while you munch</strong></p>
        <p>Our DJs will be playing awesome tunes for you to bop along to. DJ sets from DJ Maj-ik, Ceesix, Greg Hale and Dozzer.</p>
        <p><strong>Session Information</strong></p>
        <p><strong>Saturday 1st September</strong></p>
        <ul>
            <li>Session 1 - Saturday morning - 10am - 1.30pm</li>
            <li>Session 2 - Saturday afternoon - 2pm - 5.30pm</li>
        </ul>
        <p><strong>Sunday 2nd September</strong></p>
        <ul>
            <li>Session 3 - Sunday morning - 10am - 1.30pm</li>
            <li>Session 4 - Sunday afternoon - 2pm - 5.30pm</li>
        </ul>
        <p>For more information visit <a>londonbrunchfest.com</a></p>
        <p>Get ready to brunch like you’ve never brunched before!</p>
    </div>

</article>

<?php include __DIR__ . '/src/include/bottom.php'; ?>


