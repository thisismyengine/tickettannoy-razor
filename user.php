<?php include __DIR__ . '/src/include/top.php'; ?>

<?php if (!in_array($request_uri, ['login', 'register', 'forgot'])) : ?>

    <h1>Hello: Ellie Polston</h1>

    <div class="option account">
        <?php
        $class = ['button'];
        if ($request_uri == 'profile') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ', $class); ?>" href="user.php?uri=profile">My Profile</a>
        <?php
        $class = ['button'];
        if ($request_uri == 'ticket') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ', $class); ?>" href="user.php?uri=ticket">My Tickets</a>
        <?php
        $class = ['button'];
        if ($request_uri == 'manage') $class []= 'active';
        ?>
        <a class="<?php echo implode(' ', $class); ?>" href="user.php?uri=manage">Manage Login &amp; Passwords</a>
    </div>

<?php endif; ?>

<?php if ($request_uri == 'login') : ?>

    <h1>Login</h1>
    <form>
        <fieldset>
            <input type="text" placeholder="Email">
            <a class="register" href="user.php?uri=register"></a>
            <input type="text" placeholder="Password">
            <a class="forgot" href="user.php?uri=forgot"></a>
            <button class="button primary">Login</button>
        </fieldset>
    </form>

<?php elseif ($request_uri == 'register') : ?>

    <h1>Sign Up</h1>
    <form>
        <div>
            <fieldset>
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Confirm Email">
                <input type="text" placeholder="Password">
                <input type="text" placeholder="Confirm Password">
            </fieldset>
        </div>
        <div>
            <fieldset>
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <button class="button primary">Sign Up</button>
            </fieldset>
        </div>
    </form>

<?php elseif (isset($request_uri) && ($request_uri === 'profile')) : ?>

<section class="profile">
    <form>
        <div>
            <h2>Profile:</h2>
            <fieldset>
                <input type="email" id="email" value="ellie@studio.build">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
                <input type="text" placeholder="Phone">
                <select>
                    <option selected>Time Zone GMT</option>
                </select>
            </fieldset>
            <fieldset>
                <input type="text" placeholder="Address Line One *">
                <input type="text" placeholder="Address Line Two *">
                <input type="text" placeholder="Address Line Three">
                <input type="text" placeholder="Town/City *">
                <input type="text" placeholder="Postcode *">
                <select>
                    <option selected>United Kingdom</option>
                </select>
            </fieldset>
        </div>
        <div>
            <h2>Preferences:</h2>
            <p>From time to time, we like to send our customers news, offers, promo codes, exclusive presales and more. Would you like to receive these?</p>
            <input type="radio" id="yes" name="contact" checked>
            <label for="yes">Yes please!<span>Opt-in to receive communications from Ticket Tannoy and the promoter you’re buying tickets from.<br>You can opt-out at any time.</span></label>
            <input type="radio" id="no" name="contact">
            <label for="no">No thanks!<span>Opt-out of all communications.</span></label>
            <button class="button primary">Save Changes</button>
        </div>
    </form>
</section>

<?php elseif (isset($request_uri) && ($request_uri === 'ticket')) : ?>

<section class="purchase empty">
    <p>You don't currently have any purchased tickets.<br>Once you've purchased your tickets they'll appear here.</p>
</section>

<section class="purchase">
    <?php for ($i = 0; $i < 4; $i++) : ?>
    <article>
        <div class="event">
            <div class="media">
                <div class="image" style="background-image: url('lib/event_4.jpg');"></div>
            </div>
            <h3>LWE presents. Arcadia London 2019</h3>
            <time datetime="2019-05-04" title="04.05.19">04.05.19</time>
        </div>
        <div class="overview">
            <div class="price">£28.00</div>
            <div class="fee">£3.50</div>
            <div class="number">G969RTP1AT</div>
            <div class="date"><?php echo date('d/m/Y'); ?></div>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>&nbsp;</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Session 1 (Saturday morning) Early Bird</td>
                    <td>£14.00 (+ £1.75)</td>
                    <td>
                        <div class="action">
                            <a class="button primary">Print</a>
                            <a class="button secondary">Resale</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Session 1 - Child (Saturday morning)</td>
                    <td>£14.00 (+ £1.75)</td>
                    <td>
                        <div class="action">
                            <a class="button primary">Print</a>
                            <a class="button secondary">Resale</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </article>
    <?php endfor; ?>
</section>

<?php elseif (isset($request_uri) && ($request_uri === 'forgot')) : ?>

    <h1>Set New Password</h1>
    <form>
        <fieldset>
            <input type="text" placeholder="Password">
            <input type="text" placeholder="Confirm Password">
            <button class="button primary">Reset Password</button>
        </fieldset>
    </form>

<?php elseif (isset($request_uri) && ($request_uri === 'manage')) : ?>

    <form>
        <fieldset>
            <input type="text" placeholder="Email">
            <button class="button primary">Send Reset Email</button>
        </fieldset>
    </form>

<?php endif; ?>

<?php include __DIR__ . '/src/include/bottom.php'; ?>


