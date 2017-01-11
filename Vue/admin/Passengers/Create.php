<?php
/**
 * Created by PhpStorm.
 * User: megapc
 * Date: 1/10/2017
 * Time: 4:53 PM
 */
if(isset($passenger)){
    echo '<form method="post" action="?controller=passengers&action=update">';
    echo '<input type="text" required placeholder="Id" disabled value="'.$passenger->getPid().'" name="id" />';
    echo '<input type="text" required placeholder="Name" value="'.$passenger->getName().'" name="name" />';
    echo '<input type="email" required placeholder="Email" value="'.$passenger->getEmail().'" name="email" />';
    echo '<input type="tel" required placeholder="Mobile" value="'.$passenger->getMob().'" name="mob" />';
    echo '<input type="text" required placeholder="Username" value="'.$passenger->getUname().'" name="uname" />';
    echo '<input type="password" required placeholder="PASSWORD" value="'.$passenger->getPassword().'" name="password" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';

} else {

    echo '<form method="post" action="?controller=passengers&action=create">';
    echo '<input type="text" required placeholder="Id" name="id" />';
    echo '<input type="text" required placeholder="Name" name="name" />';
    echo '<input type="email" required placeholder="Email" name="email" />';
    echo '<input type="tel" required placeholder="Mobile" name="mob" />';
    echo '<input type="text" required placeholder="Username" name="uname" />';
    echo '<input type="password" required placeholder="PASSWORD" name="password" />';
    echo '<input type="submit"  Value="OK" />';
    echo '</form>';
}