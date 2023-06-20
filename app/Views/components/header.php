    <header>
    <p id="EzChineseP">
        <a href="<?= base_url('/') ?>" style="display: flex; align-items: center;">
            <?php echo img(['src' => 'assets/images/billyInBook.png', 'width' => '140px', 'height' => '110px', 'style' => 'float: left;']); ?>
            <span style="margin-left: 10px; text-decoration: none; color: white;">Chilingua</span>
        </a>
    </p>
        <p id="navBar">
            <a class="navbarPaddingLeft" href="<?= base_url('/') ?>">Home       </a>
            <a class="navbarPaddingLeft" href="<?= base_url('/courses//') ?>">Courses       </a>
            <a class="navbarPaddingLeft" href="<?= base_url('/superQuiz//') ?>">Super Quiz       </a>
            <a class="navbarPaddingLeft" href="<?= base_url('/about//') ?>">About         </a>
            <a class="navbarPaddingRightLeft" href="<?= base_url('/login//') ?>">Login</a>
        </p>
    </header>