<?php
include "AnswerBook/user.php";
include "AnswerBook/PHP/user.php";
include "AnswerBook/PYTHON/user.php";

use AnswerBook\User as User;
use AnswerBook\PHP\User as PhpUser;
use AnswerBook\PYTHON\User as PythonUser;

$user1 = new User();
echo $user1->getNamespaceName()."<br/>";

$user2 = new PhpUser();
echo $user2->getNamespaceName()."<br/>";

$user3 = new PythonUser();
echo $user3->getNamespaceName()."<br/>";