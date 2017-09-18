<?php
if(!$_SESSION['admin_in']){
    echo
    ('
    <section id="admin_login_section" class="main_section_login">
    <div id="admin_login_form"></div>
    <form id="admin_form" action="stuff/admin_login.php" method="POST">
        <ul>
            <li><input id="name" type="text" placeholder="User Name" name="admin_name"></li>
            <li><input type="password" name="pass" placeholder="Enter Your Password" id="admin_pass"></li>
            <li><input id="admin_submit_btn" type="submit" name="submit"></li>
        </ul>
    </form>
    </section>
    ');
}

