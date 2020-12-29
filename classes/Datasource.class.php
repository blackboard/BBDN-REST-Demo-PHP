<?php

class Datasource implements JsonSerializable {
	public $id = '';
	public $externalId = 'BBDN-DSK-PHP';
	public $description = 'Demo Data Source used for REST PHP Demo';

	public function jsonSerialize() {
		
		if ( $this->id == '' ) {
			return [
				'externalId' => $this->externalId,
				'description' => $this->description
			];
		} else {
			return [
				'id' => $this->id,
				'externalId' => $this->externalId,
				'description' => $this->description
			];
		}
	}
}