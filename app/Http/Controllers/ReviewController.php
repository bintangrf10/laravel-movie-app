<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\controllers;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = review::all();
        return view('reviews.index', compact('reviews'));
    }
}
