
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\Plan;

class PusherNotificationController extends Controller{

    public function sendNotification(){
        //Remember to change this with your cluster name.
        $options = array(
            'cluster' => 'ap2',
            'encrypted' => true
        );

        //Remember to set your credentials below.
        $pusher = new Pusher(
            'key',
            'secret',
            'app_id', $options
        );

        $message= "test";

        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notification', 'notification-event', $message);
    }
}