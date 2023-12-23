<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function new_message(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'message' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
           $message = Message::create([
               'name' => $request->name,
               'message' => $request->message,
               'key' => $this->generateAndCheckUniqueKey(),
            ]);
           return redirect()->route('link', ['key' => $message->key]);
        }catch (\Exception $exception){
            return back()->withErrors(['error' => $exception->getMessage()]);
        }
    }

    public function generateAndCheckUniqueKey() {
        do {
            // Generate a random key
            $key = $this->generateKey(10);
            // Check if the key already exists in the 'messages' table
            $alreadyExists = Message::where('key', $key)->exists();
        } while ($alreadyExists);
        return $key;
    }

    public function message($key)
    {
        $message = Message::where('key', $key)->first();
        if ($message){
            return view('layouts.after_message', [
                'message' => $message
            ]);
        }else{
            return redirect()->route('not_found');
        }
    }

    public function wishes($key)
    {
        $message = Message::where('key', $key)->first();
        $scenesWithLineBreaks = [];

        if ($message) {
            $scenes = explode(".", $message->message);
            $scenes = array_filter(array_map('trim', $scenes)); // Supprime les éléments vides et les espaces supplémentaires

            // Ajoutez <br> après chaque quatre mots dans chaque scène
            foreach ($scenes as $scene) {
                $words = explode(' ', $scene);
                $sceneWithLineBreaks = ''; // Réinitialisez la variable à chaque itération
                for ($i = 0; $i < count($words); $i++) {
                    $sceneWithLineBreaks .= $words[$i];
                    if (($i + 1) % 4 === 0 && $i < count($words) - 1) {
                        $sceneWithLineBreaks .= '<br>';
                    } else {
                        $sceneWithLineBreaks .= ' ';
                    }
                }
                $scenesWithLineBreaks[] = trim($sceneWithLineBreaks);
            }

            return view('layouts.wishes',
                [
                    'scenes' => $scenesWithLineBreaks,
                    'message' => $message
                ]
            );
        } else {
            return redirect()->route('not_found');
        }
    }

    public function getCounters() {
        $messagesCount = Message::count();
        $visitorsCount = $messagesCount * 4;

    return response()->json([
        'visitorsCount' => $visitorsCount,
        'messagesCount' => $messagesCount,
    ]);
}


}
