<?php
/**passenger*/

echo '<h3>Passengers</h3>';
echo '<hr>';
echo '<a href="?controller=passengers&action=toCreate" class="btn btn-success">Create</a>';
echo '<table class="table">';
echo '<tr><th>Id</th><th>Name</th><th>Email</th><th>Mobile</th><th>Username</th><th>Password</th><th>Actions</th></tr>';
foreach ($passengers as $passenger){
    echo '<tr>';
    echo '<td>' .$passenger->getPid() . '</td>';
    echo '<td>' .$passenger->getName() . '</td>';
    echo '<td>' .$passenger->getEmail() . '</td>';
    echo '<td>' .$passenger->getMob() . '</td>';
    echo '<td>' .$passenger->getUname() . '</td>';
    echo '<td>' .$passenger->getPassword() . '</td>';
    echo '<td><a href="?controller=passengers&action=toUpdate&id='. $passenger->getPid() .'" class="btn btn-primary">Modify</a> <a href="?controller=passengers&action=delete&id='. $passenger->getPid() .'"class="btn btn-danger">Delete</a></td>';
    echo '</tr>';
}
echo '</table>';
