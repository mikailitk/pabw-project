<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pemesanan;

class TransactionController extends Controller
{
    public function getPesanan(Request $request)
    {
        $filter = $request->input('filter');
        $limit = $request->input('limit', false);

        $query = Pemesanan::query();

        if ($filter === 'newest') {
            $query->orderByDesc('created_at');
        } elseif ($filter === 'latest') {
            $query->orderBy('created_at');
        }

        if ($limit === 'true') {
            $query->limit(4);
        }

        $transactions = $query->get();

        return response()->json([
            'data' => $transactions,
        ]);
    }
}
