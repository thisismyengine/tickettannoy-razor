<?php include __DIR__ . '/src/include/top.php'; ?>

<?php if ($_GET['uri'] == 'club') : ?>
    <h1>Clubs</h1>
<?php elseif ($_GET['uri'] == 'festival') : ?>
    <h1>Festivals</h1>
<?php elseif ($_GET['uri'] == 'culture') : ?>
    <h1>Culture</h1>
<?php endif; ?>

<section class="gallery" data-type="Featured">
    
    <div class="card display">
        <div class="media image"></div>
        <div class="content">
            <h2>London Craft Beer Festival</h2>
            <time>20.09.18</time>
            <div class="type">Culture</div>
            <p>As the gates of elrow Town London close for 2018 and the Town residents go back to their everyday lives, we leave the confetti showers and sunshine behind for another party....we leave the confetti showers and sunshine the after party!</p>
            <a class="more">Read more</a>
            <a class="button" href="event.php?uri=event_uri">Buy</a>
        </div>
    </div>

    <div class="card">
        <div class="media image"></div>
        <div class="content">
            <h2>Max Cooper: Yearning for the Infinite</h2>
            <time>28.10.2019</time>
            <div class="type">Club</div>
            <p>Electronica and techno producer Max Cooper attempts to capture the overwhelming vastness of infinity within the space of the Barbican Hall with his new project Yearning for the Infinite.</p>
            <a class="more">Read more</a>
            <a class="button" href="event.php?uri=event_uri">Buy</a>
        </div>
    </div>

    <div class="card">
        <div class="media image"></div>
        <div class="content">
            <h2>UKG Brunch</h2>
            <time>15.06.2019</time>
            <div class="type">Club</div>
            <p>Get your gun fingers ready for the rowdiest brunch this side of the Watford Gap. The UKG Brunch will merge several of life’s finest things; UK Garage, fried chicken, rum punch and fancy dress. Is it, is it, wicked? Yeah. Pretty much.</p>
            <a class="more">Read more</a>
            <a class="button" href="event.php?uri=event_uri">Buy</a>
        </div>
    </div>

    <div class="control">
        <a class="prev"></a>
        <a class="next"></a>
    </div>

    <div class="dot">
        <a class="active"></a>
        <a></a>
        <a></a>
    </div>

</section>

<div class="option filter">

    <div class="dropdown" data-placeholder="Date">
        <div class="area date">
            <div data-datepicker></div>
        </div>
    </div>

    <div class="dropdown" data-placeholder="Location" data-value="Brighton">
        <div class="area location">
            <a class="value">Anywhere</a>
            <a class="value active">Brighton</a>
            <a class="value">Bristol</a>
            <a class="value">Cardiff</a>
            <a class="value">Glasgow</a>
            <a class="value">Leeds</a>
        </div>
    </div>

    <div class="dropdown" data-placeholder="Sort By">
        <div class="area">
            <a class="value active">A to Z</a>
            <a class="value">Soonest</a>
        </div>
    </div>

    <a class="button submit">Filter</a>
    <a class="button reset">Reset</a>

</div>

<section class="list" data-type="Results" data-value="126">

    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_4.jpg');"></div>
            </div>
            <h3>LWE presents. Arcadia London 2019</h3>
            <time datetime="2019-05-04" title="04.05.19">04.05.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_3.jpg');"></div>
            </div>
            <h3>Max Cooper: Yearning for the Infinite</h3>
            <time datetime="2019-09-18" title="28.09.19">28.09.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_2.jpg');"></div>
            </div>
            <h3>Steel Yard London - Carl Cox presents Space Ibiza 2019</h3>
            <time datetime="2019-05-26" title="26.05.19">26.05.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_1.jpg');"></div>
            </div>
            <h3>Warm Up Invites Guy J</h3>
            <time datetime="2019-02-08" title="08.02.19">08.02.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_0.jpg');"></div>
            </div>
            <h3>Unbound Events x Killekill: Explorations #005 &mdash; Killekill 10 Year Anniversary</h3>
            <time datetime="2018-09-08" title="08.09.18">08.09.18</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_4.jpg');"></div>
            </div>
            <h3>LWE presents. Arcadia London 2019</h3>
            <time datetime="2019-05-04" title="04.05.19">04.05.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_1.jpg');"></div>
            </div>
            <h3>Warm Up Invites Guy J</h3>
            <time datetime="2019-02-08" title="08.02.19">08.02.19</time>
        </a>   
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_3.jpg');"></div>
            </div>
            <h3>Max Cooper: Yearning for the Infinite</h3>
            <time datetime="2019-09-18" title="28.09.19">28.09.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_2.jpg');"></div>
            </div>
            <h3>Steel Yard London - Carl Cox presents Space Ibiza 2019</h3>
            <time datetime="2019-05-26" title="26.05.19">26.05.19</time>
        </a>    
    </article>
    <article class="event category_<?php echo $_GET['uri']; ?>">
        <a href="event.php?uri=event_uri">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_1.jpg');"></div>
            </div>
            <h3>Warm Up Invites Guy J</h3>
            <time datetime="2019-02-08" title="08.02.19">08.02.19</time>
        </a>    
    </article>

</section>

<?php include __DIR__ . '/src/include/bottom.php'; ?>


