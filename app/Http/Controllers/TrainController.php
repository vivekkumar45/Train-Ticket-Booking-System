<?php
// app/Http/Controllers/TrainController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function search(Request $request)
    {
        // Fetch train data based on user input
        $trains = Train::where('departure', $request->departure)
            ->where('destination', $request->destination)
            ->where('date', $request->date)
            ->where('class', $request->class)
            ->get();

        return view('trains', ['trains' => $trains]);
    }
}
