<?php

namespace App\Http\Controllers;

use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;
use Twilio\Rest\Client;

class TestController extends Controller
{
    protected $sid;
    protected $token;
    protected $key;
    protected $secret;

    public function __construct()
    {
        $this->sid = 'AC4614089ecc02eb4e085a138128781019';
        $this->token = '72a55306c9114f8162294fe72d53a59f';
        $this->key = 'SK8ca7f0fe2c6f670078781c6b4c2754df';
        $this->secret = 'm26DvLLzfe33QDB0pnC2KCQ6JuU1tjOx';
    }

    public function index()
    {
        $rooms = [];
        try {
            $client = new Client($this->sid, $this->token);
            $allRooms = $client->video->rooms->read([]);

            $rooms = array_map(function($room) {
                return $room->uniqueName;
            }, $allRooms);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } catch (ConfigurationException $e) {
        }
        return view('video', ['rooms' => $rooms]);
    }
    public function createRoom(Request $request)
    {
        $client = new Client($this->sid, $this->token);

        $exists = $client->video->rooms->read([ 'uniqueName' => $request->roomName]);

        if (empty($exists)) {
            $client->video->rooms->create([
                'uniqueName' => $request->roomName,
                'type' => 'group',
                'recordParticipantsOnConnect' => false
            ]);

            Log::debug("created new room: ".$request->roomName);
        }

        return redirect()->action('TestController@joinRoom', [
            'roomName' => $request->roomName
        ]);
    }
    public function joinRoom($roomName)
    {
        // A unique identifier for this user
        $identity = Auth::user()->name;

        Log::debug("joined with identity: $identity");
        $token = new AccessToken($this->sid, $this->key, $this->secret, 3600, $identity);

        $videoGrant = new VideoGrant();
        $videoGrant->setRoom($roomName);

        $token->addGrant($videoGrant);

        return view('room', [ 'accessToken' => $token->toJWT(), 'roomName' => $roomName ]);
    }
}
