<?php
namespace App\Http\View;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class UserCountComposer
{
    public function __construct()
    {
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $deactivate = User::where('email_verified_at', null)->get();
        $activate = User::all();

        $data = [
          'activate' => $activate,
          'deactivate' => $deactivate,
        ];
        $view->with('usersGlobal', $data);
    }
}
