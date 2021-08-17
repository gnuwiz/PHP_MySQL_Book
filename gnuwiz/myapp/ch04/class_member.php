<?php
class Member {
    var $id = 'hong';
    public $name = '홍길동';
    protected $nickname = '쾌도 홍길동';
    private $age = 20;
}

$member = new Member();
echo $member->id; // 액세스 가능
echo $member->name; // 액세스 가능
echo $member->nickname; // 액세스 불가
echo $member->age; // 액세서 불가