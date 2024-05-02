<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id', $userId)->first();
        }

        if (!$userId) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $totalInvoices = Invoice::where('user_id', $user->id)->count();

        $paidInvoices = Invoice::where('user_id', $user->id)->where('status', 'paid')->count();

        $pendingInvoices = Invoice::where('user_id', $user->id)->where('status', 'pending')->count();

        $overdueInvoices = Invoice::where('user_id', $user->id)->where('status', 'pending')
            ->whereDate('due_date', '<', now())
            ->count();

        $lastFiveInvoices = Invoice::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(5)->get();

        return view('dashboard', compact('totalInvoices', 'paidInvoices', 'pendingInvoices', 'overdueInvoices', 'lastFiveInvoices'));
    }

    public function invoices(){
        if (Auth::check()) {
            $userId = Auth::id();
            $user = User::where('id', $userId)->first();
        }

        if (!$userId) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $invoices = Invoice::where('user_id', $user->id)->get();

        return view('invoices', compact('invoices'));        
    }
}
