<?php

namespace Modules\AppendPriceListClient\Services;


class AppendPriceListClientService {
	
	public function fields(){
		return config('appendpricelistclient.fields');
	}

	public function sample(){
		return config('appendpricelistclient.sample');
	}

}
