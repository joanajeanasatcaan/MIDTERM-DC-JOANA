<?php
namespace App\Http\Controllers;
use App\Models\Bidder;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BidderController extends Controller
{
    public function index()
    {
        return Inertia::render('Bidders', [
            'bidders' => Bidder::all()
        ]);
    }
}
