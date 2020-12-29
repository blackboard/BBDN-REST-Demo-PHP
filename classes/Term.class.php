<?php

class Term implements JsonSerializable
	{
		public $id = '';

		public $externalId = 'BBDN-TERM-PHP';

		public $dataSourceId = '';
		
		public $name = 'REST Demo Term - PHP';

		public $description = 'Term Used For REST Demo - PHP';

		public $availability = '';

		public function jsonSerialize() {
			
			if ( $this->id == '' ) {
				return [
					'externalId' => $this->externalId,
					'dataSourceId' => $this->dataSourceId,
					'name' => $this->name,
					'description' => $this->description,
					'availability' => $this->availability
				];
			} else {
				return [
					'id' => $this->id,
					'externalId' => $this->externalId,
					'dataSourceId' => $this->dataSourceId,
					'name' => $this->name,
					'description' => $this->description,
					'availability' => $this->availability
				];
			}
		}
	}