<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Universidad;

/**
* 
*/
class SearchComposer
{
	public function compose(View $view){
		$universidades = Universidad::orderBy('id','DES')->get();
		$view->with('universidades',$universidades);
	}
}