namespace App \ Http \ Controllers;
use Illuminate \ Http \ Request;
use App \ Http \ Controllers \ Controller;

class PrimeiroController extends Controller {

    public function hello () {
        return 'Olá, mundo!';
    }
}

