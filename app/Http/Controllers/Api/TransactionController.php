<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pemesanan;
use App\Models\Transaksi;

use Illuminate\Support\Facades\Auth;

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

    public function getTransaction(Request $request){
        $filter = $request->input('filter');
        $limit = $request->input('limit', false);

        $userId = Auth::id();

        $query = Transaksi::query()->where('id_user', $userId);

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
