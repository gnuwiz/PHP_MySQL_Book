<?php
include "AnswerBook/user.php";
include "AnswerBook/PHP/user.php";
include "AnswerBook/PYTHON/user.php";

$user1 = new \AnswerBook\User();
echo $user1->getNamespaceName()."<br/>";

$user2 = new \AnswerBook\PHP\User();
echo $user2->getNamespaceName()."<br/>";

$user3 = new \AnswerBook\PYTHON\User();
echo $user3->getNamespaceName()."<br/>";