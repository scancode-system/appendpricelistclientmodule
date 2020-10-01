<?php

namespace Modules\AppendPriceListClient\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'price_list_name' =>  'string|max:255'
		];
	}

	public function modifiers()
	{
		return  [];
	}

	public function columnsFormat($header)
	{
		return  [];
	}

}
