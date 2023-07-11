<?php

test('controllers')
    ->expect('App\Http\Controllers')
    ->not->toUse('Illuminate\Http\Request');

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();
