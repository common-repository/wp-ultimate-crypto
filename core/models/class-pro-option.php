<?php

namespace MABEL_WPUC\Core\Models {

	class Pro_option extends Option
	{
		public $text;

		public function __construct($title, $text)
		{
			parent::__construct(null,$text,$title,null,null);
		}

	}
}