<?php

it('returns a successful response', function () {
    $response = $this->get('http://app.localhost/');

    $response->assertStatus(200);
});
