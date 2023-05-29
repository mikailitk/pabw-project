<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pemesanan;

class TransactionController extends Controller
{
    public function getTransaction(Request $request)
    {
        $filter = $request->input('filter');

        $query = Pemesanan::query();

        if ($filter === 'newest') {
            $query->orderByDesc('created_at');
        } elseif ($filter === 'latest') {
            $query->orderBy('created_at');
        }

        $transactions = $query->get();

        return response()->json([
            'data' => $transactions,
        ]);
    }
}
