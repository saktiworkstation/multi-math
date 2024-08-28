<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeometriController extends Controller
{
    public function panjangGaris($x1, $y1, $x2, $y2)
    {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }

    public function jarakTitikGaris($a, $b, $c, $x1, $y1)
    {
        return abs($a * $x1 + $b * $y1 + $c) / sqrt(pow($a, 2) + pow($b, 2));
    }

    public function luasSegitiga($a, $h)
    {
        return 0.5 * $a * $h;
    }

    public function luasLingkaran($r)
    {
        return pi() * pow($r, 2);
    }

    public function kelilingLingkaran($r)
    {
        return 2 * pi() * $r;
    }
}
