<?php include_layout_template('layouts/header.php'); ?>
    <div class="menu">
        <a href="http://www.w3schools.com" target="content">
            <div class="menu_block">Game</div> 
        </a>
        <a href="http://www.gatech.edu" target="content">
            <div class="menu_block">Question</div>
        </a>
        <a href="http://www.intel.com" target="content">
            <div class="menu_block">Scavanger Hunt</div>
        </a>
    </div>
    <div class="frame">
        <iframe id="content" src="main_frame.html" width="800" height="480" scrolling="no" frameborder="1">
        </iframe>
    </div>

<?php include_layout_template('layouts/footer.php'); ?>  