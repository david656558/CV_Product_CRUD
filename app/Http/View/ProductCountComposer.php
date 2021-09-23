<?php
namespace App\Http\View;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class ProductCountComposer
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
        $products = Product::orderBy('id', 'DESC')->where('end_date', '>', time())->where('start_date', '<', time())->orWhere('start_date', '=', 0 )->where('status', 1)->with(['basket'=>function($q){
            $q->where('user_id', Auth()->id());
        }])->paginate(6);

        $view->with('productsGlobal', $products);
    }
}
