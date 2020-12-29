<?php

class Course implements JsonSerializable {
	public $id = '';
	public $externalId = 'BBDN-Java-PHP-Demo';
	public $courseId = 'BBDN-Java-PHP-Demo';
	public $name = 'Course Used For REST Demo - PHP';
	public $description = 'Course Used For REST Demo - PHP';
	public $allowGuests = FALSE;
	public $readOnly = FALSE;
	public $termId = '';
	public $dataSourceId = '';
	public $uuid = '';
	public $created = '';
	public $organization = '';
	public $availability = '';
	public $enrollment = '';
	public $locale =  '';

	public function jsonSerialize() {
		
		if ( $this->id == '' ) {
			return [
				'externalId' => $this->externalId,
				'courseId' => $this->courseId,
				'name' => $this->name,
				'description' => $this->description,
				'allowGuests' => $this->allowGuests,
				'readOnly' => $this->readOnly,
				'termId' => $this->termId,
				'dataSourceId' => $this->dataSourceId,
				'availability' => $this->availability
			];
		} else {
			return [
				'id' => $this->id,
				'externalId' => $this->externalId,
				'courseId' => $this->courseId,
				'name' => $this->name,
				'description' => $this->description,
				'allowGuests' => $this->allowGuests,
				'readOnly' => $this->readOnly,
				'termId' => $this->termId,
				'dataSourceId' => $this->dataSourceId,
				'availability' => $this->availability
			];
		}
	}
}