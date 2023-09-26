<?php

namespace DOTools;

use Nether\Common;

class LocationStore
extends Common\Datastore {

	public function
	__Construct(string $Dir) {
		parent::__Construct();

		$this->SetFilename(sprintf(
			'%s/do-tools-locations.json',
			$Dir
		));

		try { $this->Read(); }
		catch(Common\Error\FileNotFound $Err) { $this->Write(); }

		return;
	}

}
