<?php

namespace Modules\AppendPriceListClient\Validator; 


class AppendPriceListClientValidator
{

	public function rule($data){
		return [
			'price_list_name' =>  'string|max:255'
		];
	}

	public function filterRules($data)
	{

	}


}
