<?php

test('wrong', function (string $email) {
    $this->assertEquals($email, $email);
})->with('emails one');

test('correct', function (string $email) {
    $this->assertEquals($email, $email);
})->with('emails');
